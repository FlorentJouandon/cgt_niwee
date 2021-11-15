<?php
namespace Controllers;
    use Traits\Router;


if($_POST['login'] !== LOGIN && $_POST['pwd'] !== PWD){
    $msg = 'Identifiant ou mot de passe incorrecte.';
}else{
    $_SESSION['login'] = LOGIN;
    $msg = 'Bienvenue.';
}
$_SESSION['msg'] = $msg ;

