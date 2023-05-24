<?php

    require 'connection.php';

    if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])){

        require_once 'usuarioClass.php';
        $user = new Usuario();

        $listLogged = $user->logged($_SESSION['id_usuario']);
        $nome_user = $listLogged['nome_usuario'];

    }else{
        header("location: index.php");
    }
?>