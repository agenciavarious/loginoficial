<?php

echo '<meta charset=utf-8>';
//dados de configuração

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pem';

//estabelecendo a conexão com o mysql

$connection = mysql_connect($servidor,$usuario,$senha);
if ($connection === FALSE){
    echo 'Não foi possível a conexão com o banco de dados' . $banco . '<br/>';
    echo mysql_error();
} else{
    $connection_Db = mysql_select_db($banco,$connection);
    if(!$connection_Db){
        echo 'Não foi possível selecionar o banco' . $banco . '<br/>';
        echo mysql_error();
    }
}
