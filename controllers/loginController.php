<?php
namespace Controllers;
    use Traits\Cookie;


if(isset($_POST['connect']) && !empty($_POST['login']) && !empty($_POST['pwd']) && $_SESSION['login'] === false){
    if($_POST['login'] === LOGIN && $_POST['pwd'] === PWD ){
        
        $msg = "Bienvenue, vous venez de vous connecter.";
        $login = true;
    }else{
        $msg = "Identifiant ou mot de passe incorrect, veuillez réessayer." ;
        $login = false;
    }
}else{
    $msg = "Veuillez remplir les champs.";
    $login = false;
}

$_SESSION['login'] = $login;
$_SESSION['msg'] = $msg;