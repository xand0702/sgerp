


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];












if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " 

SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_ATENDIDO = 'SIM'



	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	



SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_DATA_CADASTRO  = '".$limite."' 
AND p.PED_ATENDIDO = 'SIM'


"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	



SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND f.FUN_CODIGO LIKE '%".$vendfor."%'
AND p.PED_ATENDIDO = 'SIM'


	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"




SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND p.PED_CODIGO LIKE '%".$codfor."%'
AND p.PED_ATENDIDO = 'SIM'


"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>Data Pedido</b></td>

<td><b>Pedido</b></td>

<td><b>Tipo de Pedido</b></td>

<td><b>Cód. do Fun.</b></td>

<td><b>Nome do funcionário</b></td>

	
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo classtabela::databr(@$row['PED_DATA_CADASTRO']);?> </td>
	<td><a href="index.php?mod=com&bot=tes1&info=<?php echo @$row['PED_ID']; ?>&pro=<?php echo @$row['PED_TIPO']; ?>"><?php echo @$row['PED_CODIGO'];?></a></td>
	
	

<?php
	if(@$row['PED_TIPO'] == 'sv')
		$tipo = 'Serviço';
	elseif(@$row['PED_TIPO'] == 'P.A.')	
		$tipo = 'Produto Acabado';
	elseif(@$row['PED_TIPO'] == 'M.C.')	
		$tipo = 'Material de Consumo';
		
?>


<td><?php echo $tipo;?></td>

		
	

	<td><?php echo @$row['FUN_CODIGO'];?> </td>
	<td><?php echo @$row['PEF_NOME'];?></a></td>
	
	
	
	
	
	 
	 
	 
	 
	<td><a href="index.php?mod=com&bot=tes1&del=<?php echo @$row['PED_ID']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>	
  
	
	
	
	
	

	
	
	
<?php

	}
?>
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


