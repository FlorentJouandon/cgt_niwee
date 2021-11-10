<?php
namespace Models;

class Article
{
    private $id;
    private $date;
    private $title;
    private $text;
    private $img;
    private $pdf;

    public function __construct($id, $date, $title, $text, $img, $pdf)
    {
        $this -> id = $id;
        $this -> date = $date;
        $this -> title = $title;
        $this -> text = $text;
        $this -> img = $img;
        $this -> pdf = $pdf;
    }

    /////  ID  
    public function getId()
    {
        return $this -> id;
    }
    public function setId($id)
    {
        return $this -> id = $id;
    }

    /////  Date
    public function getDate()
    {
        return $this -> date;
    }
    public function setDate($date)
    {
        return $this -> date = $date;
    }

    /////  Title 
    public function getTitle()
    {
        return $this -> title;
    }
    public function setTitle($title)
    {
        return $this -> title = $title;
    }

    /////  Text
    public function getText()
    {
        return $this -> text;
    }
    public function setText($text)
    {
        return $this -> text = $text;
    }

    /////  Img  
    public function getImg()
    {
        return $this -> img;
    }
    public function setImg($img)
    {
        return $this -> img = $img;
    }

    /////  Pdf
    public function getPdf()
    {
        return $this -> pdf;
    }
    public function setPdf($pdf)
    {
        return $this -> pdf = $pdf;
    }

}