<?php

require 'connection.php';
require 'usuarioClass.php';

if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])):

   $lista = []; 
   $nomeUser = [];
   //$id_usuario = $_SESSION['id_usuario'];

   $sql= $conn->query("SELECT cli.*, u.nome_usuario, u.id_usuario FROM clientes as cli INNER JOIN usuarios as u WHERE u.id_usuario = cli.id_usuario;");

   if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
   }

   //if($lista['id_usuario'] == $_SESSION['id_usuario']){
    //$nomeUser = $lista['nome_usuario'];
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
                        <?php foreach($lista as $usuario): if($usuario['id_usuario'] == $_SESSION['id_usuario']){$nomeUser = $usuario['nome_usuario'];}?>
                           <tr>
                                <td scope="row" class="col-id"><?= $usuario['id_cliente'] ?></td>;
                                <td scope="row"><?= $usuario['nome_cliente'] ?></td>
                                <td scope="row"><?= $usuario['idade'] ?></td>
                                <td scope="row"><?= $usuario['cidade'] ?></td>
                                <td scope="row"><?= $nomeUser ?></td>
                                <td class="actions">
                                    <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
                                    <a href="a"><i class="far fa-edit edit-icon"></i></a>
                                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i> </button>
                                </td> 
                              </tr> 
                        <?php endforeach; ?>
            </table>
        </div>            
            
         
    
    <!--<?= $dado["nome_usuario"] ?>
    <?= $contact["phone"] ?>
    <?= $contact["observations"] ?>

    select trazendo nome do usuario SELECT cli.*, u.nome_usuario FROM clientes as cli INNER JOIN usuarios as u WHERE cli.id_usuario = u.id_usuario;


    <tbody>
    
                    
                
                </tbody>



    -->
    



</body>
</html>

<?php else: header("Location: index.php"); endif; ?>