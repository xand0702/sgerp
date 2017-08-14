	<?php

require_once('raiz/arq/conecta2.php'); 






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
	$tab = "SELECT *
FROM produto";
}
elseif($cpfpes == '' && $nomepes == '')
{
	$tab = "SELECT *
FROM produto ps
WHERE ps.PRO_CODIGO LIKE '%".$codigopes."%'";
	
}
elseif($cpfpes == '' && $codigopes == '')
{
	$tab = "SELECT *
FROM produto ps
WHERE ps.PRO_AB_DESCRICAO LIKE '%".$nomepes."%'";
	
}
elseif( $codigopes == '' && $nomepes == '')
{

$tab = "SELECT *
FROM produto ps
WHERE ps.PRO_FABRICANTE LIKE '%".$cpfpes."%'";

}

?>



























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Descrição</b> </td>
	<td><b>Fabricante</b> </td>
	<td><b>Estoque Crítico </b></td>
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['PRO_ID'];


?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['PRO_CODIGO'];?> </td>
	<td><a href="index.php?mod=est&bot=tes1&info=<?php echo @$row['PRO_ID']; ?>"><?php echo @$row['PRO_AB_DESCRICAO'];?></a></td>
	<td><?php echo @$row['PRO_FABRICANTE'];?></td>
	<td><?php echo @$row['PRO_EST_CRIT'];?></td>
	<td><a data-toggle="modal" data-target="#produtoalt<?php echo @$row['PRO_ID']; ?>">









  
  
  
  
  
  
  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php


require('produtoformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=est&bot=tes1&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>