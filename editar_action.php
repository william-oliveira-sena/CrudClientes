<?php
    require 'connection.php';
    require 'usuarioClass.php';
    

    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');    
    $cidade = filter_input(INPUT_POST,'cidade');
    $idade = filter_input(INPUT_POST,'idade');
    $id_user = filter_input(INPUT_POST,'id_user');

    if($id && $nome && $idade && $cidade && $id_user){
        $sql = $conn->prepare("UPDATE clientes SET id_cliente = :id, nome_cliente = :nome, cidade = :cidade, idade = :idade, id_usuario = :id_user WHERE id_cliente = :id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':cidade',$cidade);
        $sql->bindValue(':idade',$idade);
        $sql->bindValue(':id_user',$id_user);
        $sql->execute();
   

    header("Location: principal.php");
    exit;
     }else{
        header("Location: principal.php");
        exit;
    }

?>