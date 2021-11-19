<?php
namespace Controllers;
    use Traits\Router;


$route = Router::parseURL();
Router::controller('menu');
$menu = MENU;

foreach ($menu as $tab):
    if(($route === '')OR($route === 'syndicat_niwee')OR($route === 'article')OR($route === $tab['url'])&&($route !== 'Contactez_Nous')){
        Router::controller('articles');
    }
endforeach;

if($route === 'Contactez_Nous'){
    Router::controller('contact');
}
$folder = 'home';
Router::index($folder);
