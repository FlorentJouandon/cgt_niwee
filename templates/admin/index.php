<?php
namespace Views;
    use Traits\Router;


if(isset($_COOKIE['login']))
{
    Router::template($folder, 'dashboard');
}
else
{
    Router::template($folder, 'login');
}