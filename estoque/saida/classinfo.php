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

		
function info($dir, $tes, $subdir, $titulo, $colunainfo)
{



$fp = fopen("estoque/saida/tmp/info.php", "w+");



$escrever = "<?php 

require_once('raiz/arq/conecta2.php'); 

\$id = \$_REQUEST['info'];
\$pro = \$_REQUEST['pro'];



if(\$pro == 'P.A.')
{

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

			SELECT  ip.IPA_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ip.IPA_QUANTIDADE quant, ip.IPA_PRECOUN valor,
FORMAT((ip.IPA_QUANTIDADE * ip.IPA_PRECOUN), 2) AS total,
ep.EPA_NOTA nota, ep.EPA_CH_NFE nfe

FROM itenspa ip , entradapa ep, produto p
WHERE ip.IPA_ENTRADAPA = ep.EPA_ID
AND ip.IPA_PRODUTO = p.PRO_ID
AND ip.IPA_ID =  '.\$id.'
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
		<?php print classinfo::moeda(\$row['".$cadt[$y]."']); ?></td>
		";	
		}
		elseif(@$cadt[2] == 'data')
		{
		$escrever .= "<td class=tabinfo2>
		<?php print classinfo::databr(\$row['".$cadt[$y]."']); ?></td>
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

		
		
		
			
		

		
		
		
<div class=\"label5\">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align=\"right\"> 
	<form action=\"estoque/".$subdir."/relatorios/info.php\" method=\"post\" target=\"_blank\">
		<input type=\"hidden\" name=\"id\" value=\"<?php echo \$id; ?>\">
		<input type=\"hidden\" name=\"pro\" value=\"<?php echo \$pro; ?>\">
		
		
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
			<form action=\"estoque/".$subdir."/".$subdir."infodireciona.php\">
			<div class=\"modal-footer\">
				<button type=\"submit\" class=\"btn btn-default\">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>

";

$escrever .= "

<?php 
}
elseif(\$pro == 'M.C.')
{

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

			SELECT  ic.IMC_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ic.IMC_QUANTIDADE quant, ic.IMC_PRECOUN valor,
FORMAT((ic.IMC_QUANTIDADE * ic.IMC_PRECOUN), 2) AS total,
em.MCA_NOTA nota, em.MCA_CH_NFE nfe

FROM itensmc ic, entradamc em, produto p
WHERE ic.IMC_ENTRADAPA = em.MCA_ID
AND ic.IMC_PRODUTO = p.PRO_ID
AND ic.IMC_ID =  '.\$id.'
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

		
		
		
			
		

		
		
		
<div class=\"label5\">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align=\"right\"> 
	<form action=\"estoque/".$subdir."/relatorios/info.php\" method=\"post\" target=\"_blank\">
		<input type=\"hidden\" name=\"id\" value=\"<?php echo \$id; ?>\">
		<input type=\"hidden\" name=\"pro\" value=\"<?php echo \$pro; ?>\">
		
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
			<form action=\"estoque/".$subdir."/".$subdir."infodireciona.php\">
			<div class=\"modal-footer\">
				<button type=\"submit\" class=\"btn btn-default\">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>




<?php 
}

?>


";

	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class