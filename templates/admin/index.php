<?php
namespace Views;
    use Traits\Router;

$route = Router::parseURL(); 
Router::controller('index');

if(!isset($_SESSION['login']) OR $_SESSION['login'] !== LOGIN)
{
    Router::adTemplate('connexion');
}else
{
    Router::adTemplate('menu');
    if(isset($_POST['gestion']))
    {
        Router::adTemplate('gestion');
    }
    elseif(isset($_POST['dashArticle']))
    {
        Router::adTemplate('article');

    }else{
        Router::adTemplate('home');
    }


}
