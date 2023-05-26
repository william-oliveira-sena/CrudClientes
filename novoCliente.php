<?php

require 'connection.php';


$nome= $_POST['nome'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$id_usuario = $_SESSION['id_usuario'];

$sql= $conn->prepare("INSERT INTO clientes (nome_cliente, cidade, idade, id_usuario) VALUES (:nome, :cidade, :idade,:id_usuario)");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':cidade', $cidade);
$sql->bindValue(':idade', $idade);
$sql->bindValue(':id_usuario',$id_usuario);

$sql->execute();

header("Location: principal.php");

?>