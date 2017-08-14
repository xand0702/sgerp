<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];
$pro = $_REQUEST['pro'];



?>

<article style="padding-bottom: 280%">












<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Pedido</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php



$sqldados = '

			





SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_COD_FUN = f.FUN_CODIGO
AND  p.PED_ID = '.$id.'







';




	foreach ($conn->query($sqldados) as $row) 
	{



	
	
?>	

<tr><td>


&nbsp

</tr></td>

<tr><td>&nbsp

</tr></td>

	
	<tr>
		<td class=tabinfo1><label>Pedido: </label></td><td class=tabinfo2>
		<?php print $row['PED_CODIGO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Data Pedido: </label></td><td class=tabinfo2>
		<?php print classinfo::databr($row['PED_DATA_CADASTRO']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tipo de Pedido: </label></td>
		<?php
		if(@$pro == 'sv')
		{ ?>
		<td class=tabinfo2>
		Serviço </td>
		<?php
		}
		elseif(@$pro == 'P.A.')
		{ ?>
		<td class=tabinfo2>
		Produto Acabado</td>
		<?php
		}
		elseif(@$pro == 'M.C.')
		{ ?>
		<td class=tabinfo2>
		Material de Consumo</td>
		<?php
		}?>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Cod. Fun: </label></td><td class=tabinfo2>
		<?php print $row['PED_COD_FUN']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Nome Funcionário: </label></td><td class=tabinfo2>
		<?php print $row['PEF_NOME']; ?></td>
		</tr>
	
		


	

<?php 

	}
?>
		
		</table>	

		
 		<br><br>
		<div class="label5">	
<table border=1 valign=top width=100%>

			
<?php

if($pro == 'sv')
{

$sqldados = '

			

			
			
SELECT pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 

p.PED_ID,
pj.PEJ_RAZAO_SOCIAL nome



FROM pedido p, pedidoitens pit, fornecedor f, 
pessoa_juridica pj, tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO OR pit.PDI_PROD_DESC LIKE "%%") 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pj.PEJ_CODIGO
AND p.PED_ID =  '.$id.'
GROUP BY id

UNION ALL

SELECT pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 
p.PED_ID,
pf.PEF_NOME nome

FROM pedido p, pedidoitens pit, fornecedor f, pessoa_fisica pf,
tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID
AND p.PED_ID =  '.$id.'

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO OR pit.PDI_PROD_DESC LIKE "%%") 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pf.PEF_CODIGO
GROUP BY id
			
			
			









';
}
else
{
	
	
$sqldados = '

			

			
			
SELECT pr.PRO_AB_DESCRICAO des, pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 

p.PED_ID,
pj.PEJ_RAZAO_SOCIAL nome



FROM pedido p, pedidoitens pit, fornecedor f, 
pessoa_juridica pj, tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO) 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pj.PEJ_CODIGO
AND p.PED_ID =  '.$id.'
GROUP BY id

UNION ALL

SELECT pr.PRO_AB_DESCRICAO des, pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 
p.PED_ID,
pf.PEF_NOME nome

FROM pedido p, pedidoitens pit, fornecedor f, pessoa_fisica pf,
tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID
AND p.PED_ID =  '.$id.'

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO) 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pf.PEF_CODIGO
GROUP BY id
			
			
			









';
	
	
}


?>


<tr>

<td>Tipo</td>


<td>Cód. For./Ter.</td>


<td>Nome For./Ter.</td>


<td>Prod/Ter.</td>


<td>Quant./Tempo</td>


<td>Valor</td>


<?php
	foreach ($conn->query($sqldados) as $row) 
	{
		

?>	



</tr>

<tr>
	
	
		<td class=tabinfo1><?php echo $row['PDI_TIPO']; ?> </td>
	
		
	
		<td class=tabinfo1><?php echo $row['PDI_FOR_TER']; ?> </td>
	
		
	
		<td class=tabinfo1><?php echo $row['nome']; ?> </td>
	
		
	
		<td class=tabinfo1><?php echo $row['des']; ?> </td>
	
		
	
		<td class=tabinfo1><?php echo $row['PDI_QUANT_TEMP']; ?> </td>
	
		
	
		<td class=tabinfo1><?php echo $row['PDI_VALOR']; ?> </td>
	
	
		</tr>
	

<?php 

	}
?>
		
		</table>	

		</div>
			
			
			
			
			
			
			
		

		
		
		
<div class="label5">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="comprar/pedido/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="pro" value="<?php echo $pro; ?>">
		
		
		<input type="submit" class="btn btn-default" value="Imprimir">
	</form>
		</td>
	</tr>
	
	
	
	

	
	
	
	<tr>
		<td width=50%>
			<div class="modal-footer">
				<button style="visibility: hidden;" type="submit" class="btn btn-default">Fechar</button>
			</div>
		</td>
		<td width=50%> 
			<form action="comprar/pedido/pedidoinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>

</div>
</article>

