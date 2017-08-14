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
FROM pessoa_fisica";
}
elseif($cpfpes == '' && $nomepes == '')
{
	$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_CODIGO LIKE '%".$codigopes."%'";
	
}
elseif($cpfpes == '' && $codigopes == '')
{
	$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_NOME LIKE '%".$nomepes."%'";
	
}
elseif( $codigopes == '' && $nomepes == '')
{

$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_CPF LIKE '%".$cpfpes."%'";

}

?>



























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Nome</b> </td>
	<td><b>Telefone</b> </td>
	<td><b>CPF </b></td>
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['PEF_ID'];


?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['PEF_CODIGO'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes1&info=<?php echo @$row['PEF_ID']; ?>"><?php echo @$row['PEF_NOME'];?></a></td>
	<td><?php echo @$row['PEF_TELEFONE'];?></td>
	<td><?php echo @$row['PEF_CPF'];?></td>
	<td><a data-toggle="modal" data-target="#pessoafisicaalt<?php echo @$row['PEF_ID']; ?>">









  
  
  
  
  
  
  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php


require('pessoafisicaformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes1&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>