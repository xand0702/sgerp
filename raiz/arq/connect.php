<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "tcc";

	$link = mysqli_connect($servidor, $usuario, $senha, $banco);
	if( !$link ) {
		echo "Falha na conexão com o servidor MySQL: ".mysql_error();
		exit;
	}

	// $conexao = mysql_select_db($banco, $lik);
	// if( !$conexao ) {
		// echo "Falha na seleção do banco de dados: ".mysql_error();
		// exit;
	// }
?>