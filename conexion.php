<?php

try{
    $connString= "mysql:host=localhost;dbname=biblioteca";
    $user="claudio";
    $pass="";
    
    $pdo= new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="select * from personal";
        $resultado= $pdo->query($sql);
} catch (Exception $ex) {

}

?>