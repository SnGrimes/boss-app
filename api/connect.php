<?php

    function connect_db() {
        $server = 'localhost';
        $user = 'root';
        $pass = 'Furnitska';
        $database = 'bossapp';
        $connection = new PDO("mysql:host=$server; dbname=$database", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }

?>