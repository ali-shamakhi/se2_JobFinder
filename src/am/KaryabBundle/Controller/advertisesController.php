<?php

namespace am\KaryabBundle\Controller;

use am\KaryabBundle\Entity\Advertise;
use am\KaryabBundle\Entity\jobRequest;
use am\KaryabBundle\Form\advertisesFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class advertisesController extends Controller
{

    public function publishedAction()
    {
        $repository = $this->getDoctrine()->getRepository('amKaryabBundle:Advertise');

        $advertises_list = $repository->findAll();

        return $this->render('@amKaryab/panel_karjoo/list_ads.html.twig', array('advertises_list' => $advertises_list));
    }


    public function relevantAction()
    {
        $userSkills=array();

        foreach ($this->getUser()->getSkills() as $skill)
            $userSkills[]=$skill->getTag()->getId();

        $em = $this->getDoctrine();

        $sql = "SELECT advertise_id as ad FROM se_advertise_tags";
        if(count($userSkills)>0)
            $sql.= " WHERE tag_id IN (".implode(',',$userSkills).")";
        else
            $sql.=" WHERE 1=0";
        $connection = $em->getManager()->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();

        //possible ads to be shown
        $results = $statement->fetchAll();


        $dql="SELECT ad FROM amKaryabBundle:Advertise ad";


        foreach ($results as $key=>$result)
            $results[$key]=$result['ad'];

        $results=array_unique($results);
        $count=count($results);
        if($count>0)
            $dql.=" WHERE ad.id IN (".implode(',',$results).")";
        else
            $dql.=" WHERE 1=0";

        $now = date("Y-m-d");
        $dql.=" AND ad.isPublished=true AND ad.isDeleted=false AND ad.expireDate>='{$now}'";
       // $dql.=" AND ad.gender IN(0,".$this->getUser()->getGender().")";
       // $dql.=" AND ad.grade>=".$this->getUser()->getKarjoo()->getGrade();
        $dql.=" ORDER BY ad.createdAt DESC";

        $advertises_list = $em->getEntityManager()->createQuery($dql)->getResult();
        $totalCount = count($advertises_list);

        return $this->render('@amKaryab/panel_karjoo/list_ads.html.twig', array(
            'ads' => $advertises_list,
            'total'=>$totalCount,
            'resume'=>$this->getUser()->getKarjoo()->getResumeWeb(),
            ));
    }

    private function notifReleventUsers(Advertise $advertise)
    {
        $userSkills=array();

        foreach ($advertise->getSkillTags() as $skill)
            $userSkills[]=$skill->getId();

        $em = $this->getDoctrine();

        $sql = "SELECT user_id FROM se_users_skills WHERE user_id is not NULL";
        if(count($userSkills)>0)
            $sql.= " AND tag_id IN (".implode(',',$userSkills).")";
        else
            return;
        $connection = $em->getManager()->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();

        //posible ads to be shown
        $results = $statement->fetchAll();


        $sql="SELECT email FROM am_users";


        foreach ($results as $key=>$result)
            $results[$key]=$result['user_id'];

        $results=array_unique($results);
        $count=count($results);
        if($count>0)
            $sql.=" WHERE id IN (".implode(',',$results).")";
        else return;

        $statement = $connection->prepare($sql);
        $statement->execute();

        //posible ads to be shown
        $emails = $statement->fetchAll();
        $EC=new emailController();
        $EC->setContainer($this->container);

        foreach ($emails as $key=>$result)
            $emails[$key]=$result['email'];

        $EC->newJobNotification($advertise,$emails);

    }

    public function newAction(Request $request)
    {
        $advertise = new Advertise();
        $advertise->setIsDeleted(false);
        $advertise->setIsPublished(true);

        $form = $this->createForm(new advertisesFormType(),$advertise);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $advertise->uploadBrochure();

            $em=$this->getDoctrine()->getManager();

            $advertise->setUser($this->getUser());

            $advertise->setCreatedAt(new \DateTime());
            $em->persist($advertise);

            $em->flush();

            $this->notifReleventUsers($advertise);

            return $this->render('@amKaryab/alerts.html.twig',array(
                'message'=>"آگهی جدیدی ایجاد شد!",
                'targetUrl'=>$this->generateUrl('karyab_karfarma_advertise_index')
            ));
        }

        return $this->render('@amKaryab/panel_karfarma/advertise/new.html.twig',array(
            'form' => $form->createView(),
            'tags'=>$this->getDoctrine()->getRepository('amKaryabBundle:SkillTag')->getList(),
            'brochureWeb'=>$advertise->getBrochureWeb(),
            'brochure'=>$advertise->getBrochure(),
        ));

    }

    public function editAction(Request $request,Advertise $advertise)
    {
        if($advertise->getUser()!=$this->getUser())
            throw $this->createAccessDeniedException();

        $form = $this->createForm(new advertisesFormType(),$advertise);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            if($request->request->get('deleteBrochure')==1)
                $advertise->setBrochure(null);

            $advertise->uploadBrochure();

            $em=$this->getDoctrine()->getManager();

            $em->persist($advertise);

            $em->flush();
            return $this->redirectToRoute('karyab_karfarma_advertise_index');
        }

        return $this->render('@amKaryab/panel_karfarma/advertise/new.html.twig',array(
            'form' => $form->createView(),
            'skills'=>$advertise->getSkillTags(),
            'tags'=>$this->getDoctrine()->getRepository('amKaryabBundle:SkillTag')->getList(),
            'brochureWeb'=>$advertise->getBrochureWeb(),
            'brochure'=>$advertise->getBrochure(),
        ));

    }

    public function deleteAction(Advertise $advertise)
    {
        $em=$this->getDoctrine()->getManager();

        if($this->getUser()!=$advertise->getUser())
            throw $this->createAccessDeniedException();

        $advertise->setIsDeleted(true);

        $em->persist($advertise);

        $em->flush();

        return $this->render('@amKaryab/alerts.html.twig',array(
            'message'=>"آگهی مورد نظر شما حذف شد...",
            'targetUrl'=>$this->generateUrl('karyab_karfarma_advertise_index')
        ));

    }

    public function disableAction(Advertise $advertise)
    {
        $em=$this->getDoctrine()->getManager();

        if($this->getUser()!=$advertise->getUser())
            throw $this->createAccessDeniedException();

        $advertise->setIsPublished(false);

        $em->persist($advertise);

        $em->flush();

        return $this->render('@amKaryab/alerts.html.twig',array(
            'message'=>"آگهی مورد نظر شما غیر فعال شد...",
            'targetUrl'=>$this->generateUrl('karyab_karfarma_advertise_index')
        ));
    }

    public function enableAction(Advertise $advertise)
    {
        $em=$this->getDoctrine()->getManager();

        if($this->getUser()!=$advertise->getUser())
            throw $this->createAccessDeniedException();

        $advertise->setIsPublished(true);

        $em->persist($advertise);

        $em->flush();

        return $this->render('@amKaryab/alerts.html.twig',array(
            'message'=>"آگهی مورد نظر شما فعال شد...",
            'targetUrl'=>$this->generateUrl('karyab_karfarma_advertise_index')
        ));
    }

    public function listKarfaramaAction(){

        $ads = $this->getDoctrine()->getRepository('amKaryabBundle:Advertise')
            ->findBy(array(
                    'user'=>$this->getUser(),
                    'isDeleted'=>false,
                ),array('createdAt'=>'DESC')
            );


        return  $this->render('@amKaryab/panel_karfarma/advertise/list.html.twig',array(
           'ads'=>$ads,
            'total' => count($ads),
        ));

    }

}
