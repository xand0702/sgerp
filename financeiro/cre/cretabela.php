	<?php


require_once('financeiro/cre/classtabela.php'); 

$coluna[0] = 'idpar';
$coluna[1] = 'clicod';
$coluna[2] = 'nome';
$coluna[3] = 'vlpar';
$coluna[4] = 'dtpgmt';
$coluna[5] = 'pago';
$coluna[6] = 'dtpago';
$coluna[7] = 'vlpago';



$requfin[0] = 'codfor';
$requfin[1] = 'findfor';
$requfin[2] = 'limite';

$titulo[0] = 'ID Parcela';
$titulo[1] = 'Cód. Cli.';
$titulo[2] = 'Cliente';
$titulo[3] = 'Vl. Parcela';
$titulo[4] = 'Dt. Pagamento';
$titulo[5] = 'PAGO';
$titulo[6] = 'Dt. Pago';
$titulo[7] = 'Vl. Pago';










$sql[0] = '

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pj\'

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pf\'


';

$sql[1] = '






SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pj\'
AND pj.PEJ_RAZAO_SOCIAL  LIKE \'%".$limite."%\' 

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pf\'
AND pf.PEF_NOME  LIKE \'%".$limite."%\' 


';


$sql[2] = '



SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pj\'
AND c.CLI_CODIGO LIKE \'%".$findfor."%\'
UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pf\'
AND c.CLI_CODIGO LIKE \'%".$findfor."%\'

';


$sql[3] = '



SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pj\'
AND vp.VNG_ID LIKE \'%".$codfor."%\'

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = \'pf\'
AND vp.VNG_ID LIKE \'%".$codfor."%\'



';


$tabela = new classtabela();
$tabela->tabela('VEN_' ,'fin','financeiro' ,'tes1','cre' , $coluna, $requfin, $sql, $titulo);


require_once('financeiro/cre/tmp/tabela.php'); 








// AND p.PED_DATA_CADASTRO  = \'".$limite."\' 
// AND p.PED_ATENDIDO = \'SIM\'

// ';


// $sql[2] = '



// SELECT *
// FROM cre p, funcinario f, pessoa_fisica pf
// WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
// AND p.PED_COD_FUN = f.FUN_CODIGO
// AND f.FUN_CODIGO LIKE \'%".$findfor."%\'
// AND p.PED_ATENDIDO = \'SIM\'

// ';


// $sql[3] = '



// SELECT *
// FROM cre p, funcinario f, pessoa_fisica pf
// WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
// AND p.PED_COD_FUN = f.FUN_CODIGO
// AND p.PED_CODIGO LIKE \'%".$codfor."%\'
// AND p.PED_ATENDIDO = \'SIM\'


	
	?>