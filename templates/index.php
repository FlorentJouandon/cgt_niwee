<?php
namespace Views;
    use Traits\Router;


$route = Router::parseURL(); 

if($route !== "admin"):

    Router::template('header');

    if(($route === '')OR($route === 'cgt_niwee')OR($route === 'accueil')OR($route === 'publications')OR($route === 'droits')OR($route === 'collectif')OR($route === 'formations'))
    {
        Router::template('articles');
    }else{
        Router::template($route);
    }

    if($route !== 'contact')
    {
        Router::template('banner');
    }
    Router::template('footer');

else:
    Router::adTemplate('index');
endif;

?>