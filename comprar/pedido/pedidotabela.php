	<?php


require_once('comprar/pedido/classtabela.php'); 

$coluna[0] = 'TIPO';



$requcom[0] = 'codfor';
$requcom[1] = 'vendfor';
$requcom[2] = 'limite';

$titulo[0] = 'Data Pedido';
$titulo[1] = 'Pedido';
$titulo[2] = 'Tipo de Pedido';
$titulo[3] = 'Cód. do Fun.';
$titulo[4] = 'Nome do funcionário';







$sql[0] = '

SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_ATENDIDO = \'SIM\'


';

$sql[1] = '


SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_DATA_CADASTRO  = \'".$limite."\' 
AND p.PED_ATENDIDO = \'SIM\'

';


$sql[2] = '



SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND f.FUN_CODIGO LIKE \'%".$vendfor."%\'
AND p.PED_ATENDIDO = \'SIM\'

';


$sql[3] = '



SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_CODIGO LIKE \'%".$codfor."%\'
AND p.PED_ATENDIDO = \'SIM\'

';


$tabela = new classtabela();
$tabela->tabela('PED_' ,'com','comprar' ,'tes1','pedido' , $coluna, $requcom, $sql, $titulo);


require_once('comprar/pedido/tmp/tabela.php'); 

	
	?>