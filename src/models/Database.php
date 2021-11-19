<?php
namespace Models;
    use PDO;
    use PDOException;
    
class Database extends PDO
{
    protected $instance = null;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host=".DB_host.";dbname=".DB_name."; charset=utf8mb4";
        try
        {
            parent::__construct($dsn, DB_user, DB_pwd);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $msg = "connexion ";

        }catch(PDOException $pe)
        {
            die($pe->getMessage());
            $msg = "échec ";
        }
    }

    public function getInstance()
    {
        if($this->instance === null){
            $this->instance = new self();
            return $this->instance;
        }
    }
    
}