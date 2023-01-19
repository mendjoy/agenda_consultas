<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "62528623";
    
    try{
        $conn =  new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        //APRESENTA O ERRO, caso ocorra erro de conexão 
        $error =  $e->getMessage();
        echo "Erro: $error";
    }


?>