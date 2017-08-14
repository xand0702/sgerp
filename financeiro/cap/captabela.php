	<?php

require_once('raiz/arq/conecta2.php'); 


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
		
		function moeda($val)
		{
			if($val == '')
			{
				echo " - ";
			}
			else
			{
				$md = number_format($val, 2, ',', ' ');
				$md = "R$".$md;
				echo $md;
			
			}
		
		}



$codigopes = @$_REQUEST['codpes'];
$nomepes = @$_REQUEST['nompes'];
$cpfpes = @$_REQUEST['cpfpes'];


/*
echo '*******'.$codigopes.'******';

echo '********'.$nomepes.'*****';

echo '*******'.$cpfpes.'******';
*/


if($codigopes == '' && $nomepes == '' && $cpfpes == '' )
{
	$tab = "
	
SELECT ct.CAP_ID idct,
ct.CAP_DESCRICAO descr,
ct.CAP_CREDOR credor,
ct.CAP_DOCUMENTO doc,
ct.CAP_VALOR valor,
ct.CAP_N_P np,
ct.CAP_T_P tp,
ct.CAP_DT_VEN dtven,
ct.CAP_PAGO pago,
ct.CAP_VL_PAGO vlpago,
ct.CAP_DT_PAGO dtpago,
ct.CAP_OBSERVACAO obs
FROM contap ct	
	
	";
}
elseif($cpfpes == '' && $nomepes == '')
{
	$tab = "
	
	
	
SELECT ct.CAP_ID idct,
ct.CAP_DESCRICAO descr,
ct.CAP_CREDOR credor,
ct.CAP_DOCUMENTO doc,
ct.CAP_VALOR valor,
ct.CAP_N_P np,
ct.CAP_T_P tp,
ct.CAP_DT_VEN dtven,
ct.CAP_PAGO pago,
ct.CAP_VL_PAGO vlpago,
ct.CAP_DT_PAGO dtpago,
ct.CAP_OBSERVACAO obs
FROM contap ct	
WHERE ct.CAP_ID LIKE '%".$codigopes."%'";
	
}
elseif($cpfpes == '' && $codigopes == '')
{
	$tab = "
	
	
	
	
	
SELECT ct.CAP_ID idct,
ct.CAP_DESCRICAO descr,
ct.CAP_CREDOR credor,
ct.CAP_DOCUMENTO doc,
ct.CAP_VALOR valor,
ct.CAP_N_P np,
ct.CAP_T_P tp,
ct.CAP_DT_VEN dtven,
ct.CAP_PAGO pago,
ct.CAP_VL_PAGO vlpago,
ct.CAP_DT_PAGO dtpago,
ct.CAP_OBSERVACAO obs
FROM contap ct	
WHERE ct.CAP_DESCRICAO LIKE '%".$nomepes."%'";
	
}
elseif( $codigopes == '' && $nomepes == '')
{

$tab = "




SELECT ct.CAP_ID idct,
ct.CAP_DESCRICAO descr,
ct.CAP_CREDOR credor,
ct.CAP_DOCUMENTO doc,
ct.CAP_VALOR valor,
ct.CAP_N_P np,
ct.CAP_T_P tp,
ct.CAP_DT_VEN dtven,
ct.CAP_PAGO pago,
ct.CAP_VL_PAGO vlpago,
ct.CAP_DT_PAGO dtpago,
ct.CAP_OBSERVACAO obs
FROM contap ct	
WHERE ct.CAP_CREDOR LIKE '%".$cpfpes."%'";

}

?>



























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>ID</b></td>
	<td><b>Descrição</b></td>
	<td><b>Credor</b> </td>
	<td><b>Parcela</b></td>
	<td><b>P. Nº</b></td>
	<td><b>T. P.</b></td>
	<td><b>Venc.</b></td>
	<td><b>PAGO</b></td>
	<td><b>Vl. PAGO</b></td>
	<td><b>Dt. PAGO</b></td>
	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['idct'];


?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['idct'];?> </td>
	<td><?php echo @$row['descr'];?></td>
	<td><?php echo @$row['credor'];?></td>
	<td><?php echo moeda($row['valor']);?></td>
	<td><?php echo @$row['np'];?></td>
	<td><?php echo @$row['tp'];?></td>
	<td><?php echo databr(@$row['dtven']);?></td>
	<td><?php echo @$row['pago'];?></td>
	<td><?php echo moeda(@$row['vlpago']);?></td>
	<td><?php echo databr(@$row['dtpago']);?></td>
	
	<td><a data-toggle="modal" data-target="#capalt<?php echo @$row['idct']; ?>">









  
  
  
  
  
  
  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php


require('capformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=fin&bot=tes2&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>