<?php


// SELECT *
// FROM pedidoitens ip, pedido p
// WHERE ip.PDI_PED_ID = p.PED_ID
// AND p.PED_ID = '.\$id.'




class classinfo



{
	
		private $teste;
	
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
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

		
function info($com, $dir, $tes, $subdir, $titulo, $colunainfo)
{



$fp = fopen("".$dir."/".$subdir."/tmp/info.php", "w+");



$escrever = "<?php 

require_once('raiz/arq/conecta2.php'); 

\$id = \$_REQUEST['info'];


?>

<article style=\"padding-bottom: 280%\">












<div class=\"label5\">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do ".$titulo."</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php



\$sqldados = '

			




SELECT *
FROM vendas v
WHERE v.VEN_ID = '.\$id.'







';




	foreach (\$conn->query(\$sqldados) as \$row) 
	{



	
	
?>	

<tr><td>


&nbsp

</tr></td>

<tr><td>&nbsp

</tr></td>

";


$contador = count($colunainfo);

for($i = 0; $i < $contador; $i++)
{
$cont = count($colunainfo[0]);

	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunainfo[$i][$x];
	}
	$y = 0;
$escrever .= "	
	<tr>
		<td class=tabinfo1><label>";
		$escrever .= "".$cadt[$y].": </label></td>";
		$y++;
	
		if(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'moeda')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::moeda(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == '')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}


$escrever .= "
		


	

<?php 

	}
?>
		
		</table>	

		
";

$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class




