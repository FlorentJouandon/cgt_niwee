<?php
namespace Controllers;
    use Traits\Router;


$menu = [
    ['name'=>'Accueil', 'url'=> 'Accueil', 'num'=> 0],
    ['name'=>'Publications', 'url'=> 'Nos_Publications', 'num'=> 1],
    ['name'=>'Nos Droits', 'url'=> 'Nos_Droits', 'num'=> 2],
    ['name'=>'Collectif', 'url'=> 'Notre_Collectif', 'num'=> 3],
    ['name'=>'Formations', 'url'=> 'Nos_Formations', 'num'=> 4],
    ['name'=>'Contact', 'url'=> 'Contactez_Nous', 'num'=> 5],
    ['name'=>'Se Syndiquer', 'url'=> 'Se_Syndiquer', 'num'=> 6]
];
define('MENU', $menu);

// HEADER
$route = Router::parseURL();

foreach(MENU as $i=>$tab):
    if($route === MENU[$i]['url'])
    {
        $num = MENU[$i]['num'];
        $_SESSION['num'] = $num;
    }elseif($route === 'syndicat_niwee'){
        $_SESSION['num'] = 0;
    }
endforeach;

