<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];
$pro = $_REQUEST['pro'];



if($pro == 'P.A.')
{

?>

<article style="padding-bottom: 280%">












<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Estoque</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php



$sqldados = '

			SELECT  ip.IPA_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ip.IPA_QUANTIDADE quant, ip.IPA_PRECOUN valor,
FORMAT((ip.IPA_QUANTIDADE * ip.IPA_PRECOUN), 2) AS total,
ep.EPA_NOTA nota, ep.EPA_CH_NFE nfe

FROM itenspa ip , entradapa ep, produto p
WHERE ip.IPA_ENTRADAPA = ep.EPA_ID
AND ip.IPA_PRODUTO = p.PRO_ID
AND ip.IPA_ID =  '.$id.'
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
		<td class=tabinfo1><label>ID Item: </label></td><td class=tabinfo2>
		<?php print $row['idit']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Código do Produto: </label></td><td class=tabinfo2>
		<?php print $row['codpro']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Descrição do Produto: </label></td><td class=tabinfo2>
		<?php print $row['nome']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>UN: </label></td><td class=tabinfo2>
		<?php print $row['un']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Fabricante: </label></td><td class=tabinfo2>
		<?php print $row['fab']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Estoque: </label></td><td class=tabinfo2>
		<?php print $row['quant']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Preço por peça: </label></td><td class=tabinfo2>
		<?php print $row['valor']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Total do comprar: </label></td><td class=tabinfo2>
		<?php print $row['total']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>NOTA: </label></td><td class=tabinfo2>
		<?php print $row['nota']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>NFE: </label></td><td class=tabinfo2>
		<?php print $row['nfe']; ?></td>
		</tr>
	
		


	

<?php 

	}
?>
		
		</table>	

		
		
		
			
		

		
		
		
<div class="label5">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="estoque/pedido/relatorios/info.php" method="post" target="_blank">
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
			<form action="estoque/pedido/pedidoinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>



<?php 
}
elseif($pro == 'M.C.')
{

?>

<article style="padding-bottom: 280%">












<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Estoque</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php



$sqldados = '

			SELECT  ic.IMC_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ic.IMC_QUANTIDADE quant, ic.IMC_PRECOUN valor,
FORMAT((ic.IMC_QUANTIDADE * ic.IMC_PRECOUN), 2) AS total,
em.MCA_NOTA nota, em.MCA_CH_NFE nfe

FROM itensmc ic, entradamc em, produto p
WHERE ic.IMC_ENTRADAPA = em.MCA_ID
AND ic.IMC_PRODUTO = p.PRO_ID
AND ic.IMC_ID =  '.$id.'
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
		<td class=tabinfo1><label>ID Item: </label></td><td class=tabinfo2>
		<?php print $row['idit']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Código do Produto: </label></td><td class=tabinfo2>
		<?php print $row['codpro']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Descrição do Produto: </label></td><td class=tabinfo2>
		<?php print $row['nome']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>UN: </label></td><td class=tabinfo2>
		<?php print $row['un']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Fabricante: </label></td><td class=tabinfo2>
		<?php print $row['fab']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Estoque: </label></td><td class=tabinfo2>
		<?php print $row['quant']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Preço por peça: </label></td><td class=tabinfo2>
		<?php print $row['valor']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Total do comprar: </label></td><td class=tabinfo2>
		<?php print $row['total']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>NOTA: </label></td><td class=tabinfo2>
		<?php print $row['nota']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>NFE: </label></td><td class=tabinfo2>
		<?php print $row['nfe']; ?></td>
		</tr>
	
		


	

<?php 

	}
?>
		
		</table>	

		
		
		
			
		

		
		
		
<div class="label5">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="estoque/pedido/relatorios/info.php" method="post" target="_blank">
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
			<form action="estoque/pedido/pedidoinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>




<?php 
}

?>


