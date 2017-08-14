<?php



class classfechainfo



{
	
function classfechainfo()
{	
$codigo = $_REQUEST['info'];

?>


<hr>
<div class="label6">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="vendas/vendas/relatorios/dompdf/nof_rel.php" method="post" target="_blank">
		<input type="hidden" name="id" value=" <?php echo $codigo; ?> ">
		
		
		<input type="submit" class="btn btn-default" value="NOTA">
	</form>
		</td>
	</tr>
	
	
	
	

	
	
	
	<tr>
		<td width=50%>
			<div class="modal-footer">
				<button style="visibility: hidden;" type="submit" class="btn btn-default">Fechar</button>
			</div>
		</td>
		<td width="50%"> 
			<form action="vendas/vendas/vendasinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>

</div>
</article>


<?php
}
}

?>
