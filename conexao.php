<?php

    $host = "localhostt";
    $user = "root";
    $pass = "";
    $dbname = "padaria";

    try{

        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
       // echo "Conexão com Banco de dados realizado com sucesso!";
       
    } catch(PDOException $err){
        die("Erro: Conexão com Banco de Dados não foi realizada com sucesso. Erro Gerado " . $err->getMessage());
    }
?>