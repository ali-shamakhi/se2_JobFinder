<?php

namespace am\KaryabBundle\Controller;

use am\KaryabBundle\Entity\Contacts;
use am\KaryabBundle\Form\contactUsFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $contacts = new Contacts();

        $form = $this->createForm(new contactUsFormType(), new Contacts());

        return $this->render('@amKaryab/Home/home.html.twig',array(
            'contactForm'=>$form->createView()
        ));
    }
//    public function redirectToProfileAction()
//    {
//        if($this->isGranted('ROLE_KARFARMA'))
//            return $this->redirectToRoute('karyab_karfarma_advertise_index');
//        return $this->redirectToRoute('am_karyab_relevant_advertises_for_karjoo');
//    }
}
