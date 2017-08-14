 		<br><br>
		<div class="label6">	
<table border=1 valign=top width=100%>

			
<?php



$sqldados = '

SELECT *
FROM produto p, venitens vi, vendas v, saidaitenspa sp
WHERE v.VEN_ID = vi.VNI_VEN_ID
AND sp.ISP_ID = vi.VNI_ID_ISP
AND p.PRO_ID = vi.VNI_ID_PROD
AND v.VEN_ID = 	29	

';


?>


<tr>

<td>Cód. Prod.</td>


<td>Descrição</td>


<td>Quantidade</td>


<td>Valor/UN</td>


<td>ICMS</td>


<td>IPI</td>


<td>Total</td>


<?php
	foreach ($conn->query($sqldados) as $row) 
	{
		



?>
</tr>

<tr>
<?php
	
	if('PRO_CODIGO' == 'PRO_ICMS')
	{
		$icms = $row['PRO_CODIGO'];
		$icms = $icms/100;
				
	}
	elseif('PRO_CODIGO' == 'PRO_IPI')
	{
		$ipi = $row['PRO_CODIGO'];
		$ipi = $ipi/100;
	
	}elseif('PRO_CODIGO' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['PRO_CODIGO'];
	
	}elseif('PRO_CODIGO' == 'VNI_QUANTIDADE')
	{
		$quant = $row['PRO_CODIGO'];
		echo '<td class=tabinfo1>'.$row['PRO_CODIGO'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['PRO_CODIGO'].'</td>';
	}
		
	if('PRO_AB_DESCRICAO' == 'PRO_ICMS')
	{
		$icms = $row['PRO_AB_DESCRICAO'];
		$icms = $icms/100;
				
	}
	elseif('PRO_AB_DESCRICAO' == 'PRO_IPI')
	{
		$ipi = $row['PRO_AB_DESCRICAO'];
		$ipi = $ipi/100;
	
	}elseif('PRO_AB_DESCRICAO' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['PRO_AB_DESCRICAO'];
	
	}elseif('PRO_AB_DESCRICAO' == 'VNI_QUANTIDADE')
	{
		$quant = $row['PRO_AB_DESCRICAO'];
		echo '<td class=tabinfo1>'.$row['PRO_AB_DESCRICAO'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['PRO_AB_DESCRICAO'].'</td>';
	}
		
	if('VNI_QUANTIDADE' == 'PRO_ICMS')
	{
		$icms = $row['VNI_QUANTIDADE'];
		$icms = $icms/100;
				
	}
	elseif('VNI_QUANTIDADE' == 'PRO_IPI')
	{
		$ipi = $row['VNI_QUANTIDADE'];
		$ipi = $ipi/100;
	
	}elseif('VNI_QUANTIDADE' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['VNI_QUANTIDADE'];
	
	}elseif('VNI_QUANTIDADE' == 'VNI_QUANTIDADE')
	{
		$quant = $row['VNI_QUANTIDADE'];
		echo '<td class=tabinfo1>'.$row['VNI_QUANTIDADE'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['VNI_QUANTIDADE'].'</td>';
	}
		
	if('ISP_VL_VENDA' == 'PRO_ICMS')
	{
		$icms = $row['ISP_VL_VENDA'];
		$icms = $icms/100;
				
	}
	elseif('ISP_VL_VENDA' == 'PRO_IPI')
	{
		$ipi = $row['ISP_VL_VENDA'];
		$ipi = $ipi/100;
	
	}elseif('ISP_VL_VENDA' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['ISP_VL_VENDA'];
	
	}elseif('ISP_VL_VENDA' == 'VNI_QUANTIDADE')
	{
		$quant = $row['ISP_VL_VENDA'];
		echo '<td class=tabinfo1>'.$row['ISP_VL_VENDA'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['ISP_VL_VENDA'].'</td>';
	}
		
	if('PRO_ICMS' == 'PRO_ICMS')
	{
		$icms = $row['PRO_ICMS'];
		$icms = $icms/100;
				
	}
	elseif('PRO_ICMS' == 'PRO_IPI')
	{
		$ipi = $row['PRO_ICMS'];
		$ipi = $ipi/100;
	
	}elseif('PRO_ICMS' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['PRO_ICMS'];
	
	}elseif('PRO_ICMS' == 'VNI_QUANTIDADE')
	{
		$quant = $row['PRO_ICMS'];
		echo '<td class=tabinfo1>'.$row['PRO_ICMS'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['PRO_ICMS'].'</td>';
	}
		
	if('PRO_IPI' == 'PRO_ICMS')
	{
		$icms = $row['PRO_IPI'];
		$icms = $icms/100;
				
	}
	elseif('PRO_IPI' == 'PRO_IPI')
	{
		$ipi = $row['PRO_IPI'];
		$ipi = $ipi/100;
	
	}elseif('PRO_IPI' == 'ISP_VL_VENDA')
	{
		$vl_venda = $row['PRO_IPI'];
	
	}elseif('PRO_IPI' == 'VNI_QUANTIDADE')
	{
		$quant = $row['PRO_IPI'];
		echo '<td class=tabinfo1>'.$row['PRO_IPI'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.$row['PRO_IPI'].'</td>';
	}
	

$total = $quant * $vl_venda;
$icms = $total * $icms;
$ipi = $total * $ipi;
?>

<td class=tabinfo1><?php echo classinfotabled::moeda($vl_venda); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda($icms); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda($ipi); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda($total); ?> </td>

		</tr>
	

<?php 

	}
?>
		
		</table>	

		</div>
			
			
			
			
			
			
			
		

		
		
		
