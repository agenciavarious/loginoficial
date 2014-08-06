
<?php

include 'conexao/conecta.inc';
    
    if(isset($_POST['submit'])){
        
/* @var $_POST type */
        $nome_usuario =  $_POST['nome'];
        $email_usuario = $_POST['email'];
       
       
        if($nome_usuario && $email_usuario){
            
            $passwordlenth = 6;
            $charset  = "abcdefghijklmnopqrstuvxwyz1234567890";
            
            for($x = 1; $x <= $passwordlenth; $x++ ){
                
                $rand = rand() % strlen($charset);
                $temp = substr($charset, $rand, 1 );
                 $senha .= $temp;        
            }
            
            $senhaUsuario_md5 = md5($senha);
            $query_01 = mysql_query("SELECT * FROM usuario WHERE NOME_USUARIO ='$nome_usuario' AND EMAIL_USUARIO = '$email_usuario'") or die (mysql_error());
            $query_02 = mysql_fetch_assoc($query_01);
            $numLinhas = mysql_num_rows($query_01);
            
            
            
            if($numLinhas == 1){
                
                $query_03 = mysql_query("UPDATE usuario  SET SENHA_USUARIO='$senhaUsuario_md5' WHERE EMAIL_USUARIO='$email_usuario'");
               if($query_03)
               {
                   
                   echo"sua nova senha é <br>  $senha  ";
                  /* ini_set('smtp_port:', 465);
                   ini_set('SMTP', "smtp.gmail.com");
                   
                   $to = "$email_usuario";
                   $subject = "Sua Nova Senha";
                   $headers = "De: suportealvorti@gmail.com";
               echo '<script>alert("Senha atualizada"); </script>';*/
               
               
               }  else {
                   echo mysql_error(); 
               }
                
                
                
                
                
                
                
                
                
                
                
                
                
            }
 else {
                                die("Usuario nao encontrado");
                                
 }
            
            
        }
        
      else{ die("digite nome de cadastro e senha");
      
      }
    }      
        
        else{
    
     echo "<form action='forgotpassword.php' method ='post'>
    
             <label>E-mail: <input type=email name='email' ></label><br/>
             <label>Nome: <input type=text name='nome' ></label><br/>
           
<input type=submit value='submit' name='submit'>




</form>";
    
    
        }


   
   
       
   