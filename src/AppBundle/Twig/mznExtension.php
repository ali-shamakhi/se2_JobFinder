<?php
/**
 * Created by PhpStorm.
 * User: mohammad
 * Date: 4/8/16
 * Time: 12:39 AM
 */

namespace AppBundle\Twig;

class mznExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('jdate', array($this, 'jdateFilter')),
        );
    }

    public function jdateFilter(\DateTime $originalDate)
    {
        $oJdate=new \AppBundle\Controller\jDateTime(true, true, 'Asia/Tehran');
        $time = $originalDate->getTimestamp();
        return $oJdate->date("Y/m/d", $time);
    }

    public function getName()
    {
        return 'mzn_extension';
    }
}