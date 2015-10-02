<?php

    require 'library/Slim/Slim.php';
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim(array('templates.path' => 'templates', 'debug' => true));
    $app->get('/', function () use ($app) {
        require_once 'connect.php';
        $db = connect_db();
        
        $result = $db->query( 'SELECT name FROM test;');
        while ( $row = $result->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        
        $app->render('test.php', array(
                                       'data' => $data)
                     );
        
    });
    
    $app->get('/:id', 'getData');
    $app->get('/', 'getAllData');
    $app->post('/', 'postData');
    $app->put('/:id', 'putData');
    $app->delete('/:id', 'deleteData');
    
    
    $app->run();
    
    function getAllData() {
        try {
            $sql = "select * from test";
            $preppedStatement = $db->prepare($sql);
            $preppedStatement->bindParam("id", $id);
            $preppedStatement->bindParam("name", $name);
            $preppedStatement->execute();            
        } catch(]PDOException $error) {
            echo 'Exception:' . $error->getMessage();
        }
        
        
    }
    function getData($id) {
        // return data $id
        
    }
    
    function postData() {
        // save new data
    }
    
    function putData($id) {
        //update data
    }
    function deleteData($id) {
        //delete data $id
    }
?>

