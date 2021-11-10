<?php
namespace Controllers;
    use Traits\Request;


if(isset($_POST['contact'])):

    if(!empty($_POST['name']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['object']) AND !empty($_POST['message']))
    { 
        $to = MAIL;
        $from = $_POST['email'];
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $object = $_POST['object'];
        $message = $firstname.' '.$name.' vous a envoyé un mail.'.'\n'.$_POST['message'];

        //mail($to,$from,$object,$message);
        
        $error = false;
        $msg = "Votre message a bien été envoyé.</br> Nous vous répondrons dans les plus brefs délais.</br> Merci de votre intérêt.";             
    }
    else
    {
        $error = true;
        $msg = "Veuillez remplir tous les champs(*) sont obligatoires.";           
    }
else:
    $error = true;
    $msg = "Une erreur est survenue. Veuillez réessayer.";
endif;

$_SESSION['msg'] = $msg;
$_SESSION['error'] = $error;