<?php

namespace swdt\KaryabBundle\Entity;

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
     * @var \swdt\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \swdt\KaryabBundle\Entity\SkillTag
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
     * @param \swdt\UserBundle\Entity\User $user
     * @return UserSkill
     */
    public function setUser(\swdt\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \swdt\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tag
     *
     * @param \swdt\KaryabBundle\Entity\SkillTag $tag
     * @return UserSkill
     */
    public function setTag(\swdt\KaryabBundle\Entity\SkillTag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \swdt\KaryabBundle\Entity\SkillTag 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
