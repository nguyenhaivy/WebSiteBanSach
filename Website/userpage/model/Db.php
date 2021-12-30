<?php
class Db{
    protected static $pdo;
    function __construct(){
        self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER_NAME, PW);
        self::$pdo->query('set names utf8');
    }

    protected function selectQuery($sql, $arr = []){
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function updateQuery($sql, $arr = []){
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}