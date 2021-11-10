<?php
namespace Controllers;
    use Traits\Router;
    use Traits\Request;
    

$route = Router::parseURL(); 

if($route === 'admin'){
    // ADMIN
    if(isset($_POST['article']))
    {
        Router::controller('adArticle');
    }
    Router::adTemplate('index');
}else{
    // VISITEUR
    if(($route === '')OR($route === 'cgt_niwee')OR($route === 'accueil')OR($route === 'publications')OR($route === 'droits')OR($route === 'collectif')OR($route === 'formations')){
        Router::controller('article');
    }
    if(isset($_POST['contact']))
    {
        Router::controller('contact');
        if(isset($_POST['checkletter'])){
            Router::controller('newsletter');
        }
    }
    if(isset($_POST['newsletter']))
    {
        Router::controller('newsletter');
    }
    Router::template('index');
}
