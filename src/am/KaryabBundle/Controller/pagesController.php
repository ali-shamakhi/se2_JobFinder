<?php

namespace am\KaryabBundle\Controller;

use am\KaryabBundle\Entity\Contacts;
use am\KaryabBundle\Form\contactUsFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class pagesController extends Controller
{
    public function aboutAction()
    {return $this->render('@amKaryab/about.html.twig');}

    public function contactUsAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {

            $contacts = new Contacts();

            $form = $this->createForm(new contactUsFormType(), $contacts);

            $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {

                $contacts->setCreatedAt(new \DateTime());
                $contacts->setIPAddress($request->getClientIp());

                if ($this->getUser()) {
                    $fullName = $this->getUser()->getFName() . " " . $this->getUser()->getLName();
                    $UserEmail = $this->getUser()->getEmail();
                    $contacts->setName($fullName);
                    $contacts->setEmail($UserEmail);
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($contacts);
                $em->flush();

//                $message = \Swift_Message::newInstance()
//                    ->setSubject($form->get('subject')->getData())
//                    ->setFrom($form->get('mail')->getData())
//                    ->setTo('webmaster@daneshkar.net')
//                    ->setBody(
//                        $this->renderView(
//                            '@amKaryab/Email/newContactUs.html.twig',
//                            array(
//                                'ip' => $request->getClientIp(),
//                                'name' => $form->get('name')->getData(),
//                                'message' => $form->get('message')->getData()
//                            )
//                        )
//                    );
//
//                $this->get('mailer')->send($message);

                return new JsonResponse(array('success'=>true));

            }
        }
        return new JsonResponse(array('success'=>false),400);


    }
}