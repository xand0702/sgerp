	<?php


require_once('vendas/vendas/classtabelavnd.php'); 

$coluna[0] = 'idvend';
$coluna[1] = 'codpro';
$coluna[2] = 'nome';
$coluna[3] = 'quant';
$coluna[4] = 'valor';
$coluna[5] = 'un';
$coluna[6] = 'datent';



$requven[0] = 'codfor';
$requven[1] = 'vendfor';
$requven[2] = 'limite';

$titulo[0] = 'ID Item Vend.';
$titulo[1] = 'Código Prod.';
$titulo[2] = 'Desc.';
$titulo[3] = 'Quant.';
$titulo[4] = 'Valor UN';
$titulo[5] = 'UN';
$titulo[6] = 'Data Ent.';







$sql[0] = '

SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND si.ISP_QUANTIDADE <> 0

';

$sql[1] = '


SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND p.PRO_AB_DESCRICAO  LIKE \'%".$limite."%\' 
AND si.ISP_QUANTIDADE <> 0


';


$sql[2] = '


SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND p.PRO_CODIGO LIKE \'%".$vendfor."%\'
AND si.ISP_QUANTIDADE <> 0




 
';


$sql[3] = '



SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND si.ISP_ID LIKE \'%".$codfor."%\'
AND si.ISP_QUANTIDADE <> 0











';








$tabela = new classtabelavnd();
$tabela->tabelavnd('ven','vendas','tes1','vendas' , $coluna, $requven, $sql, $titulo);


require_once('vendas/vendas/tmp/tabelavnd.php'); 

	
	?>