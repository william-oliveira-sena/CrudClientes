<?php

require 'connection.php';
require 'usuarioClass.php';

if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])):

   $lista = []; 
  
   $id_usuario = $_SESSION['id_usuario'];

   $sql= $conn->prepare("SELECT cli.*, u.nome_usuario, u.id_usuario FROM clientes AS cli INNER JOIN usuarios AS u WHERE u.id_usuario = :id_usuario AND cli.id_usuario = :id_usuario;");
   $sql->bindValue(':id_usuario',$id_usuario);
   $sql->execute();

   if($sql->rowCount() > 0){
    $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
    extract($lista);
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

        <div class="container">

        <h1 id="main-title">Clientes Cadastrados</h1>
        
            <table class="table" id="contacts-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Cliente</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Nome Usuário</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php foreach($lista as $usuario): ?>                                                  
                                                      
                            <tr>
                                <td scope="row" class="col-id"><?= $usuario['id_cliente'];?></td>
                                <td scope="row"><?= $usuario['nome_cliente']; ?></td>
                                <td scope="row"><?= $usuario['idade'];?></td>
                                <td scope="row"><?= $usuario['cidade'];?> </td>
                                <td scope="row"><?= $usuario ['nome_usuario'];?></td>
                                <td class="actions">
                                <a href="editar.php?id=<?=$usuario['id_cliente']; ?>"><img src="IMG/create-outline.svg" class="edit-btn"></img></a>
                                <a href="deletar.php?id=<?=$usuario['id_cliente']; ?>"><img src="IMG/close-circle-outline.svg" class="delete-btn"></img></a>   </td>              
                            
                            </tr>                                               
                        <?php endforeach; ?>                        
            </table>
        </div>     
</body>
</html>

<?php else: header("Location: index.php"); endif; ?>