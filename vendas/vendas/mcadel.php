<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];


$sqldel = "

SELECT *
FROM itensmc i, entradamc e
WHERE i.IMC_ENTRADAPA = e.MCA_ID
AND e.MCA_ID = ".$del."

";


foreach ($conn->query($sqldel) as $row) 
{
	$sqld = "DELETE FROM `itensmc` WHERE `IMC_ENTRADAPA` = ".$del;
	$conn->exec($sqld);
}



$sql = '

DELETE FROM `entradamc` WHERE `MCA_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=est&bot=tes3"</script>';	

?>