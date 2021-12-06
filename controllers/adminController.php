<?php
namespace Controllers;
    use Traits\Router;


$folder = 'admin';

if(!isset($_SESSION['login']) OR $_SESSION['login']===false)
{
    Router::controller('login');
    Router::template($folder,'login');
}
else
{
    Router::controller('create');
    Router::template($folder,'dashboard');
}