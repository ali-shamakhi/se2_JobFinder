<?php

namespace swdt\KaryabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Advertise
 */
class Advertise
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $grade;

    /**
     * @var integer
     */
    private $coOperation;

    /**
     * @var integer
     */
    private $gender;

    /**
     * @var string
     */
    private $otherSkills;

    /**
     * @var integer
     */
    private $soldiery;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $skillTags;

    /**
     * @var boolean
     */
    private $isPublished;

    /**
     * @var boolean
     */
    private $isDeleted;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skillTags = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Advertise
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Advertise
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return Advertise
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    public function getGradeText()
    {
        switch ($this->grade){
            case 1:
                return "دکترا";
            case 2:
                return "فوق لیسانس";
            case 3:
                return "لیسانس";
            case 4:
                return "فوق دیپلم";
            case 5:
                return "دیپلم";
            case 6:
                return "زیر دیپلم";

        }
        return "";
    }

    /**
     * Set coOperation
     *
     * @param integer $coOperation
     * @return Advertise
     */
    public function setCoOperation($coOperation)
    {
        $this->coOperation = $coOperation;

        return $this;
    }

    /**
     * Get coOperation
     *
     * @return integer 
     */
    public function getCoOperation()
    {
        return $this->coOperation;
    }

    public static function getCoOperationChoices(){

        return array(
            0=> 'کارآموزی' , 1 => 'پاره وقت' ,2 => 'تمام وقت' , 3 => 'دورکاری',4 => 'کار دانشجویی'
        );

    }

    public function getCoOperationText()
    {
        $str=array();
        $choices= self::getCoOperationChoices();
        foreach ($this->coOperation as $c)
            $str[] = $choices[$c];
        return implode(",",$str);
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return Advertise
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
        return "مهم نیست";
    }

    /**
     * Set otherSkills
     *
     * @param string $otherSkills
     * @return Advertise
     */
    public function setOtherSkills($otherSkills)
    {
        $this->otherSkills = $otherSkills;

        return $this;
    }

    /**
     * Get otherSkills
     *
     * @return string 
     */
    public function getOtherSkills()
    {
        return $this->otherSkills;
    }

    /**
     * Set soldiery
     *
     * @param integer $soldiery
     * @return Advertise
     */
    public function setSoldiery($soldiery)
    {
        $this->soldiery = $soldiery;

        return $this;
    }

    public function getSoldieryText()
    {
        switch ($this->soldiery){
            case 1:
                return "معافیت دائم";
            case 2:
                return "پایان خدمت";
            case 3:
                return "معافیت تحصیلی";
        }
        return "مهم نیست";
    }

    /**
     * Get soldiery
     *
     * @return integer 
     */
    public function getSoldiery()
    {
        return $this->soldiery;
    }



    /**
     * Add skillTags
     *
     * @param \swdt\KaryabBundle\Entity\SkillTag $skillTags
     * @return Advertise
     */
    public function addSkillTag(\swdt\KaryabBundle\Entity\SkillTag $skillTags)
    {
        $this->skillTags[] = $skillTags;

        return $this;
    }

    /**
     * Remove skillTags
     *
     * @param \swdt\KaryabBundle\Entity\SkillTag $skillTags
     */
    public function removeSkillTag(\swdt\KaryabBundle\Entity\SkillTag $skillTags)
    {
        $this->skillTags->removeElement($skillTags);
    }

    /**
     * Get skillTags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkillTags()
    {
        return $this->skillTags;
    }
    /**
     * @var \swdt\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \swdt\UserBundle\Entity\User $user
     * @return Advertise
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobRequests;


    /**
     * Add jobRequests
     *
     * @param \swdt\KaryabBundle\Entity\jobRequest $jobRequests
     * @return Advertise
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
     * @var \DateTime
     */
    private $createdAt;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Advertise
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
     * Set isPublished
     *
     * @param boolean $isPublished
     * @return Advertise
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean 
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return Advertise
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @var string
     */
    private $brochure;


    /**
     * Set brochure
     *
     * @param string $brochure
     * @return Advertise
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return string
     */
    public function getBrochure()
    {
        return $this->brochure;
    }


    /**
     * Get web path to upload directory
     * @return string
     *  Relative Path.
     */
    protected function getUploadBrochurePath(){
        return '/uploads/brochure';
    }

    /**
     * Get absolute path to upload directory.
     *
     * @return string
     * Absolute path.
     */
    protected function getUploadBrochureAbsolutePath(){
        return __DIR__ . '/../../../../web/' . $this->getUploadBrochurePath();
    }

    /**
     * Get web path to a cover
     * @return null|string
     *  Relative path
     */
    public function getBrochureWeb(){
        return NULL === $this->getBrochure()
            ? '/swdt_template/img/noimage.jpg'
            : $this->getUploadBrochurePath() . '/' . $this->getBrochure();
    }

    /**
     * Get path on disk to a cover
     * @return null|string
     *  absolute path
     */
    public function getBrochureAbsolute(){
        return NULL === $this->getBrochure()
            ? NULL
            : $this->getUploadBrochureAbsolutePath() . '/' . $this->getBrochure();
    }


    private $brochureFile;

    /**
     * sets file
     * @param UploadedFile|NULL $brochureFile
     */
    public function setBrochureFile(UploadedFile $brochureFile = NULL){
        $this->brochureFile = $brochureFile;
    }

    /**
     * get file
     * @return UploadedFile
     */
    public function getBrochureFile(){
        return $this->brochureFile;
    }

    public function uploadBrochure(){
        //File property can be empty.
        if (NULL === $this->getBrochureFile()){
            return;
        }

        $fileName = time().'_'.$this->getBrochureFile()->getClientOriginalName();

        //move the uploaded file to the target directory using original name
        $this->getBrochureFile()->move(
            $this->getUploadBrochureAbsolutePath(),
            $fileName);

        // set the avatar
        $this->setBrochure($fileName);
    }

    /**
     * @var \DateTime
     */
    private $expireDate;


    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return Advertise
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }
}
