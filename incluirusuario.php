<?php

include_once 'conexao/conecta.inc';
include_once 'classes/Bcrypt.class.php';
echo'<meta charset=UTF-8>';
/* @var $_REQUEST type */
$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$email = $_REQUEST['login'];
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$uf = $_REQUEST['uf'];
$data_nascimento = $_REQUEST['datanascimento'];
$cpf = $_REQUEST['cpf'];
$telefone = $_REQUEST['telefone'];
$celular = $_REQUEST['celular'];
$tipoUsuario = 1;
$senha = Bcrypt::hash($senha);

$query = "INSERT INTO usuario(EMAIL_USUARIO,SENHA_USUARIO,NOME_USUARIO,DATA_NASCIMENTO_USUARIO,CPF_USUARIO,TELEFONE_USUARIO,CELULAR_USUARIO,CEP_USUARIO,LOGRADOURO_USUARIO,BAIRRO_USUARIO,CIDADE_USUARIO,UF_USUARIO,COD_TIPO)";
$query.= " VALUES('$email','$senha','$nome','$data_nascimento','$cpf','$telefone','$celular','$cep','$logradouro','$bairro','$cidade','$uf','$tipoUsuario')";

echo' <a href="frmLogin.php"> Efetuar Login </a>';

if(mysql_query($query))
{
    echo '<script> alert ("Usuario Cadastrado com sucesso !") </script>';

}else{
    
    echo'<script> alert("Não foi possivel concluir o cadastro !")';
    mysql_error();
    
}