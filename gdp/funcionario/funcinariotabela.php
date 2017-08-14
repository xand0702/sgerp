	<?php

require_once('raiz/arq/conecta2.php'); 

$codfun = @$_POST['codfun'];
$pisfun = @$_POST['pisfun'];
$setfun = @$_POST['setfun'];


/*
echo '*******'.$codfun.'******';

echo '********'.$pisfun.'*****';

echo '*******'.$setfun.'******';
*/


if($codfun == '' && $pisfun == '' && $setfun == '' )
{
	$tab = "SELECT *
			FROM funcinario f, pessoa_fisica pf
			WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
			ORDER BY F.FUN_CODIGO";
}
elseif($setfun == '' && $pisfun == '')
{
	$tab = "SELECT *
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_CODIGO LIKE '%".$codfun."%'
AND f.FUN_COD_PEF = pf.PEF_CODIGO";
	
}
elseif($setfun == '' && $codfun == '')
{
	$tab = "SELECT *
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_PIS LIKE '%".$pisfun."%'
AND f.FUN_COD_PEF = pf.PEF_CODIGO";
	
}
elseif( $codfun == '' && $pisfun == '')
{

$tab = "SELECT *
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_SETOR LIKE '%".$setfun."%'
AND f.FUN_COD_PEF = pf.PEF_CODIGO";

}


?>


























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Nome</b> </td>
	<td><b>Setor</b> </td>
	<td><b>Situação</b></td>
	<td><b>PIS</b></td>
	
	<td><b>Login</b></td>
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['FUN_ID'];



if($row['FUN_SITUACAO'] == 1)
	$sit = "Ativo";
else
	$sit = "Desligado";



?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['FUN_CODIGO'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes3&info=<?php echo @$row['FUN_ID']; ?>"><?php echo @$row['PEF_NOME'];?></a></td>
	<td><?php echo @$row['FUN_SETOR'];?></td>
	<td><?php echo @$sit;?></td>
	<td><?php echo @$row['FUN_PIS'];?></td>
	
	
	<td><a data-toggle="modal" data-target="#funcinarioaltlogin<?php echo @$row['FUN_ID']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('funcinarioformlogin.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	
	
	<td><a data-toggle="modal" data-target="#funcinarioalt<?php echo @$row['FUN_ID']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('funcinarioformalt.php');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes3&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>