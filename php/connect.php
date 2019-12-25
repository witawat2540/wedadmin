<?php
    try{

        $db = new PDO('mysql:host=localhost; dbname=iot; ','iot','!Qazxsw2');
        $select = $db->query('SELECT*FROM door');
        $door = $select->fetchAll();
        
    } catch (Exception $e){
            echo "can not connect to database";
            throw new Exception($e);

    }


?>