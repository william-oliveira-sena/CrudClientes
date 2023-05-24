<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="IMG/iconlapis.png"/>
    <link rel="stylesheet" TYPE="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crud Clientes</title>
   
</head>
<body> 
    <div class="login"> 
        <div class="container">
    
           <div class="row">
        
                <div class="col-lg-4 offset-lg-4">
                
                <div class="card">
                         <div class="card-body">
                            <h3>Acesso ao Sistema</h3>
                        
                             <form method="POST" action="login.php">
                        <div>
                            <div class="mb-3">
                                <label>Login</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Digite seu login">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-dark" value="Acessar">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
          </div>
        </div>
    </div>
    
</body>
</html>