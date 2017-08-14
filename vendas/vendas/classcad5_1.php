<?php


class classcad51
{	

		function moeda($moeda)
		{
		if($moeda == '')
			$moeda = 0;
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



	
			
function cad51($dir ,$subdir, $ddp)
{
	
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("".$dir."/".$subdir."/tmp/cad5.php", "a+");

	
$escrever = "
<div>
<center><h4>Dados do Pagamento</h4></center>
<hr>
<center>
<table border=0>

";	
	
	

$contador = count($ddp);

for($i = 0; $i < $contador; $i++)
{
$cont = count($ddp[0]);
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $ddp[$i][$x];
	}
	$y = 0;
$escrever .= "	
	<tr>
		<td class=tabinfo1><label>";
		$escrever .= "".$cadt[$y].": </label></td>";
		$y++;
	
		if(@$cadt[2] == 'moeda')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classcad51::moeda(".$cadt[$y]."); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classcad51::databr(".$cadt[$y]."); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print '".$cadt[$y]."'; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}	
	
	
	
	
$escrever .= "

</table>
</center>
</div>
";	
	
	
	
	
	$escrever .= '
	
<hr>
';
	

$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad5	
			
			
			
} //fim class