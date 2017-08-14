<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];


$sqldel = "

SELECT *
FROM vendas v, venitens vi
WHERE v.VEN_ID = vi.VNI_VEN_ID
AND v.VEN_ID = ".$del."
GROUP BY vi.VNI_ID
";


foreach ($conn->query($sqldel) as $row) 
{
	$sqld = "DELETE FROM `venitens` WHERE `VNI_VEN_ID` = ".$del;
	$conn->exec($sqld);
}


$sqldell = "

SELECT *
FROM vendas v, venpgmt vp
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND v.VEN_ID = ".$del."
GROUP BY vp.VNG_ID

";


foreach ($conn->query($sqldell) as $row) 
{
	$sqldd = "DELETE FROM `venpgmt` WHERE `VNG_VEN_ID` = ".$del;
	$conn->exec($sqldd);
}



$sql = '

DELETE FROM `vendas` WHERE `VEN_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado Venda sucesso'));
		echo '<script>window.location="index.php?mod=ven&bot=tes1"</script>';	

?>