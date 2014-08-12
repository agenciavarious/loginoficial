<?php

echo '<meta charset=UTF-8>';

// O include_once, inclui qualquer arquivo quando for necessário, ou seja, só inclui um arquivo se o mesmo
// não tiver sido incluido anteriormente 

include_once 'conexao/conecta.inc';
include_once 'classes/Bcrypt.class.php';
$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
$hash = $usuarios['SENHA_USUARIO'];

//echo $totalUsuario;

if ($totalUsuario === 0)
{
   
    echo '<a href=frmLogin.php> Usuário não encontrado  !! </a>';
    
} else {
$usuarios = mysql_fetch_array($result);
//$senhaUsuario = $usuarios['SENHA_USUARIO'];
$senhaUsuario = $usuarios[2];
$tipoUsuario = $usuarios[13];
//$tipoUsuario = $usuarios['COD_TIPO'];

if(!Bcrypt::check($senha, $senhaUsuario))
    echo '<a href=frmLogin.php>Senha não confere  ! </a>';
    
} else {
    
    //Agora temos o usuario e senha corretos
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipoUsuario'] = $tipoUsuario;
    if ($tipoUsuario !== 0) {
        echo '<script type="text/javascript"> 
        location.href="indexrestrito.php"
        </script>';
     
    } elseif ($tipoUsuario === 2) {
    
    echo '<script type="text/javascript"> 
        location.href="admin/indexadmin.php"
        </script>';
     
    } else {
        
        echo 'Tipo de Usuário inválido !';
        
           }
    }
}   
