<?php
namespace Views;
    use Traits\Router;


// $route = Router::parseURL(); 
// $folder = DESK;

// Router::template($folder,'header');

// if(($route === '')OR($route === 'cgt_niwee')OR($route === 'accueil')OR($route === 'publications')OR($route === 'droits')OR($route === 'collectif')OR($route === 'formations'))
// {
//     Router::template($folder,'articles');
// }else{
//     Router::template($folder,$route);
// }

// if($route !== 'contact')
// {
//     Router::template($folder,'banner');
// }
// Router::template($folder,'footer');

$menu = MENU;
$route = Router::parseURL();
$folder = DESK;

Router::template($folder,'header');

foreach ($menu as $tab):
    if(($route === '')OR($route === 'syndicat_niwee')OR($route === $tab['url'])&&($route !== 'Contactez_Nous'))
    {
        Router::template($folder,'articles');
        Router::template($folder,'banner');
    }elseif($route === 'Contactez_Nous')
    {
        Router::template($folder,'contact');
    }
endforeach;

Router::template($folder,'footer');


;?>