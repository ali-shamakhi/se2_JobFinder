<?php

namespace swdt\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Karfarma
 */
class Karfarma
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
    private $companyName;

    /**
     * @var string
     */
    private $companyEmail;

    /**
     * @var string
     */
    private $companyField;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $nationalId;

    /**
     * @var string
     */
    private $aboutPic = null;

    /**
     * @var \swdt\UserBundle\Entity\User
     */
    private $user;



    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Karfarma
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyEmail
     *
     * @param string $companyEmail
     * @return Karfarma
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get companyEmail
     *
     * @return string 
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * Set companyField
     *
     * @param string $companyField
     * @return Karfarma
     */
    public function setCompanyField($companyField)
    {
        $this->companyField = $companyField;

        return $this;
    }

    /**
     * Get companyField
     *
     * @return string 
     */
    public function getCompanyField()
    {
        return $this->companyField;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Karfarma
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
     * Set address
     *
     * @param string $address
     * @return Karfarma
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Karfarma
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
        return __DIR__ . '/../../../../web/' . $this->getUploadPath();
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
     * Set about
     *
     * @param string $about
     * @return Karfarma
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
     * Set nationalId
     *
     * @param string $nationalId
     * @return Karfarma
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
     * Set about_pic
     *
     * @param string $aboutPic
     * @return User
     */
    public function setAboutPic($aboutPic)
    {
        $this->aboutPic = $aboutPic;

        return $this;
    }

    /**
     * Get aboutPic
     *
     * @return string
     */
    public function getAboutPic()
    {
        return $this->aboutPic;
    }


    /**
     * Get web path to upload directory
     * @return string
     *  Relative Path.
     */
    protected function getUploadAboutPicPath(){
        return '/uploads/about_pic';
    }

    /**
     * Get absolute path to upload directory.
     *
     * @return string
     * Absolute path.
     */
    protected function getUploadAboutPicAbsolutePath(){
        return __DIR__ . '/../../../../web/' . $this->getUploadAboutPicPath();
    }

    /**
     * Get web path to a cover
     * @return null|string
     *  Relative path
     */
    public function getAboutPicWeb(){
        return NULL === $this->getAboutPic()
            ? '/swdt_template/img/noimage.jpg'
            : $this->getUploadAboutPicPath() . '/' . $this->getAboutPic();
    }

    /**
     * Get path on disk to a cover
     * @return null|string
     *  absolute path
     */
    public function getAboutPicAbsolute(){
        return NULL === $this->getAboutPic()
            ? NULL
            : $this->getUploadAboutPicAbsolutePath() . '/' . $this->getAboutPic();
    }

    private $aboutPicFile;

    /**
     * sets file
     * @param UploadedFile|NULL $aboutPicFile
     */
    public function setAboutPicFile(UploadedFile $aboutPicFile = NULL){
        $this->aboutPicFile = $aboutPicFile;
    }

    /**
     * get file
     * @return UploadedFile
     */
    public function getAboutPicFile(){
        return $this->aboutPicFile;
    }

    public function uploadAboutPic(){
        //File property can be empty.
        if (NULL === $this->getAboutPicFile()){
            return;
        }

        $fileName2 = time().'_'.$this->getAboutPicFile()->getClientOriginalName();

        //move the uploaded file to the target directory using original name
        $this->getAboutPicFile()->move(
            $this->getUploadAboutPicAbsolutePath(),
            $fileName2);

        // set the avatar
        $this->setAboutPic($fileName2);
    }
    /**
     * Set user
     *
     * @param \swdt\UserBundle\Entity\User $user
     * @return Karfarma
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
     * @var string
     */
    private $website;


    /**
     * Set website
     *
     * @param string $website
     * @return Karfarma
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
}
