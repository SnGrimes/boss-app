<?php
        
    require 'vendor/autoload.php';    
    
    $app = new \Slim\Slim(array(
            'debug' => true                       
        ));

    
    $server = 'localhost';
    $user = 'root';
    $pass = 'Furnitska';
    $database = 'bossapp';
    $db = new PDO("mysql:host=$server; dbname=$database", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $app->get('/', function() use ($app) {
        $app->response->setStatus(200);
        echo "Welcome to the api";
    
    });
    
    $app->get('/getChar', function() use ($app) {
      $server = 'localhost';
    $user = 'root';
    $pass = 'Furnitska';
    $database = 'bossapp';
    $db = new PDO("mysql:host=$server; dbname=$database", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $statement = $db->prepare('SELECT * FROM test');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //PDO::Fetch_Assoc will only pull associative key and not the numeric key           
        
        $app->response()->headers->set('Content-Type', 'application/json'); //will output the sql data as JSON
        echo json_encode($result, JSON_PRETTY_PRINT);
        /*
        if(count($result)) {
            foreach($result as $row) {
                header('Content-Type: application/json'); //will output the sql data as JSON
                echo json_encode($row, JSON_PRETTY_PRINT);
                $app->response->setStatus(200);
                //print_r($row);
                
                         
                       }
                    } else {
                        print_r("No rows returned");
        } */
    });
 $app->run();

             

?>