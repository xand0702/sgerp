<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];







$sql = '

DELETE FROM `fornecedor` WHERE `FOR_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=gdp&bot=tes5"</script>';	

?>