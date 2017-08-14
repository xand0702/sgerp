	<?php


require_once('vendas/vendas/classtabela.php'); 

$coluna[0] = 'codcli';
$coluna[1] = 'nome';
$coluna[2] = 'vlnota';
$coluna[3] = 'fpgmt';
$coluna[4] = 'mpgmt';
$coluna[5] = 'vlpagar';
$coluna[6] = 'vlpago';



$requven[0] = 'codfor';
$requven[1] = 'vendfor';
$requven[2] = 'limite';

$titulo[0] = 'Data Emissão';
$titulo[1] = 'Nota';
$titulo[2] = 'Cód. Cli.';
$titulo[3] = 'Cliente';
$titulo[4] = 'Vl. Nota';
$titulo[5] = 'Pagamento';
$titulo[6] = 'F. Pagm.';
$titulo[7] = 'Vl. à Pagar';
$titulo[8] = 'Vl. Pago';










$sql[0] = '

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO


';

$sql[1] = '

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND v.VEN_DATA_CADASTRO  = \'".$limite."\' 

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND v.VEN_DATA_CADASTRO  = \'".$limite."\' 


';


$sql[2] = '

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND c.CLI_CODIGO LIKE \'%".$vendfor."%\'

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND c.CLI_CODIGO LIKE \'%".$vendfor."%\'

';


$sql[3] = '

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND v.VEN_CODIGO LIKE \'%".$codfor."%\'

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND v.VEN_CODIGO LIKE \'%".$codfor."%\'



';


$tabela = new classtabela();
$tabela->tabela('VEN_' ,'ven','vendas' ,'tes1','vendas' , $coluna, $requven, $sql, $titulo);


require_once('vendas/vendas/tmp/tabela.php'); 








// AND p.PED_DATA_CADASTRO  = \'".$limite."\' 
// AND p.PED_ATENDIDO = \'SIM\'

// ';


// $sql[2] = '



// SELECT *
// FROM vendas p, funcinario f, pessoa_fisica pf
// WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
// AND p.PED_COD_FUN = f.FUN_CODIGO
// AND f.FUN_CODIGO LIKE \'%".$vendfor."%\'
// AND p.PED_ATENDIDO = \'SIM\'

// ';


// $sql[3] = '



// SELECT *
// FROM vendas p, funcinario f, pessoa_fisica pf
// WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
// AND p.PED_COD_FUN = f.FUN_CODIGO
// AND p.PED_CODIGO LIKE \'%".$codfor."%\'
// AND p.PED_ATENDIDO = \'SIM\'


	
	?>