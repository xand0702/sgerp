<?php





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

		
function info($sig, $sigf, $sigj, $dir, $tes, $subdir, $titulo, $colunainfo, $colunainfopf, $colunainfopj, $sqlinfo)
{



$fp = fopen("gdp/tmp/info.php", "w+");



$escrever = "<?php 

require_once('raiz/arq/conecta2.php'); 

\$id = \$_REQUEST['info'];
\$tpess = \$_REQUEST['tpess'];
\$codpess = \$_REQUEST['codpess'];





?>


<article style=\"padding-bottom: 280%\">


<div class=\"label4\"> Informação do ".$titulo." </div>


<div class=\"label2\"> 


<?php 


if(\$tpess == 'pf')
	
	{


\$sql = '";



$escrever .= $sqlinfo[0];
$escrever .= "


';






	foreach (\$conn->query(\$sql) as \$row) 
	{
?>

<table border=0 valign=top width=100%>
		<tr>
			<td align=center colspan=2>
			<h4>Dados da Pessoa Física</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
	";


$contador = 4;

for($i = 0; $i < $contador; $i++)
{
$cont = count($colunainfopf[0]);
$cont = $cont - 1;
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunainfopf[$i][$x];
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
		<?php  classinfo::moeda(\$row['".$sigf.$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php  classinfo::databr(\$row['".$sigf.$cadt[$y]."']); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$sigf.$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}


$escrever .= "
	
	
	
</table>



</div>

<div class=\"label3\">


<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['".$sigf."ID'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"".$dir."/pessoafisica/img/<?php 
if(\$row['".$sigf."IMAGEM'] == '')
{
	if(\$row['".$sigf."SEXO'] == 1)
	{
		echo \"masculino.jpg\";
	}
	elseif(\$row['".$sigf."SEXO'] == 2)
	{
		echo \"feminino.jpg\";
	}
	elseif(\$row['".$sigf."SEXO'] == 3)
	{
		echo \"outros.jpg\";
	}
}
else
{
	echo \$row['".$sigf."IMAGEM'];
}
?>\">

</td></tr></table>


 </a></center>


</div>
<div class=\"fomrat008\"> 
<table border=0 valign=top width=100%>
";



$contador = count($colunainfopf);

for($i = 4; $i < $contador; $i++)
{
$cont = count($colunainfopf[0]);

	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunainfopf[$i][$x];
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
		<?php print classinfo::moeda(\$row['".$sigf.$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php classinfo::databr(\$row['".$sigf.$cadt[$y]."']); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$sigf.$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}
	
	
	
	
	
	
	
$escrever .= "	
	
	<tr>
		<td width=50%><label>Sexo: </label></td>
		
		<?php 
		
		
		
\$sexo = \$row['".$sigf."SEXO'];
		
\$sqlsexo = 'SELECT *
FROM sexo
WHERE SEX_ID = '.\$sexo.'';";
$escrever .= "







	foreach (\$conn->query(\$sqlsexo) as \$rowsexo) 
	{
		
			\$siglasexo = \$rowsexo['SEX_NOME'];
		
	}	
		
if(\$siglasexo == 'F')
	\$sexonome = \"Feminino\";
	elseif(\$siglasexo == 'M')
	{
		\$sexonome = \"Masculino\";
	}
elseif((\$siglasexo == 'O'))
	{
		\$sexonome = \"outros\";
	}
		
		
		
		
		
		?>
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo \$sexonome; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado Civil: </label></td>
		
		
		
		
		
<?php 
		
		
\$estadocivil = \$row['".$sigf."ESTADO_CIVIL'];
		
\$sqlestadocivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.\$estadocivil.'


';";

$escrever .= "

	foreach (\$conn->query(\$sqlestadocivil) as \$rowestadocivil) 
	{
		
			\$nomecestadocivil = \$rowestadocivil['CIV_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode(\$nomecestadocivil); ?> </td>
	</tr>	
	
</table>

	<?php 
	
	}
	
	?>

</div>



<!-- Modal -->
  <div class=\"modal fade\" id=\"".$subdir."img<?php 	echo \$row['".$sigf."ID'];?>\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
	
	  <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
        </div>
        <div class=\"modal-body\">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src=\"".$dir."/pessoafisica/img/<?php 
if(\$row['".$sigf."IMAGEM'] == '')
{
	if(\$row['".$sigf."SEXO'] == 1)
	{
		echo \"masculino.jpg\";
	}
	else
	{
		echo \"feminino.jpg\";
	}
}
else
{
	echo \$row['".$sigf."IMAGEM'];
}
?>\">

</center>

	
		</div>  
		  

		  
		  
		  
        
</div></div>
	


		
		
      </div>
	

<?php 



	}
	elseif(\$tpess == 'pj')
	{


\$sqlpj = '";



$escrever .= @$sqlinfo[1];
$escrever .= "


';







	foreach (\$conn->query(\$sqlpj) as \$row) 
	{
?>

<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
			<h4>Dados da Pessoa Jurídica</h4>
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>		
	</tr>
	
	
	";


$contador = 6;

for($i = 0; $i < $contador; $i++)
{
$cont = count($colunainfopj[0]);
$cont = $cont - 1;
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunainfopj[$i][$x];
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
		<?php print classinfo::moeda(\$row['".$sigj.$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$sigj.$cadt[$y]."']); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$sigj.$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}


$escrever .= "
	
	
</table>



</div>
<div class=\"label3\">












<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['".$sigj."ID'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"".$dir."/pessoajuridica/img/<?php 
if(\$row['".$sigj."IMAGEM'] == '')
{

		echo \"empresa.jpg\";

}
else
{
	echo \$row['".$sigj."IMAGEM'];
}
?>\">

</td></tr></table>


</a></center>







";



$escrever .= "





</div>

<div class=\"fomrat008\"> 

<br><br>
<table border=0 valign=top width=100%>






	";


$contador = count($colunainfopj);

for($i = 6; $i < $contador; $i++)
{
$cont = count($colunainfopj[0]);
$cont = $cont - 1;
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunainfopj[$i][$x];
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
		<?php print classinfo::moeda(\$row['".$sigj.$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$sigj.$cadt[$y]."']); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$sigj.$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}


$escrever .= "


	<tr>
		<td width=50%><label>Segmento: </label></td>
		
		<?php 
		
		
		
\$segmento = \$row['".$sigj."SEGMENTO'];
		
\$sqlsegmento = 'SELECT *
FROM segmento
WHERE SEG_ID = '.\$segmento.'


';






	foreach (\$conn->query(\$sqlsegmento) as \$rowsegmento) 
	{
		
			echo '<td width=50% class=tabinfo3> '.\$rowsegmento['SEG_NOME'].' </td>';
	}	
		
	
		?>
		
	</tr>
	
	
	
	
	<tr>
		<td width=50%><label>Porte: </label></td>
		
		<?php 
		
		
		
\$porte = \$row['".$sigj."PORTE'];
		
\$sqlporte = 'SELECT *
FROM porte
WHERE POR_ID = '.\$porte.'


';






	foreach (\$conn->query(\$sqlporte) as \$rowporte) 
	{
		
			echo '<td width=50% class=tabinfo3> '.utf8_encode(\$rowporte['POR_NOME']).' </td>';
	}	
		
	
		?>
		
	</tr>	<tr>
		<td width=50%><label>Tipo de Empresa: </label></td>
		
		<?php 
		
		
		
\$tipo = \$row['".$sigj."TIPO'];
		
\$sqltipo = 'SELECT *
FROM tipo_emp
WHERE TIP_ID = '.\$tipo.'


';






	foreach (\$conn->query(\$sqltipo) as \$rowtipo) 
	{
		
			echo '<td width=50% class=tabinfo3> '.\$rowtipo['TIP_NOME'].' </td>';
	}	
		
	
		?>
		
	</tr>





	
	
	
	
	
	
	
	
	

	
	
	
</table>


	

</div>


<!-- Modal -->
  <div class=\"modal fade\" id=\"".$subdir."img<?php 	echo \$row['".$sigj."ID'];?>\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
	
	  <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        
        </div>
        <div class=\"modal-body\">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src=\"".$dir."/pessoajuridica/img/<?php 
if(\$row['".$sigj."IMAGEM'] == '')
{
		echo \"empresa.jpg\";

}
else
{
	echo \$row['".$sigj."IMAGEM'];
}
?>\">





  	</div></div></div></div>

	
	
	
	<?php 
	
	}
	
	?>
	
	
	

	
<?php

	}

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
			FROM ".$subdir." c
			WHERE c.".$sig."ID = '.\$id.'
';




	foreach (\$conn->query(\$sqldados) as \$row) 
	{




?>	


";


$contador = count($colunainfo);

for($i = 0; $i < $contador; $i++)
{
$cont = count($colunainfo[0]);
$cont = $cont - 1;
	
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
		<?php print classinfo::moeda(\$row['".$sig.$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$sig.$cadt[$y]."']); ?></td>
		";	
		}
		else
		{
		$escrever .= "<td class=tabinfo2>
		<?php print \$row['".$sig.$cadt[$y]."']; ?></td>
		";	
		}
	
	$escrever .= "</tr>
	";
}


$escrever .= "
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo \" \".\$row['".$sig."OBSERVACAO']; ?>
			</td>
		</tr>


<?php 

	}
?>
		
		</table>	

<div class=\"label5\">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align=\"right\"> 
	<form action=\"".$dir."/".$subdir."/relatorios/info.php\" method=\"post\" target=\"_blank\">
		<input type=\"hidden\" name=\"id\" value=\"<?php echo \$id; ?>\">
		<input type=\"hidden\" name=\"codpess\" value=\"<?php echo \$codpess; ?>\">
		<input type=\"hidden\" name=\"tpess\" value=\"<?php echo \$tpess; ?>\">
		
		<input type=\"submit\" class=\"btn btn-default\" value=\"Imprimir\">
	</form>
		</td>
	</tr>
	
	
	
	

	
	
	
	<tr>
		<td width=50%>
			<div class=\"modal-footer\">
				<button style=\"visibility: hidden;\" type=\"submit\" class=\"btn btn-default\">Fechar</button>
			</div>
		</td>
		<td width=50%> 
			<form action=\"".$dir."/".$subdir."/".$subdir."infodireciona.php\">
			<div class=\"modal-footer\">
				<button type=\"submit\" class=\"btn btn-default\">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>

";


	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class