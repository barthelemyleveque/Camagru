<?php

include "database.php";

function setup_db($db, $name_db)
{
    $sql = "CREATE DATABASE IF NOT EXISTS ".$name_db;
    $res = $db->exec($sql);

    $sql = "USE ".$name_db;
    $res = $db->exec($sql);

    $sql = "CREATE table IF NOT EXISTS `users` (
        `user_id` INT AUTO_INCREMENT NOT NULL,
        `token_comment` BOOLEAN default 1,
        `login` varchar(10) NOT NULL,
        `password` varchar(255) NOT NULL,
        `mail` varchar(255) NOT NULL,
        `verified` BOOLEAN,
        PRIMARY KEY (`user_id`)
        )";

    $res = $db->exec($sql);
    // DO THE SAME FOR IMAGES DB AND COMMENTS DB
    // Y A UN TRUC POUR LES MAILS --> uniques
}

$db = new PDO(  $DB_DSN,
                $DB_USER,
                $DB_PASSWORD
            );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
setup_db($db,$DB_NAME);
echo 'setup completed'.PHP_EOL;

?>