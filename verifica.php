<?php

    require 'connection.php';
    require_once 'usuarioClass.php';

    if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])){
       
        $user = new Usuario();

        $listLogged = $user->logged($_SESSION['id_usuario']);
        $nome_user = $listLogged['nome_usuario'];

    }else{
        header("location: index.php");
    }
?>