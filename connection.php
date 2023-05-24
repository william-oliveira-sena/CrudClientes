<?php

    session_start();

    $host = "localhost";
    $dbname = "crud_clientes";
    $user = "root";
    $pass = "";

    global $conn;
      
    try{

        $conn = new PDO("mysql:dbname=".$dbname."; host=".$host, $user, $pass);

        //ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "erro: $error";  
    }


    ?>