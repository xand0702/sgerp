


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$findfor = @$_REQUEST['findfor'];

$limite = @$_REQUEST['limite'];












if($codfor == '' && $findfor == '' && $limite == '' )
{
	$tab = " 

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pj'

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pf'



	"
	
			;
}
elseif($codfor == '' && $findfor == '')
{
	$tab = "
	







SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pj'
AND pj.PEJ_RAZAO_SOCIAL  LIKE '%".$limite."%' 

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pf'
AND pf.PEF_NOME  LIKE '%".$limite."%' 



"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	



SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pj'
AND c.CLI_CODIGO LIKE '%".$findfor."%'
UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pf'
AND c.CLI_CODIGO LIKE '%".$findfor."%'


	"
	
;
	
}
elseif( $findfor == '' && $limite == '')
{

$tab = 
"




SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pj.PEJ_RAZAO_SOCIAL nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_juridica pj
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pj.PEJ_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pj'
AND vp.VNG_ID LIKE '%".$codfor."%'

UNION ALL

SELECT vp.VNG_ID idpar,
v.VEN_CODIGO nota,
c.CLI_CODIGO clicod,
pf.PEF_NOME nome,
vp.VNG_VL_PAR vlpar,
vp.VNG_DT_PGMT dtpgmt,
vp.VNG_PAGO pago,
vp.VNG_DT_PAGO dtpago,
vp.VNG_VL_PAGO vlpago
FROM vendas v, 
venpgmt vp, 
cliente c,
pessoa_fisica pf
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND c.CLI_ID = v.VEN_ID_CLI
AND pf.PEF_CODIGO = c.CLI_COD_PESSOA
AND c.CLI_PESSOA = 'pf'
AND vp.VNG_ID LIKE '%".$codfor."%'




"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>ID Parcela</b></td>

<td><b>Cód. Cli.</b></td>

<td><b>Cliente</b></td>

<td><b>Vl. Parcela</b></td>

<td><b>Dt. Pagamento</b></td>

<td><b>PAGO</b></td>

<td><b>Dt. Pago</b></td>

<td><b>Vl. Pago</b></td>

	
	
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	
<td><?php echo @$row['idpar'];?></td>

<td><?php echo @$row['clicod'];?></td>

<td><?php echo @$row['nome'];?></td>

<td><?php classtabela::moeda(@$row['vlpar']);?></td>

<td><?php classtabela::databr(@$row['dtpgmt']);?></td>

<td><?php echo @$row['pago'];?></td>

<td><?php classtabela::databr(@$row['dtpago']);?></td>

<td><?php classtabela::moeda(@$row['vlpago']);?></td>

		
	
	
	<td><a data-toggle="modal" data-target="#crealt<?php echo @$row['idpar']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require('financeiro/cre/creformalt.php');


?>	
	
	
	
	
	
		
	</tr>	
  
	
	
	
	
	
	
	
	
<?php

	}
?>
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


