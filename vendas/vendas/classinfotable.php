<?php


class classinfotabled



{
	
		private $teste;
	
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$".$md;
		echo $md;
		}


		function databr($data)
		{
			if($data == null)
			{
				echo "";
			}
			else
			{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
			}
		}	

		
function infotabled($id, $com, $dir, $tes, $subdir, $titulo, $colunainfot)
{



$fp = fopen("".$dir."/".$subdir."/tmp/infod.php", "w+");



$escrever = " 		<br><br>
		<div class=\"label6\">	
<table border=1 valign=top width=100%>

			
<?php



\$sqldados = '

SELECT *
FROM produto p, venitens vi, vendas v, saidaitenspa sp
WHERE v.VEN_ID = vi.VNI_VEN_ID
AND sp.ISP_ID = vi.VNI_ID_ISP
AND p.PRO_ID = vi.VNI_ID_PROD
AND v.VEN_ID = 	".$id."	

';


?>
";

$conta = count($titulo);


$escrever .= "

<tr>
";

for($i = 0; $i < $conta; $i++)
{

$escrever .= "
<td>".$titulo[$i]."</td>

";
}

$escrever .= "
<?php
	foreach (\$conn->query(\$sqldados) as \$row) 
	{
		


";

$escrever .= "
?>
</tr>

<tr>
<?php
";

$contador = count($colunainfot);

for($i = 0; $i < $contador; $i++)
{

	$escrever .= "	
	if('$colunainfot[$i]' == 'PRO_ICMS')
	{
		\$icms = \$row['".$colunainfot[$i]."'];
		\$icms = \$icms/100;
				
	}
	elseif('$colunainfot[$i]' == 'PRO_IPI')
	{
		\$ipi = \$row['".$colunainfot[$i]."'];
		\$ipi = \$ipi/100;
	
	}elseif('$colunainfot[$i]' == 'ISP_VL_VENDA')
	{
		\$vl_venda = \$row['".$colunainfot[$i]."'];
	
	}elseif('$colunainfot[$i]' == 'VNI_QUANTIDADE')
	{
		\$quant = \$row['".$colunainfot[$i]."'];
		echo '<td class=tabinfo1>'.\$row['".$colunainfot[$i]."'].'</td>';
	
	}
	else
	{
		echo '<td class=tabinfo1>'.\$row['".$colunainfot[$i]."'].'</td>';
	}
	";	
}
	



$escrever .= "

\$total = \$quant * \$vl_venda;
\$icms = \$total * \$icms;
\$ipi = \$total * \$ipi;
?>

<td class=tabinfo1><?php echo classinfotabled::moeda(\$vl_venda); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda(\$icms); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda(\$ipi); ?> </td>
<td class=tabinfo1><?php echo classinfotabled::moeda(\$total); ?> </td>

		</tr>
	

<?php 

	}
?>
		
		</table>	

		</div>
			
			
			
			
			
			
			
		

		
		
		
";

	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class