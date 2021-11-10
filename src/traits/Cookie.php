<?php
namespace Traits;

trait Cookie
{
    static function newsletter(){
        if(!isset($_COOKIE['newsletter']))
        {
            setcookie('newsletter','true',0, '/', 'localhost', 'SameSite=None', 'Secure');
            header("Refresh:0");
        }
    }

    static function all(){
        if(isset($_COOKIE['newsletter'])){
            $_COOKIE['newsletter'];
        }
    }
}