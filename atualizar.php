<?php
include 'conexao/conecta.inc';
session_start();
$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$email = $_REQUEST['email'];
$data_nascimento = $_REQUEST['datanascimento'];
$cpf = $_REQUEST['cpf'];
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$uf = $_REQUEST['uf'];
$telefone = $_REQUEST['telefone'];
$celular = $_REQUEST['celular'];
$codigoUsuario = $_SESSION['codigo']; 

     $query="UPDATE usuario SET NOME_USUARIO='$nome',SENHA_USUARIO='$senha',EMAIL_USUARIO='$email',DATA_NASCIMENTO_USUARIO='$data_nascimento',CPF_USUARIO='$cpf',CEP_USUARIO='$cep',LOGRADOURO_USUARIO='$logradouro',BAIRRO_USUARIO='$bairro',CIDADE_USUARIO='$cidade',UF_USUARIO='$uf',TELEFONE_USUARIO='$telefone',CELULAR_USUARIO='$celular'
					       WHERE COD_USUARIO ='$codigoUsuario'";
	   mysql_query($query);	
          
           echo' <a href="frmLogin.php"> Voltar </a>';
           
 if(mysql_query($query))
{
    echo '<script> alert ("Usuario atualizado com sucesso !") </script>';

}else{
    
    echo'<script> alert("Não foi possivel atualizar o usuario !")';
    mysql_error();
    
}

