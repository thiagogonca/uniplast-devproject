<?php

	$_usuario = $_POST['txtusuario'];
	$_senha = $_POST['txtsenha'];

	// A include carrega a conexao.php
	include 'conexao.php';

	// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
	$query = "select * from login where usuario = '$_usuario' and senha = '$_senha'";
    $result = mysql_query($query);	
	$reg = mysql_fetch_array($result);

	if(mysql_num_rows($result) > 0 ) {
		header('location:consulta_uniplast.php');
	}
	else{
		header('location:index.php');
	}
?>