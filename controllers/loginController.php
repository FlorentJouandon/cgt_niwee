<?php
namespace Controllers;
    use Traits\Cookie;

if(isset($_POST['connect']) && !empty($_POST['login']) && !empty($_POST['pwd'])){
    if($_POST['login'] === LOGIN && $_POST['pwd'] === PWD ){
        
        $msg = "Bienvenue, vous venez de vous connecter.";
        Cookie::login();
    }else{
        $msg = "Identifiant ou mot de passe incorrect, veuillez réessayer." ;

    }
}else{
    $msg = "Veuillez remplir les champs.";

}


$_SESSION['msg'] = $msg;