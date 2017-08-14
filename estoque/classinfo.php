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

		
function info($sig, $dir, $tes, $subdir, $tabela, $titulo, $colunainfo)
{



$fp = fopen("estoque/tmp/info.php", "w+");



$escrever = "<?php 

require_once('raiz/arq/conecta2.php'); 

\$id = \$_REQUEST['info'];





?>

<article style=\"padding-bottom: 280%\">












<div class=\"label5\">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados da ".$titulo."</h4>
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
			FROM ".$tabela." c
			WHERE c.".$sig."CODIGO = '.\$id.'
';




	foreach (\$conn->query(\$sqldados) as \$row) 
	{



	
	
?>	

<tr><td>


<center> <a data-toggle=\"modal\" data-target=\"#".$subdir."img<?php 	echo \$row['".$sig."ID'];?>\"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src=\"estoque/".$subdir."/img/<?php 
if(\$row['".$sig."IMAGEM'] == '')
{
		echo \"empresa.jpg\";
}
else
{
	echo \$row['".$sig."IMAGEM'];
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
	
	
	<img class=perfilimg src=\"estoque/".$subdir."/img/<?php 
if(\$row['".$sig."IMAGEM'] == '')
{
		echo \"empresa.jpg\";
}
else
{
	echo \$row['".$sig."IMAGEM'];
}
?>\">

</center>

	
		</div>  
	
</center>
<form enctype=\"multipart/form-data\" action=\"estoque/".$subdir."/".$subdir."altfot.php\" method=\"post\">

<table width=100%>
		<tr>
			<td align=right width=50%>
			<label for=\"password\">Foto: </label>
			</td>
			<td width=50%>
			<label class=\"btn btn-default btn-file\">
				Carregar... <input type=\"file\" name=\"file\">
			</label>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			<td align=left width=50%> 
					<button type=\"submit\" class=\"btn btn-default\">Alterar</button>
				
			</td>
		</tr>
		
		     
		
</table>
<input type=\"hidden\" name=\"idfoto\" value=\"<?php echo \$row['".$sig."ID']; ?>\">
</form>	  

		  
		  
		  
        
</div></div>
			
		
      </div>

		
		
		
<div class=\"label5\">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align=\"right\"> 
	<form action=\"".$dir."/".$subdir."/relatorios/info.php\" method=\"post\" target=\"_blank\">
		<input type=\"hidden\" name=\"id\" value=\"<?php echo \$id; ?>\">
		
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