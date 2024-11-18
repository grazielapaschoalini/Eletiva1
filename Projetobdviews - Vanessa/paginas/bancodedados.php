<?php
    $host = "localhost";
    $db = "banco_php";
    $usuario = "root";
    $senha = "811869";
    $port = "3306"; 

    try{
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;", $usuario, $senha); // string de conexão ""
        if ($pdo){
            echo "Conexão bem sucedida!";
        } else{
            echo "Erro ao conectar com o banco de dados!";
        }
    } catch (Exception $e){
        echo "Erro: ".$e->getMessage();
    }  
?>
