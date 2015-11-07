<?php

    require 'library/Slim/Slim.php';
    
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();
    
    $app->get('/test', 'getCharacters');
    $app->get('/test/:id', 'getCharacter');
        
    $app->run();
    
    function connect_db() {
        $server = 'localhost';
        $user = 'root';
        $pass = 'Furnitska';
        $database = 'bossapp';
        $connection = new PDO("mysql:host=$server; dbname=$database", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }

    //Get characaters    
    function getCharacters() {
        $id = 1;
        $sql = "SELECT id, name, class, race FROM test";
        try {
                $db = connect_db();
        
                $statement = $db->prepare($sql);
                $statement->execute(array('id' =>$id));
                $list = $statement->fetch(PDO::FETCH_ASSOC);
                $db = null;
                echo json_encode($list);
        }catch(PDOException $error) {
            echo'{"error":{"text":'. $error->getMessage() .'}}';
                
            }
        }
        
    
    
    
    
?>

