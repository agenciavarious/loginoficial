<?php

$email = $_POST['login'];

$servidor = 'localhost';
$usuario = 'root';
$senha = '12345678';
$banco = 'loginoficialdb';


$connection = mysql_connect($servidor,$usuario,$senha);
$connection_Db = mysql_select_db($banco,$connection);

$query = "SELECT EMAIL USUARIO FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$emailsCadastrados = array();

while($usuarios = mysql_fetch_assoc($result))
        
{
    
    $emailBanco = $usuarios['EMAIL_USUARIO'];
    $emailscadastrados [] = $emailBanco;
    
}

//A Função in_array, verifica se existe um determinado elemento dentro de uma matriz.
//A função recebe dois parâmetros: o "valor pesquisado" e a "matriz de elemento".
//Veja:

if(in_array($email, $emailsCadastrados))
{
    echo 'false';
    
} else {
    echo 'true';
}
exit();