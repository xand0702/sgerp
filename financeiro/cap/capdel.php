<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];



$sql = '

DELETE FROM `contap` WHERE `CAP_ID`='.$del.';

';





$conn->exec($sql);




		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=fin&bot=tes2"</script>';	

?>