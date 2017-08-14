


	<?php

require_once('raiz/arq/conecta2.php'); 


$codfor = @$_REQUEST['codfor'];

$vendfor = @$_REQUEST['vendfor'];

$limite = @$_REQUEST['limite'];












if($codfor == '' && $vendfor == '' && $limite == '' )
{
	$tab = " SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'

UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'

	"
	
			;
}
elseif($codfor == '' && $vendfor == '')
{
	$tab = "
	



SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'
AND p.PRO_AB_DESCRICAO  LIKE '%".$limite."%' 

UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'
AND p.PRO_AB_DESCRICAO  LIKE '%".$limite."%' 



"
;
	
}
elseif($codfor == '' && $limite == '')
{
	$tab = 
"	
	


SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'
AND p.PRO_CODIGO LIKE '%".$vendfor."%'


UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'
AND p.PRO_CODIGO LIKE '%".$vendfor."%'






 

	"
	
;
	
}
elseif( $vendfor == '' && $limite == '')
{

$tab = 
"




SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'
HAVING material LIKE '%".$codfor."%'



UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'
HAVING material LIKE '%".$codfor."%'









"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
<td><b>Tip. Prod.</b></td>

<td><b>Código</b></td>

<td><b>Nota</b></td>

<td><b>ID Item</b></td>

<td><b>Desc.</b></td>

<td><b>Dt da ent.</b></td>

<td><b>Quant.</b></td>

<td><b>Valor Un</b></td>

<td><b>UN</b></td>

	
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['material'];?> </td>
	<td><a href="index.php?mod=est&bot=tes4&info=<?php echo @$row['id']; ?>&pro=<?php echo @$row['material']; ?>"><?php echo @$row['codpro'];?></a></td>
	
	
<td><?php echo @$row['nota'];?></td>

<td><?php echo @$row['id'];?></td>

<td><?php echo @$row['nome'];?></td>

<td><?php classtabela::databr(@$row['datac']);?></td>

<td><?php echo @$row['quant'];?></td>

<td><?php classtabela::moeda(@$row['valor']);?></td>

<td><?php echo @$row['un'];?></td>

		
	
<?php
if($row['material'] == "P.A.")
{	?>
	<td><a data-toggle="modal" data-target="#saidaaltpa<?php echo @$row['id']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
<?php
}
else	
{

?>	<td><a data-toggle="modal" data-target="#saidaaltmc<?php echo @$row['id']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
<?php

}	
?>	
	
	
	
	
	
	
<?php

if($row['material'] == "P.A.")
require('estoque/saida/saidaformaltpa.php');
else
require('estoque/saida/saidaformaltmc.php');

?>	
	
	</td>
	 
	
	</tr>	
  
	
	
	
	
	

	
	
	
<?php

	}
?>
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


