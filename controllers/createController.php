<?php
namespace Controllers;
    use Traits\Request;


if(isset($_POST['create'])){
    if(!empty($_POST['title'])&& !empty($_POST['text']) OR !empty($_POST['img']) OR !empty($_POST['pdf'])){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $idImg = $_POST['img'];
        $idFiles = $_POST['pdf'];
        $category = $_POST['category'];

        $column = 'title, text, idImg, idFiles, category';
        $values = $title."','".$text."','".$idImg."','".$idFiles."','".$category;
        Request::insert('articles',$column,$values);
    }
}