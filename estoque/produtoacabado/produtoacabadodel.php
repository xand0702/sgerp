<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];


$sqldel = "

SELECT *
FROM itenspa i, entradapa e
WHERE i.IPA_ENTRADAPA = e.EPA_ID
AND e.EPA_ID = ".$del."

";


foreach ($conn->query($sqldel) as $row) 
{
	$sqld = "DELETE FROM `itenspa` WHERE `IPA_ENTRADAPA` = ".$del;
	$conn->exec($sqld);
}



$sql = '

DELETE FROM `entradapa` WHERE `EPA_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=est&bot=tes2"</script>';	

?>