<?php

require 'connection.php';
require 'usuarioClass.php';

$nome= $_POST['nome'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$id_usuario = $_SESSION['id_usuario'];

$user = new Usuario();
$user->cadastrar($nome,$cidade,$idade,$id_usuario);

header("Location: principal.php");

?>