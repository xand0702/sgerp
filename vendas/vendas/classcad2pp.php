<?php





class classcad2pc



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

		
function cad2pc($codpess, $sig, $dir, $tes, $subdir, $tabela, $titulo, $colunainfo)
{



$fp = fopen("".$dir."/".$subdir."/tmp/cad2pc.php", "w+");



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


SELECT t.CLI_CODIGO codigo, 
pf.PEF_NOME nome,
pf.PEF_CPF doc,
t.CLI_ID id,
t.CLI_PESSOA pessoa,
pf.PEF_IMAGEM imagem,
pf.PEF_SEXO sexo,
t.CLI_COMPRADOR,
t.CLI_EMPREGO,
t.CLI_RENDA,
t.CLI_LIMITE,
t.CLI_TEL_CONFIRMACAO1,
t.CLI_CONTATO1,
t.CLI_TEL_CONFIRMACAO2,
t.CLI_CONTATO2,
t.CLI_TEL_CONFIRMACAO3,
t.CLI_CONTATO3,
t.CLI_OBSERVACAO
FROM cliente t, pessoa_fisica pf
WHERE t.CLI_CODIGO = ".$codpess."
AND t.CLI_COD_PESSOA = pf.PEF_CODIGO
AND t.CLI_PESSOA = \'pf\'

UNION ALL
SELECT t.CLI_CODIGO codigo,
pj.PEJ_RAZAO_SOCIAL nome, 
pj.PEJ_CNPJ doc,
t.CLI_ID id,
t.CLI_PESSOA pessoa,
pj.PEJ_IMAGEM imagem,
pj.PEJ_CNPJ sexo,
t.CLI_COMPRADOR,
t.CLI_EMPREGO,
t.CLI_RENDA,
t.CLI_LIMITE,
t.CLI_TEL_CONFIRMACAO1,
t.CLI_CONTATO1,
t.CLI_TEL_CONFIRMACAO2,
t.CLI_CONTATO2,
t.CLI_TEL_CONFIRMACAO3,
t.CLI_CONTATO3,
t.CLI_OBSERVACAO

FROM cliente t, pessoa_juridica pj
WHERE t.CLI_CODIGO = ".$codpess."
AND t.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND t.CLI_PESSOA = \'pj\'


			
';
	


	foreach (\$conn->query(\$sqldados) as \$row) 
	{



if(@\$row['pessoa'] == 'pf')	
{
	?>




<tr><td>


<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['id'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"gdp/pessoafisica/img/<?php 
if(\$row['imagem'] == '')
{
	if(\$row['sexo'] == 1)
	{
		echo \"masculino.jpg\";
	}
	elseif(\$row['sexo'] == 2)
	{
		echo \"feminino.jpg\";
	}
	elseif(\$row['sexo'] == 3)
	{
		echo \"outros.jpg\";
	}
}
else
{
	echo \$row['imagem'];
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
		<?php print classcad2pc::moeda(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classcad2pc::databr(\$row['".$cadt[$y]."']); ?></td>
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
		
		
		</table>	

		</div>
		
		
			
		
		
		
<!-- Modal -->
  <div class=\"modal fade\" id=\"".$subdir."img<?php 	echo 	\$row['id'];?>\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
	
	  <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
        </div>
        <div class=\"modal-body\">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src=\"gdp/pessoafisica/img/<?php 
if(\$row['imagem'] == '')
{
	if(\$row['sexo'] == 1)
	{
		echo \"masculino.jpg\";
	}
	elseif(\$row['sexo'] == 2)
	{
		echo \"feminino.jpg\";
	}
	elseif(\$row['sexo'] == 3)
	{
		echo \"outros.jpg\";
	}
}
else
{
	echo \$row['imagem'];
}
?>\">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>




<hr>
	
	<?php
}	
else
{
	

?>	

<tr><td>


<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['id'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"gdp/pessoajuridica/img/<?php 
if(\$row['imagem'] == '')
{
		echo \"empresa.jpg\";
}
else
{
	echo \$row['imagem'];
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
		<?php print classcad2pc::moeda(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classcad2pc::databr(\$row['".$cadt[$y]."']); ?></td>
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
		
		
		</table>	

		</div>
		
		
			
		
		
		
<!-- Modal -->
  <div class=\"modal fade\" id=\"".$subdir."img<?php 	echo 	\$row['id'];?>\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
	
	  <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
        </div>
        <div class=\"modal-body\">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src=\"gdp/pessoajuridica/img/<?php 
if(\$row['imagem'] == '')
{
		echo \"empresa.jpg\";
}
else
{
	echo \$row['imagem'];
}
?>\">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>

		
<?php
}
	}

?>		
	
	
";


	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class