<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];





?>

<article style="padding-bottom: 280%">












<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados da NOTA</h4>
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
			FROM entradamc c
			WHERE c.MCA_CODIGO = '.$id.'
';




	foreach ($conn->query($sqldados) as $row) 
	{



	
	
?>	

<tr><td>


<center> <a data-toggle="modal" data-target="#mcaimg<?php 	echo $row['MCA_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="estoque/mca/img/<?php 
if($row['MCA_IMAGEM'] == '')
{
		echo "empresa.jpg";
}
else
{
	echo $row['MCA_IMAGEM'];
}
?>">

</td></tr></table>


 </a></center>

</tr></td>

<tr><td>&nbsp

</tr></td>

	
	<tr>
		<td class=tabinfo1><label>Nota: </label></td><td class=tabinfo2>
		<?php print $row['MCA_NOTA']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Pedido: </label></td><td class=tabinfo2>
		<?php print $row['MCA_PEDIDO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Controle fisco: </label></td><td class=tabinfo2>
		<?php print $row['MCA_CONT_FISCO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Série: </label></td><td class=tabinfo2>
		<?php print $row['MCA_SERIE']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Página: </label></td><td class=tabinfo2>
		<?php print $row['MCA_PAGINA']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Natureza da Operação: </label></td><td class=tabinfo2>
		<?php print $row['MCA_NAT_OP']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>NFE: </label></td><td class=tabinfo2>
		<?php print $row['MCA_CH_NFE']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Data da Emissão: </label></td><td class=tabinfo2>
		<?php print $row['MCA_DT_EMISSAO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Data da Saída: </label></td><td class=tabinfo2>
		<?php print $row['MCA_DT_SAIDA']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Hora da Saída: </label></td><td class=tabinfo2>
		<?php print $row['MCA_HR_SAIDA']; ?></td>
		</tr>
	
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['MCA_OBSERVACAO']; ?>
			</td>
		</tr>

	

<?php 

	}
?>
		
		</table>	

		
		
		
			
		
		
		
<!-- Modal -->
  <div class="modal fade" id="mcaimg<?php 	echo 	$row['MCA_ID'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="estoque/mca/img/<?php 
if($row['MCA_IMAGEM'] == '')
{
		echo "empresa.jpg";
}
else
{
	echo $row['MCA_IMAGEM'];
}
?>">

</center>

	
		</div>  
	
</center>
<form enctype="multipart/form-data" action="estoque/mca/mcaaltfot.php" method="post">

<table width=100%>
		<tr>
			<td align=right width=50%>
			<label for="password">Foto: </label>
			</td>
			<td width=50%>
			<label class="btn btn-default btn-file">
				Carregar... <input type="file" name="file">
			</label>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			<td align=left width=50%> 
					<button type="submit" class="btn btn-default">Alterar</button>
				
			</td>
		</tr>
		
		     
		
</table>
<input type="hidden" name="idfoto" value="<?php echo $row['MCA_ID']; ?>">
</form>	  

		  
		  
		  
        
</div></div>
			
		
      </div>

		
		
		
<div class="label5">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="estoque/mca/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
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
			<form action="estoque/mca/mcainfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>

