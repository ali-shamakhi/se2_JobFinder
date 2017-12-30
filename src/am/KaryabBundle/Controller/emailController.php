<?php

namespace am\KaryabBundle\Controller;

use am\KaryabBundle\Entity\Advertise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class emailController extends Controller
{
    public function newJobNotification(Advertise $advertise,$emails=array()){
        $message = \Swift_Message::newInstance()
            ->setSubject('شغل جدید')
            ->setFrom(array('notification@'.$this->container->getParameter('maindomain')=>$this->container->getParameter('sitename')))
            ->setTo('info@'.$this->container->getParameter('maindomain'))
            ->setBcc($emails)
            ->setBody(
                $this->renderView(
                    'amKaryabBundle:Email:newJob.html.twig',
                    array('ad' => $advertise,
                    )
                ),
                'text/html'
            );
        $this->get('mailer')->send($message);
    }

    public function newRequestNotification($name,$adTitle,$email){
        $message = \Swift_Message::newInstance()
            ->setSubject('درخواست شغل '.$adTitle)
            ->setFrom(array('notification@'.$this->container->getParameter('maindomain')=>$this->container->getParameter('sitename')))
            ->setTo($email)
            ->setBody(
                $this->renderView(
                    'amKaryabBundle:Email:newRequest.html.twig', array(
                        'ad' => $adTitle,
                        'name' => $name,
                    )
                ),
                'text/html'
            );
        $this->get('mailer')->send($message);
    }
}
