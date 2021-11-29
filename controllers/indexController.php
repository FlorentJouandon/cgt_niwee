<?php
namespace Controllers;
    use Traits\Router;


$route = Router::parseURL();
Router::controller('menu');
$menu = MENU;

foreach ($menu as $tab):
    if(($route === $tab['url'])&&($route !== 'Contactez_Nous')){
        Router::controller('articles');
        Router::controller('newsletter');
    }
endforeach;

if($route === 'Contactez_Nous'){
    Router::controller('contact');
}
if($route === 'Admin'){
    Router::controller('login');
    Router::controller('create');
}
$folder = 'home';
Router::index($folder);




