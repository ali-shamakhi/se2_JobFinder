<?php

namespace swdt\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Karjoo
 */
class Karjoo
{
    /**
     * @var int
     */
    private $id;


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
     * @var string
     */
    private $studentId;

    /**
     * @var string
     */
    private $nationalId;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var integer
     */
    private $soldiering;

    /**
     * @var integer
     */
    private $grade;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var string
     */
    private $website;

    /**
     * @var integer
     */
    private $is_student;

    /**
     * @var string
     */
    private $current_university;

    /**
     * @var string
     */
    private $current_field;

    /**
     * @var string
     */
    private $diplom_univesity;

    /**
     * @var string
     */
    private $diplom_field;

    /**
     * @var string
     */
    private $fogh_diplom_univesity;

    /**
     * @var string
     */
    private $fogh_diplom_field;

    /**
     * @var string
     */
    private $licanse_univesity;

    /**
     * @var string
     */
    private $licanse_field;

    /**
     * @var string
     */
    private $fogh_licanse_univesity;

    /**
     * @var string
     */
    private $fogh_licanse_field;

    /**
     * @var string
     */
    private $phd_univesity;

    /**
     * @var string
     */
    private $phd_field;

    /**
     * @var \swdt\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set studentId
     *
     * @param string $studentId
     * @return Karjoo
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return string 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set nationalId
     *
     * @param string $nationalId
     * @return Karjoo
     */
    public function setNationalId($nationalId)
    {
        $this->nationalId = $nationalId;

        return $this;
    }

    /**
     * Get nationalId
     *
     * @return string 
     */
    public function getNationalId()
    {
        return $this->nationalId;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return Karjoo
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Karjoo
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Get web path to upload directory
     * @return string
     *  Relative Path.
     */
    protected function getUploadPath(){
        return '/uploads/avatars';
    }

    /**
     * Get absolute path to upload directory.
     *
     * @return string
     * Absolute path.
     */
    protected function getUploadAbsolutePath(){
        return __DIR__ . '/../../../../public_html/' . $this->getUploadPath();
    }

    /**
     * Get web path to a cover
     * @return null|string
     *  Relative path
     */
    public function getAvatarWeb(){
        return NULL === $this->getAvatar()
            ? '/swdt_template/img/noimage.jpg'
            : $this->getUploadPath() . '/' . $this->getAvatar();
    }

    /**
     * Get path on disk to a cover
     * @return null|string
     *  absolute path
     */
    public function getAvatarAbsolute(){
        return NULL === $this->getAvatar()
            ? NULL
            : $this->getUploadAbsolutePath() . '/' . $this->getAvatar();
    }


    private $file;

    /**
     * sets file
     * @param UploadedFile|NULL $file
     */
    public function setFile(UploadedFile $file = NULL){
        $this->file = $file;
    }

    /**
     * get file
     * @return UploadedFile
     */
    public function getFile(){
        return $this->file;
    }

    public function upload(){
        //File property can be empty.
        if (NULL === $this->getFile()){
            return;
        }

        $fileName = time().'_'.$this->getId().'_'.$this->getFile()->getClientOriginalName();

        //move the uploaded file to the target directory using original name
        $this->getFile()->move(
            $this->getUploadAbsolutePath(),
            $fileName);

        // set the avatar
        $this->setAvatar($fileName);

        //cleanup
        //$this->setFile();
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Karjoo
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set soldiering
     *
     * @param integer $soldiering
     * @return Karjoo
     */
    public function setSoldiering($soldiering)
    {
        $this->soldiering = $soldiering;

        return $this;
    }

    /**
     * Get soldiering
     *
     * @return integer
     */
    public function getSoldiering()
    {
        return $this->soldiering;
    }

    public function getSoldieryText()
    {
        switch ($this->soldiering){
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
     * Set grade
     *
     * @param integer $grade
     * @return Karjoo
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
     * Set resume
     *
     * @param string $resume
     * @return User
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Get web path to upload directory
     * @return string
     *  Relative Path.
     */
    protected function getUploadResumePath(){
        return '/uploads/resumes';
    }

    /**
     * Get absolute path to upload directory.
     *
     * @return string
     * Absolute path.
     */
    protected function getUploadResumeAbsolutePath(){
        return __DIR__ . '/../../../../public_html/' . $this->getUploadResumePath();
    }

    /**
     * Get web path to a cover
     * @return null|string
     *  Relative path
     */
    public function getResumeWeb(){
        return NULL === $this->getResume()
            ? NULL
            : $this->getUploadResumePath() . '/' . $this->getResume();
    }

    /**
     * Get path on disk to a cover
     * @return null|string
     *  absolute path
     */
    public function getResumeAbsolute(){
        return NULL === $this->getResume()
            ? NULL
            : $this->getUploadResumeAbsolutePath() . '/' . $this->getResume();
    }


    private $resumeFile;

    /**
     * sets file
     * @param UploadedFile|NULL $resumeFile
     */
    public function setResumeFile(UploadedFile $resumeFile = NULL){
        $this->resumeFile = $resumeFile;
    }

    /**
     * get file
     * @return UploadedFile
     */
    public function getResumeFile(){
        return $this->resumeFile;
    }

    public function uploadResume(){
        //File property can be empty.
        if (NULL === $this->getResumeFile()){
            return;
        }

        $fileName = time().'_'.$this->getResumeFile()->getClientOriginalName();

        //move the uploaded file to the target directory using original name
        $this->getResumeFile()->move(
            $this->getUploadResumeAbsolutePath(),
            $fileName);

        // set the avatar
        $this->setResume($fileName);

        //cleanup
        //$this->setFile();
    }


    /**
     * Set website
     *
     * @param string $website
     * @return Karjoo
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set is_student
     *
     * @param integer $isStudent
     * @return Karjoo
     */
    public function setIsStudent($isStudent)
    {
        $this->is_student = $isStudent;

        return $this;
    }

    /**
     * Get is_student
     *
     * @return integer 
     */
    public function getIsStudent()
    {
        return $this->is_student;
    }

    /**
     * Set current_university
     *
     * @param string $currentUniversity
     * @return Karjoo
     */
    public function setCurrentUniversity($currentUniversity)
    {
        $this->current_university = $currentUniversity;

        return $this;
    }

    /**
     * Get current_university
     *
     * @return string 
     */
    public function getCurrentUniversity()
    {
        return $this->current_university;
    }

    /**
     * Set current_field
     *
     * @param string $currentField
     * @return Karjoo
     */
    public function setCurrentField($currentField)
    {
        $this->current_field = $currentField;

        return $this;
    }

    /**
     * Get current_field
     *
     * @return string 
     */
    public function getCurrentField()
    {
        return $this->current_field;
    }

    /**
     * Set diplom_univesity
     *
     * @param string $diplomUnivesity
     * @return Karjoo
     */
    public function setDiplomUnivesity($diplomUnivesity)
    {
        $this->diplom_univesity = $diplomUnivesity;

        return $this;
    }

    /**
     * Get diplom_univesity
     *
     * @return string 
     */
    public function getDiplomUnivesity()
    {
        return $this->diplom_univesity;
    }

    /**
     * Set diplom_field
     *
     * @param string $diplomField
     * @return Karjoo
     */
    public function setDiplomField($diplomField)
    {
        $this->diplom_field = $diplomField;

        return $this;
    }

    /**
     * Get diplom_field
     *
     * @return string 
     */
    public function getDiplomField()
    {
        return $this->diplom_field;
    }

    /**
     * Set fogh_diplom_univesity
     *
     * @param string $foghDiplomUnivesity
     * @return Karjoo
     */
    public function setFoghDiplomUnivesity($foghDiplomUnivesity)
    {
        $this->fogh_diplom_univesity = $foghDiplomUnivesity;

        return $this;
    }

    /**
     * Get fogh_diplom_univesity
     *
     * @return string 
     */
    public function getFoghDiplomUnivesity()
    {
        return $this->fogh_diplom_univesity;
    }

    /**
     * Set fogh_diplom_field
     *
     * @param string $foghDiplomField
     * @return Karjoo
     */
    public function setFoghDiplomField($foghDiplomField)
    {
        $this->fogh_diplom_field = $foghDiplomField;

        return $this;
    }

    /**
     * Get fogh_diplom_field
     *
     * @return string 
     */
    public function getFoghDiplomField()
    {
        return $this->fogh_diplom_field;
    }

    /**
     * Set licanse_univesity
     *
     * @param string $licanseUnivesity
     * @return Karjoo
     */
    public function setLicanseUnivesity($licanseUnivesity)
    {
        $this->licanse_univesity = $licanseUnivesity;

        return $this;
    }

    /**
     * Get licanse_univesity
     *
     * @return string 
     */
    public function getLicanseUnivesity()
    {
        return $this->licanse_univesity;
    }

    /**
     * Set licanse_field
     *
     * @param string $licanseField
     * @return Karjoo
     */
    public function setLicanseField($licanseField)
    {
        $this->licanse_field = $licanseField;

        return $this;
    }

    /**
     * Get licanse_field
     *
     * @return string 
     */
    public function getLicanseField()
    {
        return $this->licanse_field;
    }

    /**
     * Set fogh_licanse_univesity
     *
     * @param string $foghLicanseUnivesity
     * @return Karjoo
     */
    public function setFoghLicanseUnivesity($foghLicanseUnivesity)
    {
        $this->fogh_licanse_univesity = $foghLicanseUnivesity;

        return $this;
    }

    /**
     * Get fogh_licanse_univesity
     *
     * @return string 
     */
    public function getFoghLicanseUnivesity()
    {
        return $this->fogh_licanse_univesity;
    }

    /**
     * Set fogh_licanse_field
     *
     * @param string $foghLicanseField
     * @return Karjoo
     */
    public function setFoghLicanseField($foghLicanseField)
    {
        $this->fogh_licanse_field = $foghLicanseField;

        return $this;
    }

    /**
     * Get fogh_licanse_field
     *
     * @return string 
     */
    public function getFoghLicanseField()
    {
        return $this->fogh_licanse_field;
    }

    /**
     * Set phd_univesity
     *
     * @param string $phdUnivesity
     * @return Karjoo
     */
    public function setPhdUnivesity($phdUnivesity)
    {
        $this->phd_univesity = $phdUnivesity;

        return $this;
    }

    /**
     * Get phd_univesity
     *
     * @return string 
     */
    public function getPhdUnivesity()
    {
        return $this->phd_univesity;
    }

    /**
     * Set phd_field
     *
     * @param string $phdField
     * @return Karjoo
     */
    public function setPhdField($phdField)
    {
        $this->phd_field = $phdField;

        return $this;
    }

    /**
     * Get phd_field
     *
     * @return string 
     */
    public function getPhdField()
    {
        return $this->phd_field;
    }

    /**
     * Set user
     *
     * @param \swdt\UserBundle\Entity\User $user
     * @return Karjoo
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
     * @var array
     */
    private $coOperation;


    /**
     * Set coOperation
     *
     * @param array $coOperation
     * @return Karjoo
     */
    public function setCoOperation($coOperation)
    {
        $this->coOperation = $coOperation;

        return $this;
    }

    /**
     * Get coOperation
     *
     * @return array 
     */
    public function getCoOperation()
    {
        return $this->coOperation;
    }
}
