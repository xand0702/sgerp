


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];












if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " 

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO



	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	


SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND v.VEN_DATA_CADASTRO  = '".$limite."' 

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND v.VEN_DATA_CADASTRO  = '".$limite."' 



"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	

SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND c.CLI_CODIGO LIKE '%".$vendfor."%'

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND c.CLI_CODIGO LIKE '%".$vendfor."%'


	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"


SELECT v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pf.PEF_NOME nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND v.VEN_CODIGO LIKE '%".$codfor."%'

UNION ALL

SELECT  v.VEN_ID id,
v.VEN_CODIGO nota, 
c.CLI_CODIGO codcli,
c.CLI_PESSOA pessoa,
pj.PEJ_RAZAO_SOCIAL nome,
v.VEN_F_PGMT fpgmt,
v.VEN_M_PGMT mpgmt,
v.VEN_VL_GASTO vlnota,
v.VEN_VL_PARCELADO vlpagar,
v.VEN_VL_BRUTO vlpago,
v.VEN_TRANSP trnp,
v.VEN_DATA_CADASTRO dtems

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND v.VEN_CODIGO LIKE '%".$codfor."%'




"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>Data Emissão</b></td>

<td><b>Nota</b></td>

<td><b>Cód. Cli.</b></td>

<td><b>Cliente</b></td>

<td><b>Vl. Nota</b></td>

<td><b>Pagamento</b></td>

<td><b>F. Pagm.</b></td>

<td><b>Vl. à Pagar</b></td>

<td><b>Vl. Pago</b></td>

	
	
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo classtabela::databr(@$row['dtems']);?> </td>
	<td><a href="index.php?mod=ven&bot=tes1&info=<?php echo @$row['id']; ?>&pro=<?php echo @$row['pessoa']; ?>"><?php echo @$row['nota'];?></a></td>
	
	
<td><?php echo @$row['codcli'];?></td>

<td><?php echo @$row['nome'];?></td>

<td><?php classtabela::moeda(@$row['vlnota']);?></td>

<td><?php echo @$row['fpgmt'];?></td>

<td><?php echo @$row['mpgmt'];?></td>

<td><?php classtabela::moeda(@$row['vlpagar']);?></td>

<td><?php classtabela::moeda(@$row['vlpago']);?></td>

		
	
	
</td>
	 
	<td><a href="index.php?mod=ven&bot=tes1&del=<?php echo @$row['id']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	
	
	
	
		
	</tr>	
  
	
	
	
	
	
	
	
	
<?php

	}
?>
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


