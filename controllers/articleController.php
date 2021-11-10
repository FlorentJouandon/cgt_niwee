<?php
namespace Controllers;
    use Traits\Request;
    use Traits\Router;

$route = Router::parseURL();
$article = Request::find('category','articles ORDER BY id DESC');
$articles = Request::find('*','articles ORDER BY id DESC');

// var_dump($articles);
$_SESSION['articles'] = $articles;
