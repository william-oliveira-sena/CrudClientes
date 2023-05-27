<?php
    require 'connection.php';

    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');    
    $cidade = filter_input(INPUT_POST,'cidade');
    $idade = filter_input(INPUT_POST,'idade');
    $id_user = filter_input(INPUT_POST,'id_user');

    if($id && $nome && $idade && $cidade){
        $sql = $conn->prepare("UPDATE clientes SET nome_cliente = :nome, cidade = :cidade, idade = :idade WHERE id_cliente = :id");
        $sql->bindValue(':id_cliente',$id);
        $sql->bindValue(':nome_cliente',$nome);
        $sql->bindValue(':cidade',$cidade);
        $sql->bindValue(':idade',$idade);
        $sql->bindValue(':id_usuario',$id_user);
        $sql->execute();
   

    header("Location: principal.php");
    exit;
     }else{
        header("Location: principal.php");
        exit;
    }

?>