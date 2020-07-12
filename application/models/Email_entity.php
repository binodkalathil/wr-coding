<?php

/**
 * @ORM\Entity
 * @ORM\Table(name="emails")
 */
class Email_Entity extends CI_Model {

    /** 
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** 
     * @ORM\Column(type="integer") 
     */
    protected $uid;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $fromEmail;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $fromName;

    /** 
     * @ORM\Column(type="datetime") 
     */
    protected $date;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $subject;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $body;

    /** 
     * @ORM\Column(type="boolean") 
     */
    protected $isActive = true;


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