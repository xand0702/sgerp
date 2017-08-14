


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];






		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}








if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " SELECT *
FROM entradamc e

	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	
SELECT *
FROM entradamc e
WHERE e.MCA_PEDIDO  LIKE '%".$limite."%' 
"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	SELECT *
FROM entradamc e
WHERE e.MCA_NOTA LIKE '%".$vendfor."%' 

	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"
SELECT *
FROM entradamc e
WHERE e.MCA_CODIGO LIKE '%".$codfor."%' 


"
;

}


?>


























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>Código</b></td>

<td><b>Nota</b></td>

<td><b>Pedido</b></td>

<td><b>Data da entrada</b></td>

<td><b>Hora da entrada</b></td>

	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		

?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['MCA_CODIGO'];?> </td>
	<td><a href="index.php?mod=est&bot=tes3&info=<?php echo @$row['MCA_CODIGO']; ?>"><?php echo @$row['MCA_NOTA'];?></a></td>
	
	
<td><?php echo @$row['MCA_PEDIDO'];?></td>

<td><?php classtabela::databr(@$row['MCA_DATA_CADASTRO']);?></td>

<td><?php echo @$row['MCA_HORA_CADASTRO'];?></td>

		
	
	
	<td><a data-toggle="modal" data-target="#mcaalt<?php echo @$row['MCA_CODIGO']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('estoque/mca/mcaformalt.php');


?>	
	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=est&bot=tes3&del=<?php echo @$row['MCA_ID']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>



