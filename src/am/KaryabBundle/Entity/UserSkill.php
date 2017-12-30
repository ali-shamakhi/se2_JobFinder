<?php

namespace am\KaryabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkill
 */
class UserSkill
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var \am\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \am\KaryabBundle\Entity\SkillTag
     */
    private $tag;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return UserSkill
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set user
     *
     * @param \am\UserBundle\Entity\User $user
     * @return UserSkill
     */
    public function setUser(\am\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \am\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tag
     *
     * @param \am\KaryabBundle\Entity\SkillTag $tag
     * @return UserSkill
     */
    public function setTag(\am\KaryabBundle\Entity\SkillTag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \am\KaryabBundle\Entity\SkillTag
     */
    public function getTag()
    {
        return $this->tag;
    }
}
