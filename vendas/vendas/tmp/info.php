<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];


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
FROM vendas v
WHERE v.VEN_ID = '.$id.'







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
		<td class=tabinfo1><label>NOTA: </label></td><td class=tabinfo2>
		<?php print $row['VEN_CODIGO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Data Emissão: </label></td><td class=tabinfo2>
		<?php print classinfo::databr($row['VEN_DATA_CADASTRO']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Pagamento: </label></td><td class=tabinfo2>
		<?php print $row['VEN_F_PGMT']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Forma de Pagamento: </label></td><td class=tabinfo2>
		<?php print $row['VEN_M_PGMT']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Valor da NOTA: </label></td><td class=tabinfo2>
		<?php print classinfo::moeda($row['VEN_VL_GASTO']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Valor Desconto: </label></td><td class=tabinfo2>
		<?php print classinfo::moeda($row['VEN_DESCONTO']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Motivo do Desconto: </label></td><td class=tabinfo2>
		<?php print $row['VEN_M_DESC']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Entrada(se parcelado): </label></td><td class=tabinfo2>
		<?php print classinfo::moeda($row['VEN_ENTRADA']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Valor à Pagar: </label></td><td class=tabinfo2>
		<?php print classinfo::moeda($row['VEN_VL_PARCELADO']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Valor à Receber: </label></td><td class=tabinfo2>
		<?php print classinfo::moeda($row['VEN_VL_BRUTO']); ?></td>
		</tr>
	
		


	

<?php 

	}
?>
		
		</table>	

		
