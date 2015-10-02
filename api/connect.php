<?php

    function connect_db() {
        $server = 'localhost';
        $user = 'root';
        $pass = 'Furnitska';
        $database = 'bossapp';
        $connection = new mysqli($server, $user, $pass, $database);
        
        return $connection;
    }

?>