<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace am\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use am\UserBundle\Form\ChangePasswordFormType;
use am\UserBundle\Form\ChangePasswordFormType_karjoo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the password change
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ChangePasswordController extends Controller
{
    /**
     * Change user password
     */
    public function changePasswordAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        //$formFactory = $this->get('fos_user.change_password.form.factory');

        if($this->isGranted("ROLE_KARFARMA"))
            $form = $this->createForm(new ChangePasswordFormType());
        elseif ($this->isGranted("ROLE_KARJOO"))
            $form = $this->createForm(new ChangePasswordFormType_karjoo());

        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                if($this->isGranted("ROLE_KARFARMA"))
                    $url = $this->generateUrl('karyab_karfarma_advertise_index');
                else
                    $url = $this->generateUrl('am_karyab_relevant_advertises_for_karjoo');

                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        if($this->isGranted("ROLE_KARFARMA"))
        return $this->render('@amUser/ChangePassword/changePassword2.html.twig', array(
            'form' => $form->createView()
        ));

        return $this->render('@amUser/ChangePassword/changePassword.html.twig', array(
            'form' => $form->createView()
        ));

    }
}
