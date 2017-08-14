<?php



require_once('../../raiz/arq/funcoes.php'); 

session_start();
		unset($_SESSION['vendas']);
		unset($_SESSION['itens']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=ven&bot=tes1"</script>';	

?>