<?php
    require 'connection.php';
    require 'usuarioClass.php';

    $id = filter_input(INPUT_GET,'id');
    $usuario = [];

    if($id){
        $sql = $conn->prepare("SELECT * FROM clientes WHERE id_cliente = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

            if($sql->rowCount() > 0){
                $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            }else{
                header("Location: principal.php");
                exit;
            }

        }else{
            header("Location: principal.php");
         }

?>

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
                        <li><a href="cadastrarClientes.php" class="nav-link">Cadastrar Clientes </a></li>
                        <li><a href="logout.php" class="nav-link">Sair </a></li>
                    
                    </ul>
                </nav>
            </header>
        <div class="editar">
                    <h1>Editar Usuário</h1>
                    <form action="editar_action.php" method="POST"> 
                            <div class="mb-3">
                            <input type="hidden" name="id" value="<?= $usuario['id_cliente'];?>">
                                <label>Nome</lavel>
                                <input type="text" name="nome" class="form-control" value="<?= $usuario['nome_cliente'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Idade</lavel>
                                <input type="text" name="idade" class="form-control" value="<?= $usuario['idade'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Cidade</lavel>
                                <input type="text" name="cidade" class="form-control" value="<?= $usuario['cidade'];?>">
                            </div>
                            <input type="hidden" name="id_user" value="<?= $usuario['id_usuario'];?>">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-dark" value="Atualizar">
                            </div>

                    </form>
        </div>

    </body>
</html>

