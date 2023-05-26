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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
        <div class="cadastro">
            <h1>Novo Usuário</h1>
             <form action="novoCliente.php" method="POST"> 
                    <div class="mb-3">
                        <label>Nome</lavel>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Idade</lavel>
                        <input type="text" name="idade" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Cidade</lavel>
                        <input type="text" name="cidade" class="form-control">
                    </div>
                     <div class="mb-3">
                          <input type="submit" class="btn btn-dark" value="Cadastrar">
                     </div>

            </form>
        </div>
    
</body>
</html>

<?php else: header("Location: index.php"); endif; ?>