<?php

       
        if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha']))
          { 

            require "connection.php";
            require "usuarioClass.php";
              //cria o objeto
            $user = new Usuario();

             $usuario = $_POST['usuario'];
             $senha = md5($_POST['senha']);
              //adiciona os valores ao novo objeto
             $user->login($usuario,$senha);            
            
            
             if($user->login($usuario,$senha) == true){
                if(isset($_SESSION['id_usuario'])){
                //coloca o usuario dentro do sistema
                 header("Location:principal.php");
             }else{
               header("location: index.php");
          }

         }else{

            header("location: index.php");
          }
        }    
              
     
 
?>