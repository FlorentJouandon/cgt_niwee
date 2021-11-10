<?php
namespace Traits;
    use Models\Database;

trait Request
{ 
    /**
     * Requete SQL insert
     *
     * @param  string $table
     * @param  string $column
     * @param  mixed $values
     * @param  mixed $receive
     * @return void
     */
    public static function insert($table, $column, $values)
    {
        $pdo = new Database();
        $pdo->getInstance();
        $sql = $pdo->prepare("INSERT INTO ".$table." (".$column.", date) values ('".$values."', NOW())");   
        return $sql -> execute();
        $pdo = null;
    }

    /**
     * Requete SQL findAll
     *
     * @return void
     */
    public static function find($column, $table)
    {   
        $pdo = new Database();
        $pdo->getInstance();
        $sql = $pdo->query("SELECT ".$column." FROM ".$table."");     
        return $sql->fetchAll();
        $pdo = null;
    }
}