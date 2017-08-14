


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];






		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}








if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " 
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
ORDER BY codigo	
	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE c.FOR_LIMITE LIKE '%".$limite."%'
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE c.FOR_LIMITE LIKE '%".$limite."%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo	
"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE c.FOR_VENDEDOR LIKE '%".$vendfor."%'
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE c.FOR_VENDEDOR LIKE '%".$vendfor."%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo
	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.FOR_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_fisica pf
WHERE  c.FOR_CODIGO LIKE '%".$codfor."%' 
AND  c.FOR_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.FOR_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.FOR_VENDEDOR, c.FOR_VENCIMENTO, c.FOR_LIMITE, c.FOR_GERENTE,
c.FOR_PESSOA, c.FOR_ID id,

c.FOR_OBSERVACAO
FROM fornecedor c, pessoa_juridica pj
WHERE  c.FOR_CODIGO LIKE '%".$codfor."%' 
AND  c.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo

"
;

}


?>


























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>Código</b></td>

<td><b>Nome</b></td>

<td><b>Vendedr</b></td>

<td><b>Limite</b></td>

<td><b>Pessoa</b></td>

	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
	if(@$row['FOR_PESSOA'] == 'pf')
		$pessoa = "Física";
	elseif(@$row['FOR_PESSOA'] == 'pj')	
		$pessoa = "Jurídica";

?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['codigo'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes5&tpess=<?php echo @$row['FOR_PESSOA']; ?>&codpess=<?php 
	echo @$row['cod_p']; ?>&info=<?php echo @$row['id']; ?>"><?php echo @$row['nome'];?></a></td>
	
	
<td><?php echo @$row['FOR_VENDEDOR'];?></td>

<td><?php echo @$row['FOR_LIMITE'];?></td>

		
	<td><?php echo @$pessoa;?></td>
	
	
	
	
	
	<td><a data-toggle="modal" data-target="#fornecedoralt<?php echo @$row['id']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('gdp/fornecedor/fornecedorformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes5&del=<?php echo @$row['id']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>



