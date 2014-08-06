<!DOCTYPE html>
<html>
    <head>
        <title> Formulário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
        <?php
              include 'conexao/conecta.inc';
              include_once 'includes/funcoesUteis.inc';
              validaAutenticacao('indexrestrito.php','1');
              //$codigo_usuario = $_REQUEST['codigo'];
              $codigoUsuario = $_SESSION['codigo']; 
              
              
               //echo '<h1>'.$codigoUsuario.'</h1>';
               $sql = "SELECT * FROM usuario WHERE COD_USUARIO ='$codigoUsuario'";
               //echo $sql; 
               $result = mysql_query($sql);
               $usuarios = mysql_fetch_array($result);
              
        ?>
        
        <form action="atualizar.php" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $usuarios['NOME_USUARIO'] ?>"> <br/>
           Senha: <input type="password" name="senha" required value="<?php echo $usuarios['SENHA_USUARIO']?>"> <br/>
           Email: <input type="email" name="email" required value="<?php echo $usuarios['EMAIL_USUARIO']?>"> <br/>
           Data de nascimento: <input type="date" name="datanascimento" required value="<?php echo $usuarios['DATA_NASCIMENTO_USUARIO']?>"> <br/>
           CPF: <input type="text" name="cpf" required value="<?php echo $usuarios['CPF_USUARIO']?>"> <br/>
           CEP: <input type="text" name="cep" required  value="<?php echo $usuarios['cep_USUARIO'] ?>"> <br/>
           Logradouro: <input type="text" name="logradouro" required  value="<?php echo $usuarios['LOGRADOURO_USUARIO'] ?>"> <br/>
           Bairro: <input type="text" name="bairro" required  value="<?php echo $usuarios['BAIRRO_USUARIO'] ?>"> <br/>
           Cidade: <input type="text" name="cidade" required  value="<?php echo $usuarios['CIDADE_USUARIO'] ?>"> <br/>
           UF: <input type="text" name="uf" required  value="<?php echo $usuarios['UF_USUARIO'] ?>"> <br/>
           Telefone: <input type="tel" name="telefone" required  value="<?php echo $usuarios['TELEFONE_USUARIO'] ?>"> <br/>
           Celular: <input type="tel" name="celular" required  value="<?php echo $usuarios['CELULAR_USUARIO'] ?>"> <br/>
  
              
           
           <input type="submit" value="Atualizar" > 
           <input type="reset" value="Cancelar" >
           </form>
        
        
    </body>
</html>