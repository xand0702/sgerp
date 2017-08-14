<?php   
require_once('raiz/arq/funcoes.php');
	session_unset(@$_SESSION['nome']);
	session_unset(@$_SESSION['id']);
	
	@session_destroy();
	pagina('login.php');
	exit;
?>