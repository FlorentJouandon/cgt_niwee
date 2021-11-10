<?php
namespace Controllers;
    use Traits\Request;


if(isset($_POST['article'])):
    if(!empty($_POST['title']) AND !empty($_POST['text']) OR !empty($_POST['pdf']) OR !empty($_POST['img']))
    { 
        $table = 'articles';
        $column = 'title, text, img, pdf, idCategory, date';
        $values = $_POST['title']."','".$_POST['text']."','".$_POST['img']."','".$_POST['pdf'];
        $receive = $_POST['category']; 

        $requete = Request::insert($table, $column, $values, $receive);

        $error = false;
        $msg = "Félicitation, vous avez créé un nouvel article."; 
    }
    else
    {
        $error = true;
        $msg = "Vous devez obligatoirement donner un titre à votre article, soumettre un texte et/ou télécharger une image et/ou un pdf.";        
    } 
else:
    $error = true;
    $msg = "Une erreur est survenue. Veuillez réessayer.";
endif;

$_SESSION['error'] = $error;
$_SESSION['msg'] = $msg;
?>