<?php

namespace am\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pagesController extends Controller
{
    public function indexAction()
    {
        if($this->isGranted('ROLE_KARFARMA'))
            return $this->render('@amUser/dashboard_Karfarma.html.twig');
        return $this->render('@amUser/dashboard_Karjoo.html.twig');
    }
}
