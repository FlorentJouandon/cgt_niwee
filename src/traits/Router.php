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
        require_once 'controllers/'.$controller.'Controller.php'; 
    }

    /**
     * routeTemplate
     * selectionne un template admin.
     * 
     * @param  string $template
     * @return void
     */
    public static function adTemplate($template){
        require_once 'templates/admin/'.$template.'.php';
    }

    /**
     * routeTemplate
     * selectionne un template.
     * 
     * @param  string $template
     * @return void
     */
    public static function template($template){
            if($template !== 'index'){
                require_once 'templates/user/'.$template.'.php';
            }else{
                require_once 'templates/'.$template.'.php';
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
        require_once "config.php";
    }
}