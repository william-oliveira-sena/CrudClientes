<?php
    require 'connection.php';
    require 'usuarioClass.php';
    

    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');    
    $cidade = filter_input(INPUT_POST,'cidade');
    $idade = filter_input(INPUT_POST,'idade');
    $id_user = filter_input(INPUT_POST,'id_user');

    if($id && $nome && $idade && $cidade && $id_user){
        $user = new Usuario();
        $user->editar($id,$nome,$cidade,$idade,$id_user);
   

    header("Location: principal.php");
    exit;
     }else{
        header("Location: principal.php");
        exit;
    }

?>