<?php
namespace Traits;

trait Router
{
    public static $controller;
    public static $template;

    /**
     * routeController
     * selectionne un controller.
     * 
     * @param  string $route
     * @return void
     */
    public static function controller($controller){
        require_once '../controllers/'.$controller.'Controller.php'; 
    }

    /**
     * route Index
     * selectionne un index.
     * 
     * @param  string $index
     * @return void
     */
    public static function index($folder){
        if($folder !== 'home'){
            require_once '../templates/'.$folder.'/index.php';
        }else{
            require_once '../templates/home.php';
        }
    }
    
    /**
     * routeTemplate
     * selectionne une template.
     * 
     * @param  string $template
     * @return void
     */
    public static function template($folder,$template){
        if($template !== '404'){
            require_once '../templates/'.$folder.'/'.$template.'.php';
        }else{
            require_once '../templates/404.php';
        }
    }
    
    /**
     * parseURL
     * recupére le dernier élément de l'url.
     * 
     * @return void
     */
    public static function parseURL(){ 
        $uri = $_SERVER['REQUEST_URI'];     
        return basename(parse_url($uri, PHP_URL_PATH));
    }
    
    /**
     * config
     * appel le fichier config.php.
     * 
     * @return void
     */
    public static function config(){
        require_once "../config.php";
    }
}