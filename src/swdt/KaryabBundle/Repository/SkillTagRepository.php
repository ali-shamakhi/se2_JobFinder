<?php

namespace swdt\KaryabBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SkillTagRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SkillTagRepository extends EntityRepository
{
    public function getList()
    {
        return $this->findBy(array(),array(
            'name'=>"ASC"
        ));
    }
}
