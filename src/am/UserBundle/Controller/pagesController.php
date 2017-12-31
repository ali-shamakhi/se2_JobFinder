<?php

namespace am\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pagesController extends Controller
{
    public function indexAction()
    {
        if($this->isGranted('ROLE_KARFARMA'))
            return $this->redirect('/panel/karfarma/advertise');

        return $this->redirect('/panel/karjoo/relevant_advertises');
    }
}
