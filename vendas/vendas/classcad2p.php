<?php





class classcad2p



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

		
function cad2p($codpess, $sig, $dir, $tes, $subdir, $tabela, $titulo, $colunainfo)
{



$fp = fopen("".$dir."/".$subdir."/tmp/cad2p.php", "w+");



$escrever = "<?php 


require_once('raiz/arq/conecta2.php'); 





?>

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
			FROM ".$tabela." t, pessoa_fisica pf
			WHERE t.".$sig."CODIGO = ".$codpess."
			AND t.".$sig."COD_PEF = pf.PEF_CODIGO
';
	



	foreach (\$conn->query(\$sqldados) as \$row) 
	{



	?>




<tr><td>


<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['".$sig."ID'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"gdp/pessoafisica/img/<?php 
if(\$row['PEF_IMAGEM'] == '')
{
	if(\$row['PEF_SEXO'] == 1)
	{
		echo \"masculino.jpg\";
	}
	elseif(\$row['PEF_SEXO'] == 2)
	{
		echo \"feminino.jpg\";
	}
	elseif(\$row['PEF_SEXO'] == 3)
	{
		echo \"outros.jpg\";
	}
}
else
{
	echo \$row['PEF_IMAGEM'];
}
?>\">

</td></tr></table>


 </a></center>

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
	
		if(@$cadt[2] == 'moeda')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::moeda(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		else
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

		
		
		
			
		
		
		
<!-- Modal -->
  <div class=\"modal fade\" id=\"".$subdir."img<?php 	echo 	\$row['".$sig."ID'];?>\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
	
	  <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
        </div>
        <div class=\"modal-body\">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src=\"gdp/pessoafisica/img/<?php 
if(\$row['PEF_IMAGEM'] == '')
{
	if(\$row['PEF_SEXO'] == 1)
	{
		echo \"masculino.jpg\";
	}
	elseif(\$row['PEF_SEXO'] == 2)
	{
		echo \"feminino.jpg\";
	}
	elseif(\$row['PEF_SEXO'] == 3)
	{
		echo \"outros.jpg\";
	}
}
else
{
	echo \$row['PEF_IMAGEM'];
}
?>\">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>




<hr>
	
			
	
	
";


	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class