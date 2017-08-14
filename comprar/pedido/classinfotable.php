<?php


class classinfotable



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

		
function infotable($com, $dir, $tes, $subdir, $titulo, $colunainfot)
{



$fp = fopen("".$dir."/".$subdir."/tmp/info.php", "a+");



$escrever = " 		<br><br>
		<div class=\"label5\">	
<table border=1 valign=top width=100%>

			
<?php

if(\$pro == 'sv')
{

\$sqldados = '

			

			
			
SELECT pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 

p.PED_ID,
pj.PEJ_RAZAO_SOCIAL nome



FROM pedido p, pedidoitens pit, fornecedor f, 
pessoa_juridica pj, tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO OR pit.PDI_PROD_DESC LIKE \"%%\") 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pj.PEJ_CODIGO
AND p.PED_ID =  '.\$id.'
GROUP BY id

UNION ALL

SELECT pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 
p.PED_ID,
pf.PEF_NOME nome

FROM pedido p, pedidoitens pit, fornecedor f, pessoa_fisica pf,
tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID
AND p.PED_ID =  '.\$id.'

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO OR pit.PDI_PROD_DESC LIKE \"%%\") 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pf.PEF_CODIGO
GROUP BY id
			
			
			









';
}
else
{
	
	
\$sqldados = '

			

			
			
SELECT pr.PRO_AB_DESCRICAO des, pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 

p.PED_ID,
pj.PEJ_RAZAO_SOCIAL nome



FROM pedido p, pedidoitens pit, fornecedor f, 
pessoa_juridica pj, tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO) 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pj.PEJ_CODIGO
AND p.PED_ID =  '.\$id.'
GROUP BY id

UNION ALL

SELECT pr.PRO_AB_DESCRICAO des, pit.PDI_ID id, pit.PDI_TIPO, pit.PDI_FOR_TER, pit.PDI_PROD_DESC,
pit.PDI_QUANT_TEMP, PDI_VALOR, 
p.PED_ID,
pf.PEF_NOME nome

FROM pedido p, pedidoitens pit, fornecedor f, pessoa_fisica pf,
tercerizados t, produto pr
WHERE pit.PDI_PED_ID = p.PED_ID
AND p.PED_ID =  '.\$id.'

AND (pit.PDI_PROD_DESC = pr.PRO_CODIGO) 
AND (pit.PDI_FOR_TER = f.FOR_CODIGO AND pit.PDI_FOR_TER = t.TER_CODIGO)
AND t.TER_COD_PESSOA = pf.PEF_CODIGO
GROUP BY id
			
			
			









';
	
	
}


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
		

?>	


";

$escrever .= "
</tr>

<tr>
";

$contador = count($colunainfot);

for($i = 0; $i < $contador; $i++)
{
$escrever .= "	
	
		<td class=tabinfo1><?php echo \$row['".$colunainfot[$i]."']; ?> </td>
	
	";
}


$escrever .= "
		</tr>
	

<?php 

	}
?>
		
		</table>	

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
			<form action=\"".$dir."/".$subdir."/".$subdir."infodireciona.php\">
			<div class=\"modal-footer\">
				<button type=\"submit\" class=\"btn btn-default\">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>

</div>
</article>

";

	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função 		
			
			
			
} //fim class