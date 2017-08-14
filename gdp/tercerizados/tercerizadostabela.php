	<?php

require_once('raiz/arq/conecta2.php'); 

$codter = @$_REQUEST['codter'];
$nomter = @$_REQUEST['nomter'];
$finter = @$_REQUEST['finter'];


/*
echo '*******'.$codter.'******';

echo '********'.$nomter.'*****';

echo '*******'.$finter.'******';
*/



		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}








if($codter == '' && $nomter == '' && $finter == '' )
{
	$tab = "
	
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.TER_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_fisica pf
WHERE c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_juridica pj
WHERE c.TER_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo	
	
	
			";
}
elseif($finter == '' && $nomter == '')
{
	$tab = "
	
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.TER_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_fisica pf
WHERE c.TER_CODIGO LIKE '%".$codter."%' 
AND  c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_juridica pj
WHERE c.TER_CODIGO LIKE '%".$codter."%' 
AND  c.TER_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo	
	

";
	
}
elseif($finter == '' && $codter == '')
{
	$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.TER_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_fisica pf
WHERE pf.PEF_NOME LIKE '%".$nomter."%' 
AND  c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_juridica pj
WHERE pj.PEJ_RAZAO_SOCIAL LIKE '%".$nomter."%' 
AND  c.TER_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY codigo
";
	
}
elseif( $codter == '' && $nomter == '')
{

$tab = "SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, c.TER_CODIGO codigo, pf.PEF_CODIGO cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_fisica pf
WHERE  c.TER_FINALIDADE LIKE '%".$finter."%' 
AND  c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo, pj.PEJ_CODIGO  cod_p,

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM,

c.TER_OBSERVACAO
FROM tercerizados c, pessoa_juridica pj
WHERE  c.TER_FINALIDADE LIKE '%".$finter."%' 
AND  c.TER_COD_PESSOA = pj.PEJ_CODIGO
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
	<td><b>Nº de Pessoas</b> </td>
	<td><b>Finalidade</b></td>
	<td><b>Pessoa</b></td>
	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
	if(@$row['TER_PESSOA'] == 'pf')
		$pessoa = "Física";
	elseif(@$row['TER_PESSOA'] == 'pj')	
		$pessoa = "Jurídica";

?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['codigo'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes6&tpess=<?php echo @$row['TER_PESSOA']; ?>&codpess=<?php 
	echo @$row['cod_p']; ?>&info=<?php echo @$row['id']; ?>"><?php echo @$row['nome'];?></a></td>
	<td><?php echo @$row['TER_N_PESSOAS'];?></td>
	<td><?php echo @$row['TER_FINALIDADE'];?></td>
	<td><?php echo @$pessoa;?></td>
	
	
	
	
	
	<td><a data-toggle="modal" data-target="#tercerizadosalt<?php echo @$row['id']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('tercerizadosformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes6&del=<?php echo @$row['id']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>