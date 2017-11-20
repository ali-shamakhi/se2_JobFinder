<?php

namespace swdt\KaryabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jobRequest
 */
class jobRequest
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $minimumSalary;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return jobRequest
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @var \swdt\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \swdt\KaryabBundle\Entity\Advertise
     */
    private $advertise;


    /**
     * Set user
     *
     * @param \swdt\UserBundle\Entity\User $user
     * @return jobRequest
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
     * Set advertise
     *
     * @param \swdt\KaryabBundle\Entity\Advertise $advertise
     * @return jobRequest
     */
    public function setAdvertise(\swdt\KaryabBundle\Entity\Advertise $advertise = null)
    {
        $this->advertise = $advertise;

        return $this;
    }

    /**
     * Get advertise
     *
     * @return \swdt\KaryabBundle\Entity\Advertise 
     */
    public function getAdvertise()
    {
        return $this->advertise;
    }

    /**
     * Set minimumSalary
     *
     * @param integer $minimumSalary
     * @return jobRequest
     */
    public function setMinimumSalary($minimumSalary)
    {
        $this->minimumSalary = $minimumSalary;

        return $this;
    }

    /**
     * Get minimumSalary
     *
     * @return integer 
     */
    public function getMinimumSalary()
    {
        return $this->minimumSalary;
    }
}
