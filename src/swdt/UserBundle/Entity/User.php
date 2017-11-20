<?php

namespace swdt\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $fName;

    /**
     * @var string
     */
    private $lName;

    /**
     * @var int
     */
    private $gender;

    /**
     * @var int
     */
    private $birthYear;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var \swdt\UserBundle\Entity\Karjoo
     */
    private $karjoo;

    /**
     * @var \swdt\UserBundle\Entity\Karfarma
     */
    private $karfarma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobRequests;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $advertises;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $skills;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->skills = new ArrayCollection();
        $this->advertises=new ArrayCollection();
        $this->jobRequests=new ArrayCollection();
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
     * Set fName
     *
     * @param string $fName
     * @return User
     */
    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    /**
     * Get fName
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * Set lName
     *
     * @param string $lName
     * @return User
     */
    public function setLName($lName)
    {
        $this->lName = $lName;

        return $this;
    }

    /**
     * Get lName
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
         * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    public function getGenderText()
    {
        switch ($this->gender){
            case 1:
                return "آقا";
            case 2:
                return "خانم";
        }
        return "";
    }

    /**
     * Set birthYear
     *
     * @param integer $birthYear
     * @return User
     */
    public function setBirthYear($birthYear)
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    /**
     * Get birthYear
     *
     * @return integer 
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Add skills
     *
     * @param \swdt\KaryabBundle\Entity\UserSkill $skills
     * @return User
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
     * @return User
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

    /**
     * Add jobRequests
     *
     * @param \swdt\KaryabBundle\Entity\jobRequest $jobRequests
     * @return User
     */
    public function addJobRequest(\swdt\KaryabBundle\Entity\jobRequest $jobRequests)
    {
        $this->jobRequests[] = $jobRequests;

        return $this;
    }

    /**
     * Remove jobRequests
     *
     * @param \swdt\KaryabBundle\Entity\jobRequest $jobRequests
     */
    public function removeJobRequest(\swdt\KaryabBundle\Entity\jobRequest $jobRequests)
    {
        $this->jobRequests->removeElement($jobRequests);
    }

    /**
     * Get jobRequests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobRequests()
    {
        return $this->jobRequests;
    }

    /**
     * Set karjoo
     *
     * @param \swdt\UserBundle\Entity\Karjoo $karjoo
     * @return User
     */
    public function setKarjoo(\swdt\UserBundle\Entity\Karjoo $karjoo = null)
    {
        if(!$karjoo)
            $karjoo->setUser($this);

        $this->karjoo = $karjoo;

        return $this;
    }

    /**
     * Get karjoo
     *
     * @return \swdt\UserBundle\Entity\Karjoo 
     */
    public function getKarjoo()
    {
        return $this->karjoo;
    }

    /**
     * Set karfarma
     *
     * @param \swdt\UserBundle\Entity\Karfarma $karfarma
     * @return User
     */
    public function setKarfarma(\swdt\UserBundle\Entity\Karfarma $karfarma = null)
    {
        if(!$karfarma)
            $karfarma->setUser($this);
        $this->karfarma = $karfarma;

        return $this;
    }

    /**
     * Get karfarma
     *
     * @return \swdt\UserBundle\Entity\Karfarma 
     */
    public function getKarfarma()
    {
        return $this->karfarma;
    }
}
