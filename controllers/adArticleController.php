<?php
namespace Controllers;
    use Traits\Request;


if(isset($_POST['article'])):
    if(!empty($_POST['title']) AND !empty($_POST['text']) OR !empty($_POST['img']) OR !empty($_POST['files']))
    { 
        $table = 'articles';
        $column = 'title, text, idImg, idFiles, category';
        $values = $_POST['title']."','".$_POST['text']."','".$_POST['img']."','".$_POST['files']."','".$_POST['category'];

        $requete = Request::insert($table, $column, $values);

        $admin = false;
        $error = false;
        $msg = "Félicitation, vous avez créé un nouvel article."; 
    }
    else
    {
        $admin = true;
        $error = true;
        $msg = "Vous devez obligatoirement donner un titre à votre article, soumettre un texte et/ou télécharger une image et/ou un pdf.";        
    } 
else:
    $error = true;
    $msg = "Une erreur est survenue. Veuillez réessayer.";
endif;

$_SESSION['error'] = $error;
$_SESSION['msg'] = $msg;
$_SESSION['admin'] = $admin;

?>