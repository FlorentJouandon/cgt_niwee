<?php
namespace Models;

class Email
{
    private $id;
    private $mail;
    private $newsletter;
    private $date;

    public function __construct($id, $mail, $newsletter, $date)
    {
        $this -> id -> $id;
        $this -> mail = $mail;
        $this -> newsletter = $newsletter;
        $this -> date = $date;
    }
        
    /**
     * getId and setId
     *
     * @return void
     */
    public function getId()
    {
        return $this -> id;
    }
    public function setId($id)
    {
        return $this -> id = $id;
    }
   
    /**
     * getMail and set
     *
     * @return void
     */
    public function getMail()
    {
        return $this -> mail;
    }
    public function setMail($mail)
    {
        return $this -> mail = $mail;
    }
   
    /**
     * getNewsletter and set
     *
     * @return void
     */
    public function getNewsletter()
    {
        return $this -> newsletter;
    }
    public function setNewsletter($newsletter)
    {
        return $this -> newsletter = $newsletter;
    }
   
    /**
     * getDate and set
     *
     * @return void
     */
    public function getDate()
    {
        return $this -> date;
    }
    public function setDate($date)
    {
        return $this -> date = $date;
    }

}