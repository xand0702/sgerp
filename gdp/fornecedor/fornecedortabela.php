	<?php



require_once('gdp/classtabela.php'); 

$coluna[0] = 'VENDEDOR';
$coluna[1] = 'LIMITE';

$request[0] = 'codfor';
$request[1] = 'vendfor';
$request[2] = 'limite';

$titulo[0] = 'Código';
$titulo[1] = 'Nome';
$titulo[2] = 'Vendedr';
$titulo[3] = 'Limite';
$titulo[4] = 'Pessoa';


$sql[0] = '
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo	';



$sql[1] = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE c.FOR_LIMITE LIKE '%\".\$limite.\"%'
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE c.FOR_LIMITE LIKE '%\".\$limite.\"%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo	";


$sql[2] = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE c.FOR_VENDEDOR LIKE '%\".\$vendfor.\"%'
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE c.FOR_VENDEDOR LIKE '%\".\$vendfor.\"%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo";


$sql[3] = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE  c.FOR_CODIGO LIKE '%\".\$codfor.\"%' 
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE  c.FOR_CODIGO LIKE '%\".\$codfor.\"%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo
";








$tabela = new classtabela();
$tabela->tabela('FOR_', 'gdp','tes5','fornecedor' , $coluna, $request, $sql, $titulo);


require_once('gdp/tmp/tabela.php'); 

	
	?>