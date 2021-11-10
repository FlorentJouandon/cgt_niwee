<?php
namespace Controllers;
    use Traits\Request;
    use Traits\Cookie;

    
    if(isset($_POST['email']))
    {
        $table = 'newsletter';
        $column ='email';
        $values = $_POST['email'];

        // $email = Request::find($column,"newsletter WHERE email = '".$_POST['email']."'");   

        if(!empty($_POST['email'])):
            
            $requete = Request::insert($table, $column, $values);

            $error = false;
            $msg = "Votre message a bien été envoyé et vous êtes bien inscrit à notre newsletter.</br> Nous vous répondrons dans les plus brefs délais.</br> Merci de votre intérêt.";

            // Cookie::newsletter();
        else:
            $error = true;
            $msg = "Votre message a bien été envoyé, vous êtes déjà inscrit à notre newsletter.</br> Nous vous répondrons dans les plus brefs délais.</br> Merci de votre intérêt.";
        endif;

}else{
    $error = true;
    $msg = "Une erreur est survenue, veuillez réessayer.";
}

$_SESSION['error'] = $error;
$_SESSION['msg'] = $msg;
?>