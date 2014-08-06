<?php

echo '<meta charset=utf-8>';
include_once 'includes/funcoesUteis.inc';

validaAutenticacao('frmLogin.php','1');

echo '<h3>Sistema de Login - Home Page (Restrito)</h3>';

echo '<a href=logout.php?pg=index.php>Logout</a></br>';

echo '<a href=atualizarUsuario.php>Atualizar dados</a>';