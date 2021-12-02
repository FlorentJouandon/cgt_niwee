<?php 
namespace Views;
    use Traits\Router;

    
$route = Router::parseURL();
$menu = MENU;
$folder = MOB;

Router::template($folder,'header');

foreach ($menu as $tab):
    if(($route === '')OR($route === 'cgt_niwee')OR($route === $tab['url'])&&($route !== 'Contactez_Nous'))
    {
        Router::template($folder,'articles');
    }elseif($route === 'Contactez_Nous')
    {
        Router::template($folder,'contact');
    }
endforeach;

Router::template($folder,'footer');

