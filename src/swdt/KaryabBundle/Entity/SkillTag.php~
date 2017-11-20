<?php

namespace swdt\KaryabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillTag
 */
class SkillTag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $skills;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $advertises;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
        $this->advertises = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return SkillTag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add skills
     *
     * @param \swdt\KaryabBundle\Entity\UserSkill $skills
     * @return SkillTag
     */
    public function addSkill(\swdt\KaryabBundle\Entity\UserSkill $skills)
    {
        $this->skills[] = $skills;

        return $this;
    }

    /**
     * Remove skills
     *
     * @param \swdt\KaryabBundle\Entity\UserSkill $skills
     */
    public function removeSkill(\swdt\KaryabBundle\Entity\UserSkill $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add advertises
     *
     * @param \swdt\KaryabBundle\Entity\Advertise $advertises
     * @return SkillTag
     */
    public function addAdvertise(\swdt\KaryabBundle\Entity\Advertise $advertises)
    {
        $this->advertises[] = $advertises;

        return $this;
    }

    /**
     * Remove advertises
     *
     * @param \swdt\KaryabBundle\Entity\Advertise $advertises
     */
    public function removeAdvertise(\swdt\KaryabBundle\Entity\Advertise $advertises)
    {
        $this->advertises->removeElement($advertises);
    }

    /**
     * Get advertises
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdvertises()
    {
        return $this->advertises;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }
}
