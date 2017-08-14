


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];












if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " 

SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND si.ISP_QUANTIDADE <> 0


	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	



SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND p.PRO_AB_DESCRICAO  LIKE '%".$limite."%' 
AND si.ISP_QUANTIDADE <> 0



"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	


SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND p.PRO_CODIGO LIKE '%".$vendfor."%'
AND si.ISP_QUANTIDADE <> 0




 

	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"




SELECT si.ISP_ID idvend,p.PRO_CODIGO codpro,p.PRO_AB_DESCRICAO nome, 
si.ISP_QUANTIDADE quant, si.ISP_VL_VENDA valor, p.PRO_UNIDADE un, 
si.ISP_DATA_CADASTRO datent
FROM saidapa sp, saidaitenspa si, produto p
WHERE si.ISP_SAIDAPA = sp.SPA_ID
AND si.ISP_PRODUTO = p.PRO_ID
AND si.ISP_ID LIKE '%".$codfor."%'
AND si.ISP_QUANTIDADE <> 0












"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>ID Item Vend.</b></td>

<td><b>Código Prod.</b></td>

<td><b>Desc.</b></td>

<td><b>Quant.</b></td>

<td><b>Valor UN</b></td>

<td><b>UN</b></td>

<td><b>Data Ent.</b></td>

	
	</tr>
	
<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	
	
<td><?php echo @$row['idvend'];?></td>

<td><?php echo @$row['codpro'];?></td>

<td><?php echo @$row['nome'];?></td>

<td><?php echo @$row['quant'];?></td>

<td><?php classtabela::moeda(@$row['valor']);?></td>

<td><?php echo @$row['un'];?></td>

<td><?php classtabela::databr(@$row['datent']);?></td>

		
	
	</tr>	

	
	
<?php

	}
?>
	
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


