<?php
namespace Controllers;
    use Traits\Request;
    use Traits\Cookie;


if(isset($_POST['email']))
{
    if(!empty($_POST['email'])):
        $table = 'email';
        $column ='mail, receive, date';
        $values = $_POST['email'];
        $receive = 1;
        
        $requete = Request::insert($table, $column, $values, $receive);

        $error = false;
        $msg = "Félicitation, vous vous êtes inscrit à notre newsletter.";
        Cookie::newsletter();
    else:
        $error = true;
        $msg = "Vous êtes déjà inscrit à notre newsletter.";
    endif;

}else{
    $error = true;
    $msg = "Une erreur est survenue, veuillez réessayer.";
}

$_SESSION['error'] = $error;
$_SESSION['msg'] = $msg;
?>