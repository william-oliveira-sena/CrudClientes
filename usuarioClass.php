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



}

?>