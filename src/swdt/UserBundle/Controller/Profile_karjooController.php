<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace swdt\UserBundle\Controller;


use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use swdt\KaryabBundle\Entity\jobRequest;
use swdt\UserBundle\Entity\User;
use swdt\UserBundle\Form\Profile_karjooFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class Profile_karjooController extends Controller
{
    /**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('@swdtUser/Profile/showKarjoo.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * Show the user
     */
    public function showProfileAction(User $user,$rId)
    {
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        if(!$this->isGranted("ROLE_KARFARMA"))
            throw $this->createAccessDeniedException();

        $req=$this->getDoctrine()->getRepository('swdtKaryabBundle:jobRequest')->find($rId);
        if(!$req | $req->getAdvertise()->getUser()!=$this->getUser())
            throw $this->createAccessDeniedException();

        if(!in_array("ROLE_KARJOO",$user->getRoles()))
            throw $this->createAccessDeniedException();

        return $this->render('@swdtUser/Profile/showKarjoo.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->createForm(new Profile_karjooFormType());

        $original=new ArrayCollection();
        foreach ($user->getSkills() as $item) {
            $original->add($item);
        }
        $form = $formFactory;
        $form->setData($user);

        $form->handleRequest($request);


        if ($form->isValid()) {
            if($request->request->get('deleteResume')==1)
                $user->getKarjoo()->setResume(null);

            $user->getKarjoo()->uploadResume();

            if($request->request->get('deleteAvatar')==1)
                $user->getKarjoo()->setAvatar(null);

            $user->getKarjoo()->upload();

            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $em=$this->getDoctrine()->getManager();
            foreach ($user->getSkills() as $skill){
                $skill->setUser($this->getUser());
                $em->persist($skill);
                $em->flush();
            }
            foreach ($original as $skill){
                if(!$user->getSkills()->contains($skill))
                {
                    $em->remove($skill);
                    $em->flush();
                }
            }

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_edit_karjoo');
                return $this->render('@swdtKaryab/alerts.html.twig',array(
                    'targetUrl'=>$url
                ));
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('@swdtUser/Profile/edit_karjoo.html.twig', array(
            'form' => $form->createView(),
            'tags'=>$this->getDoctrine()->getRepository('swdtKaryabBundle:SkillTag')->getList(),
        ));
    }
}
