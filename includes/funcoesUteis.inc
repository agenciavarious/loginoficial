<?php

function validaAutenticacao($link,$tipo)
{
    
    echo '<meta charset=UTF-8>';
    session_start();
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])) 
      { 
        session_destroy();
     echo '<script>
         
                 alert("Você não afetou o Login!!")
                 location.href="'.$link.'"
             </script>';
        
    
 
    }else{
        
        if($tipo === '1') {include_once 'conexao/conecta.inc';}
        if($tipo === '2') {include_once '../conexao/conecta.inc';}
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
        $result = mysql_query($query);
        $totalUsuario = mysql_num_rows($result);

         if($totalUsuario !==0) 
          {
          $usuarios = mysql_fetch_assoc($result);
          $senhaUsuario = $usuarios['SENHA_USUARIO'];
          $tipos = $usuarios['COD_TIPO'];
          if ($senha !== $senhaUsuario) {
          session_destroy();
          
             echo '<script>
              alert("Acesso Negado! \n Senha do Usuario não confere.")
              location.href="'.$link.'"
              </script>';
          }      
      }else{
      session_destroy();
      echo '<script type="text/javascritp">
      alert("Acesso Negado!\n Email do usuario nao confere")
      location.href="'.$link.'"
      </script>';
            }
      if($tipo !== $tipos){
          session_destroy();
          echo '<script>
                alert("Acesso Negado !\n Você nao tem permissão de acesso")
                location.href="'.$link.'"           
          </script>';
                          }
         
             
             
    }


}  