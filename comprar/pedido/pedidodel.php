<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];


$sqldel = "

SELECT *
FROM pedidoitens ip, pedido p
WHERE ip.PDI_PED_ID = p.PED_ID
AND p.PED_ID = ".$del."

";


foreach ($conn->query($sqldel) as $row) 
{
	$sqld = "DELETE FROM `pedidoitens` WHERE `PDI_PED_ID` = ".$del;
	$conn->exec($sqld);
}



$sql = '

DELETE FROM `pedido` WHERE `PED_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=com&bot=tes1"</script>';	

?>