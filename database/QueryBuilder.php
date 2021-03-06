<?php

class QueryBuilder
{
    private static $pdo ;


    public static function make(PDO $pdo){
        self::$pdo = $pdo ;
    } 

    public static function get(string $table)
    {
        $query = self::$pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


}