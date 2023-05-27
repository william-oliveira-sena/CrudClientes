<?php

require 'connection.php';
require 'usuarioClass.php';

$id = filter_input(INPUT_GET, 'id');

    if($id){
        $sql= $conn->prepare("DELETE FROM clientes WHERE id_cliente = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    header("Location: principal.php");

?>