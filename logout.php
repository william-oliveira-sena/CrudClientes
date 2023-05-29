<?php

    session_start();
    //Destroi a sessão e direciona para pagina de login
    unset($_SESSION['id_usuario']);

    header("Location: index.php");
?>