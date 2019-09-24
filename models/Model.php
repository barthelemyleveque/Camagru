<?php

include "$_SERVER[DOCUMENT_ROOT]/config/database.php";

abstract class Model{
    private static $_bdd;

    // INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd(){
        self::$_bdd = new PDO(  $DB_DSN,
                                $DB_USER,
                                $DB_PASSWORD);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // INITIALISATION DE LA DB ET DE SES TABLES
        $sql = "CREATE DATABASE IF NOT EXISTS `camagru`;
        USE `camagru`";
        self::$_bdd->exec($sql);

        $sql = "CREATE table IF NOT EXISTS `users` (
            `user_id` INT AUTO_INCREMENT NOT NULL,
            `token_comment` BOOLEAN default 1,
            `login` varchar(10) NOT NULL,
            `password` varchar(255) NOT NULL,
            `mail` varchar(255) NOT NULL,
            `verified` BOOLEAN,
            PRIMARY KEY (`user_id`)
            )";
        self::$_bdd->exec($sql);
        
        $sql = "CREATE table IF NOT EXISTS `images` (
            `image_id` INT AUTO_INCREMENT NOT NULL,
            `user_id` INT NOT NULL,
            `date` varchar(255) NOT NULL,
            `title` varchar(255) NOT NULL,
            `url` varchar(255) NOT NULL,
            PRIMARY KEY (`image_id`)
            )";
        self::$_bdd->exec($sql);

        $sql = "CREATE table IF NOT EXISTS `comment` (
            `comment_id` INT AUTO_INCREMENT NOT NULL,
            `image_id` INT NOT NULL,
            `user_id` INT NOT NULL,
            `date` varchar(255) NOT NULL,
            `comment` varchar(2048) NOT NULL,
            PRIMARY KEY (`comment_id`)
            )";
        self::$_bdd->exec($sql);
    }
    
    // RECUPERE LA CONNEXION A LA BDD
    protected function getBdd(){
        if (self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    protected function getAll($table, $obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}