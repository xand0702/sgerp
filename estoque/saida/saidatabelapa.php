	<?php
/*





SELECT 'pa' prod, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'
UNION ALL
SELECT 'mc' prod, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'







*/


require_once('estoque/saida/classtabela.php'); 

$coluna[0] = 'material';
$coluna[1] = 'id';
$coluna[2] = 'codpro';
$coluna[3] = 'nota';
$coluna[4] = 'id';
$coluna[5] = 'nome';
$coluna[6] = 'datac';
$coluna[7] = 'quant';
$coluna[8] = 'valor';
$coluna[9] = 'un';



$request[0] = 'codfor';
$request[1] = 'vendfor';
$request[2] = 'limite';

$titulo[0] = 'Tip. Prod.';
$titulo[1] = 'Código';
$titulo[2] = 'Nota';
$titulo[3] = 'ID Item';
$titulo[4] = 'Desc.';
$titulo[5] = 'Dt da ent.';
$titulo[6] = 'Quant.';
$titulo[7] = 'Valor Un';
$titulo[8] = 'UN';







$sql[0] = 'SELECT \'P.A.\' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = \'SIM\'

';

$sql[1] = '


SELECT \'P.A.\' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = \'SIM\'
AND p.PRO_AB_DESCRICAO  LIKE \'%".$limite."%\' 


';


$sql[2] = '


SELECT \'P.A.\' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = \'SIM\'
AND p.PRO_CODIGO LIKE \'%".$vendfor."%\'




 
';


$sql[3] = '



SELECT \'P.A.\' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = \'SIM\'
HAVING material LIKE \'%".$codfor."%\'











';








$tabela = new classtabela();
$tabela->tabela('est','tes4','saida' , $coluna, $request, $sql, $titulo);


require_once('estoque/saida/tmp/tabela.php'); 

	
	?>