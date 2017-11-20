<?php

namespace swdt\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pagesController extends Controller
{
    public function indexAction()
    {
        if($this->isGranted('ROLE_KARFARMA'))
            return $this->render('@swdtUser/dashboard_Karfarma.html.twig');
        return $this->render('@swdtUser/dashboard_Karjoo.html.twig');
    }
}
