<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "padaria";
    $port = 3306;

    try{

        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
       // echo "Conexão com Banco de dados realizado com sucesso!";
       
    } catch(PDOException $err){
        die("Erro: Conexão com Banco de Dados não foi realizada com sucesso. Erro Gerado " . $err->getMessage());
    }
?>