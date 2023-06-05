<?php

class Usuario{

    public function login($usuario, $senha){
        global $conn;

        $query = "SELECT * FROM usuarios WHERE usuario = :usuario  AND
        senha = :senha";

        $query= $conn->prepare($query);
        $query->bindValue("usuario", $usuario);
        $query->bindValue("senha", $senha);
        $query->execute();

            if($query->rowCount() > 0){
                $dado = $query->fetch();

                $_SESSION['id_usuario'] = $dado['id_usuario']; 
                $_SESSION['nome_usuario']= $dado['nome_usuario'];
                $_SESSION['login_usuario']= $dado['usuario'];
                $_SESSION['senha']= $dado['senha'];

                return true;
            }else{
                return false;
            }                        
    }

    public function logged($id){

        global $conn;

        $array = array();

        $query = "SELECT nome_usuario FROM usuarios WHERE id_usuario = :id_usuario";
        $query = $conn->prepare($query);
        $query->bindValue("id_usuario", $id);
        $query-> execute();

        if($query->rowCount() > 0){
            $array = $query->fetch();
        }

        return $array;
    }

    public function deletar($id){
        global $conn;

        $sql= $conn->prepare("DELETE FROM clientes WHERE id_cliente = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function editar($id,$nome, $cidade,$idade,$id_user){
        global $conn;

        $sql = $conn->prepare("UPDATE clientes SET id_cliente = :id, nome_cliente = :nome, cidade = :cidade, idade = :idade, id_usuario = :id_user WHERE id_cliente = :id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':cidade',$cidade);
        $sql->bindValue(':idade',$idade);
        $sql->bindValue(':id_user',$id_user);
        $sql->execute();


    }
    public function cadastrar($nome,$cidade,$idade,$id_usuario){
        global $conn;

        $sql= $conn->prepare("INSERT INTO clientes (nome_cliente, cidade, idade, id_usuario) VALUES (:nome, :cidade, :idade,:id_usuario)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':id_usuario',$id_usuario);

        $sql->execute();
    }
    public function pesquisar($id_usuario){

        global $conn;

        $lista = []; 

        $sql= $conn->prepare("SELECT cli.*, u.nome_usuario, u.id_usuario FROM clientes AS cli INNER JOIN usuarios AS u WHERE u.id_usuario = :id_usuario AND cli.id_usuario = :id_usuario;");
        $sql->bindValue(':id_usuario',$id_usuario);
        $sql->execute();
     
        if($sql->rowCount() > 0){
         $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
         extract($lista);
        }

        return $lista;
    }
   
}

?>