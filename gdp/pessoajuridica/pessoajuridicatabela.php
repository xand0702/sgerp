	<?php

require_once('raiz/arq/conecta2.php'); 

$codpj = @$_REQUEST['codpj'];
$rspj = @$_REQUEST['rspj'];
$cnpjpj = @$_REQUEST['cnpjpj'];


/*
echo '*******'.$codpj.'******';

echo '********'.$rspj.'*****';

echo '*******'.$cnpjpj.'******';
*/


if($codpj == '' && $rspj == '' && $cnpjpj == '' )
{
	$tab = "SELECT *
FROM pessoa_juridica";
}
elseif($cnpjpj == '' && $rspj == '')
{
	$tab = "SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_CODIGO LIKE '%".$codpj."%'";
	
}
elseif($cnpjpj == '' && $codpj == '')
{
	$tab = "SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_RAZAO_SOCIAL LIKE '%".$rspj."%'";
	
}
elseif( $codpj == '' && $rspj == '')
{

$tab = "SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_CNPJ LIKE '%".$cnpjpj."%'";

}


?>



























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Razão Social</b> </td>
	<td><b>CNPJ</b> </td>
	<td><b>Ins. Est. </b></td>
	<td><b>Telefone </b></td>
	
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['PEJ_ID'];


?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['PEJ_CODIGO'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes2&info=<?php echo @$row['PEJ_ID']; ?>"><?php echo @$row['PEJ_RAZAO_SOCIAL'];?></a></td>
	<td><?php echo @$row['PEJ_CNPJ'];?></td>
	<td><?php echo @$row['PEJ_INS_ESTATUAL'];?></td>
	<td><?php echo @$row['PEJ_TELEFONE1'];?></td>
	
	<td><a data-toggle="modal" data-target="#pessoajuridicaalt<?php echo @$row['PEJ_ID']; ?>">









  
  
  
  
  
  
  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php


require('pessoajuridicaformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes2&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>