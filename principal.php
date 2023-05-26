<?php

require 'connection.php';

if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])):?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Clientes</title>
    <link rel="icon" type="image/png" href="IMG/iconlapis.png"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header class="topo-sistema">
        <nav>
            <ul id="navbar">
                <li><a href="principal.php" class="nav-link">Home </a></li>
                <li><a href="clientesClientes.php" class="nav-link">Cadastrar Clientes </a></li>
                <li><a href="logout.php" class="nav-link">Sair </a></li>
              
            </ul>
        </nav>
    </header>
    


    
</body>
</html>

<?php else: header("Location: index.php"); endif; ?>