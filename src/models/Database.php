<?php
namespace Models;
    use PDO;
    use PDOException;
    
class Database extends PDO
{
    private static $instance;

    private function __construct()
    {
        $dsn = "mysql:host=".DB_host.";dbname=".DB_name."; charset=utf8mb4";
        try
        {
            parent::__construct($dsn, DB_user, DB_pwd);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $msg_connect = "connexion ";

        }catch(PDOException $pe)
        {
            die($pe->getMessage());
            $msg_connect = "échec ";
        }
    }
    
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
            return self::$instance;
        }
    }
    public static function instanceNull()
    {
        if(self::$instance !== null){
            self::$instance = null;
        }
    }
    
}