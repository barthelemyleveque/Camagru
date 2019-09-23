<?php

include "../config/database.php";

abstract class Model{
    private static $_bdd;

    // INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd(){
        self::$_bdd = new PDO(  $DB_DSN,
                                $DB_USER,
                                $DB_PASSWORD);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    // RECUPERE LA CONNEXION A LA BDD
    protected function getBdd(){
        if (self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    protected function getAll($table, $obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM'.table.' ORDER BY id desc');
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}