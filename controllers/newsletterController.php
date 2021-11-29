<?php
namespace Controllers;
    use Traits\Request;
    use Traits\Cookie;

    
if(!empty($_POST['email'])){
    $table = 'newsletter';
    $column ='email';
    $values = $_POST['email'];

    $mail = Request::find($column,"newsletter WHERE email = '".$_POST['email']."'");  
  
    if(empty($mail)){          
        $requete = Request::insert($table, $column, $values);

        $error = false;
        $msg = "Vous êtes bien inscrit à notre newsletter.";  
    }else{
        $error = false;
        $msg = "Vous êtes déjà inscrit à notre newsletter.";
    }

    
}else{
    $error = true;
    $msg = "Une erreur est survenue, veillez réessayer.";
}
Cookie::newsletter();


$_SESSION['error'] = $error;
$_SESSION['msg'] = $msg;
?>