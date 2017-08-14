<?php


class classinfotablef



{
	
		private $teste;
	
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
		
		function moeda($moeda)
		{
			if($moeda == null)
			{
				echo " - ";
			}
			else
			{
				$md = @number_format($moeda, 2, ',', ' ');
				$md = "R$".$md;
				echo $md;
			}
		}

		
function infotablef($id, $com, $dir, $tes, $subdir, $titulo, $colunainfot)
{



$fp = fopen("".$dir."/".$subdir."/tmp/infof.php", "w+");



$escrever = " 		<br><br>

<?php
	
	
\$sqldados = '

			

			
SELECT *
FROM venpgmt vp, vendas v
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND v.VEN_ID = ".$id."



';
	
	



?>
		<div class=\"label7\">	
<table border=1 valign=top width=100%>

			

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
</tr>


<?php
	foreach (\$conn->query(\$sqldados) as \$row) 
	{
		

?>	


";

$escrever .= "

<tr>
";

$contador = count($colunainfot);

for($i = 0; $i < $contador; $i++)
{
if($colunainfot[$i] == 'VNG_VL_PAR' || $colunainfot[$i] == 'VNG_VL_PAGO')
{	
	$escrever .= "	<td class=tabinfo1><?php classinfotablef::moeda(\$row['".$colunainfot[$i]."']); ?> </td>";
}
elseif($colunainfot[$i] == 'VNG_DT_PAGO' || $colunainfot[$i] == 'VNG_DT_PGMT')
{	
	$escrever .= "	<td class=tabinfo1><?php classinfotablef::databr(\$row['".$colunainfot[$i]."']); ?> </td>";
}
else
{	
	$escrever .= "	<td class=tabinfo1><?php echo \$row['".$colunainfot[$i]."']; ?> </td>";
}

}


$escrever .= "

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