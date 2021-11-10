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
    public static function insert($table, $column, $values, $receive)
    {
        $pdo = Database::getInstance();
        $sql = $pdo->prepare("INSERT INTO ".$table." (".$column.") values ('".$values."','".$receive."',NOW())");   
        $sql -> execute();
        return $sql;

    }

    /**
     * Requete SQL findAll
     *
     * @return void
     */
    public static function findAll($table)
    {   
        $pdo = Database::getInstance();   
        $sql = $pdo->query("SELECT * FROM ".$table);
        return $sql->fetchAll();

    }
}