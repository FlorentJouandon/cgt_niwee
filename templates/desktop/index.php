<?php
namespace Views;
    use Traits\Router;


$menu = MENU;
$route = Router::parseURL();
$folder = DESK;

Router::template($folder,'header');

foreach ($menu as $tab):
    if(($route === 'cgt_niwee')OR($route === $tab['url'])&&($route !== 'Contactez_Nous'))
    {
        Router::template($folder,'articles');
        Router::template($folder,'banner');
    }elseif($route === 'Contactez_Nous')
    {
        Router::template($folder,'contact');
    }elseif(($route !== 'cgt_niwee')&&($route !== 'Accueil')&&($route !== 'Nos_Publications')&&($route !== 'Nos_Droits')&&($route !== 'Notre_Collectif')&&($route !== 'Nos_Formations')&&($route !== 'Contactez_Nous')&&($route !== 'Se_Syndiquer')&&($route !== 'Admin')){
        Router::template($folder, '404');
    }
endforeach;

Router::template($folder,'footer');

;?>