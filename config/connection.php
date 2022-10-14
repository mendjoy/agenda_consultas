<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root0";
    $pass = "";
    
    try{
        $conn =  new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        //APRESENTA O ERRO, caso ocorra erro de conexão 
        $error =  $e->getMessage();
        echo "Eroo: $error";
    }


?>