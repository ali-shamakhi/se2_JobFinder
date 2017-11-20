<?php

namespace swdt\KaryabBundle\Controller;

use swdt\KaryabBundle\Entity\Advertise;
use swdt\KaryabBundle\Entity\jobRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ajaxController extends Controller
{
    public function searchTagsAction(Request $request)
    {
        if(!$request->isXmlHttpRequest())
            throw $this->createAccessDeniedException();
        $filterName = $request->request->get('filterName');
        $result = $this->getDoctrine()->getRepository('swdtKaryabBundle:SkillTag')->createQueryBuilder('o')
            ->where('o.name LIKE :filter')
            ->setParameter('filter', '%' . $filterName . '%')
            ->getQuery()
            ->getResult();
        $all = array();
        foreach ($result as $tag) {
            $all[] = array(
                'tag_id' => $tag->getId(),
                'name' => $tag->getName()
            );
        }

        return new Response(json_encode($all));
    }

    public function sendRequestAction(Request $request){
        $res=0;
        if($request->isXmlHttpRequest()) {
            $id=$request->request->get("id");
            $minSalary=$request->request->get("minSalary");

            if(!$id | !is_numeric($id))
                return new Response($res);
            if(!$minSalary | !is_numeric($minSalary))
                return new Response(3);

            $advertise = $this->getDoctrine()->getRepository('swdtKaryabBundle:Advertise')->findOnePublished($id);

            if(!$advertise)
                return new Response($res);
            foreach ($this->getUser()->getJobRequests() as $ad){
                if($ad->getAdvertise()==$advertise)
                    return new Response(2);
            }
            $req = new jobRequest();
            $req->setCreatedAt(new \DateTime());
            $req->setUser($this->getUser());
            $req->setAdvertise($advertise);
            $req->setMinimumSalary($minSalary);
            $em = $this->getDoctrine()->getManager();
            $em->persist($req);
            $em->flush();

            //send alert to company
            $email = $advertise->getUser()->getEmail();
            $EC=new emailController();
            $EC->setContainer($this->container);


            $EC->newRequestNotification($this->getUser()->getFName()." ".$this->getUser()->getLName(),$advertise->getTitle(),$email);

            $res = 1;
        }
        return new Response($res);
    }
}
