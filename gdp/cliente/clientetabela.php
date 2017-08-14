	<?php

require_once('raiz/arq/conecta2.php'); 

$codcli = @$_REQUEST['codcli'];
$nomcli = @$_REQUEST['nomcli'];
$doccli = @$_REQUEST['doccli'];


/*
echo '*******'.$codcli.'******';

echo '********'.$nomcli.'*****';

echo '*******'.$doccli.'******';
*/



		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}








if($codcli == '' && $nomcli == '' && $doccli == '' )
{
	$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pf.PEF_CODIGO cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3			
			, c.CLI_OBSERVACAO
			FROM cliente c, pessoa_fisica pf
			WHERE c.CLI_COD_PESSOA = pf.PEF_CODIGO 
			GROUP BY nome
			UNION ALL
			SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pj.PEJ_CODIGO  cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
			FROM cliente c, pessoa_juridica pj
			WHERE c.CLI_COD_PESSOA = pj.PEJ_CODIGO
			GROUP BY nome
			ORDER BY codigo
			";
}
elseif($doccli == '' && $nomcli == '')
{
	$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pf.PEF_CODIGO cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_fisica pf
		WHERE c.CLI_CODIGO LIKE '%".$codcli."%' 
		AND c.CLI_COD_PESSOA = pf.PEF_CODIGO 
		GROUP BY nome
		UNION ALL
		SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pj.PEJ_CODIGO  cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_juridica pj
		WHERE  c.CLI_CODIGO LIKE '%".$codcli."%' 
		AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
		GROUP BY nome
		ORDER BY codigo
";
	
}
elseif($doccli == '' && $codcli == '')
{
	$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.CLI_CODIGO codigo,
		c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pf.PEF_CODIGO cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_fisica pf
		WHERE pf.PEF_NOME LIKE '%".$nomcli."%' 
		AND c.CLI_COD_PESSOA = pf.PEF_CODIGO 
		GROUP BY nome
		UNION ALL
		SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pj.PEJ_CODIGO  cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_juridica pj
		WHERE  pj.PEJ_RAZAO_SOCIAL LIKE '%".$nomcli."%' 
		AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
		GROUP BY nome
		ORDER BY codigo
";
	
}
elseif( $codcli == '' && $nomcli == '')
{

$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, pf.PEF_CODIGO cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_fisica pf
		WHERE pf.PEF_CPF LIKE '%".$doccli."%' 
		AND c.CLI_COD_PESSOA = pf.PEF_CODIGO 
		GROUP BY nome
		UNION ALL
		SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo,
			c.CLI_LIMITE limite, c.CLI_PESSOA pessoa, c.CLI_ID id, pj.PEJ_CODIGO  cod_p
			, c.CLI_COMPRADOR, c.CLI_EMPREGO, c.CLI_RENDA, c.CLI_CONTATO1, c.CLI_CONTATO2,
			c.CLI_CONTATO3, c.CLI_TEL_CONFIRMACAO1, c.CLI_TEL_CONFIRMACAO2, c.CLI_TEL_CONFIRMACAO3
			, c.CLI_OBSERVACAO
		FROM cliente c, pessoa_juridica pj
		WHERE  pj.PEJ_CNPJ LIKE '%".$doccli."%' 
		AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
		GROUP BY nome
		ORDER BY codigo

";

}


?>


























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Nome</b> </td>
	<td><b>Documento</b> </td>
	<td><b>Limite</b></td>
	<td><b>Pessoa</b></td>
	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
	if(@$row['pessoa'] == 'pf')
		$pessoa = "Física";
	elseif(@$row['pessoa'] == 'pj')	
		$pessoa = "Jurídica";

?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['codigo'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes4&tpess=<?php echo @$row['pessoa']; ?>&codpess=<?php echo @$row['cod_p']; ?>&info=<?php echo @$row['id']; ?>"><?php echo @$row['nome'];?></a></td>
	<td><?php echo @$row['doc'];?></td>
	<td><?php print moeda(@$row['limite']);?></td>
	<td><?php echo @$pessoa;?></td>
	
	
	
	
	
	<td><a data-toggle="modal" data-target="#clientealt<?php echo @$row['id']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('clienteformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes4&del=<?php echo @$row['id']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>