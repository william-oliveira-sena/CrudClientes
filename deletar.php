<?php

require 'connection.php';
require 'usuarioClass.php';

$id = filter_input(INPUT_GET, 'id');

    if($id){
       $user = new Usuario();
       $user->deletar($id);
    }

    header("Location: principal.php");

?>