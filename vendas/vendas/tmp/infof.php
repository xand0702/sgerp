 		<br><br>

<?php
	
	
$sqldados = '

			

			
SELECT *
FROM venpgmt vp, vendas v
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND v.VEN_ID = 29



';
	
	



?>
		<div class="label7">	
<table border=1 valign=top width=100%>

			



<tr>

<td>Parcela Nº</td>


<td>Valor</td>


<td>Vencimento</td>


<td>PAGO</td>


<td>Data PAGO</td>


<td>Valor Pago</td>


</tr>


<?php
	foreach ($conn->query($sqldados) as $row) 
	{
		

?>	




<tr>
	<td class=tabinfo1><?php echo $row['VNG_N_PAR']; ?> </td>	<td class=tabinfo1><?php classinfotablef::moeda($row['VNG_VL_PAR']); ?> </td>	<td class=tabinfo1><?php classinfotablef::databr($row['VNG_DT_PGMT']); ?> </td>	<td class=tabinfo1><?php echo $row['VNG_PAGO']; ?> </td>	<td class=tabinfo1><?php classinfotablef::databr($row['VNG_DT_PAGO']); ?> </td>	<td class=tabinfo1><?php classinfotablef::moeda($row['VNG_VL_PAGO']); ?> </td>

		</tr>
	

<?php 

	}
?>
		
		</table>	

		</div>
			
			

