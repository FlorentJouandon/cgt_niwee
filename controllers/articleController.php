<?php
namespace Controllers;
    use Traits\Request;
    use Traits\Router;

$route = Router::parseURL();

if(($route === '')OR($route === 'cgt_niwee')OR($route === 'accueil'))
{
    $articles = Request::find('*','articles ORDER BY id DESC');
}else
{
    $articles = Request::find('*',"articles WHERE category = '".$route."' ORDER BY id DESC");
}

$_SESSION['articles'] = $articles;

if(!empty($_POST['article'])){

    Router::template('contact');
}