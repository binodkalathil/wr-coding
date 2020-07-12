<?php
// src/Email.php
class Email
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $uid;

    /**
     * @var string
     */
    protected $fromEmail;

    /**
     * @var string
     */
    protected $fromName;

    /**
     * @var datetime
     */
    protected $date;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var boolean
     */
    protected $isActive;


    public function getId()
    {
        return $this->id;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;
    }
    
    public function getFromName()
    {
        return $this->fromName;
    }

    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
    }
    
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    
    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }
    
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }


    
    
}