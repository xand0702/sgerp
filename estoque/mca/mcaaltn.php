<?php 



require_once('raiz/arq/conecta2.php'); 


$altn = $_REQUEST['altn'];

$sql = "

SELECT e.MCA_CODIGO , e.MCA_NOTA , e.MCA_ID,
e.MCA_PEDIDO ,e.MCA_CONT_FISCO, e.MCA_SERIE, e.MCA_PAGINA,
e.MCA_NAT_OP, e.MCA_CH_NFE, e.MCA_DT_EMISSAO, e.MCA_DT_SAIDA,
e.MCA_HR_SAIDA, 

pf.PEF_NOME nome, pf.PEF_CPF doc, 

f.FOR_COD_PESSOA codfor 
FROM entradapa e, fornecedor f, pessoa_fisica pf 
WHERE e.MCA_COD_PESSOA = f.FOR_CODIGO
AND f.FOR_COD_PESSOA = pf.PEF_CODIGO
AND e.MCA_CODIGO = ".$altn."
GROUP BY e.MCA_CODIGO
UNION ALL
SELECT e.MCA_CODIGO , e.MCA_NOTA , e.MCA_ID,
e.MCA_PEDIDO ,e.MCA_CONT_FISCO, e.MCA_SERIE, e.MCA_PAGINA,
e.MCA_NAT_OP, e.MCA_CH_NFE, e.MCA_DT_EMISSAO, e.MCA_DT_SAIDA,
e.MCA_HR_SAIDA, 

pj.PEJ_RAZAO_SOCIAL nome, pj.PEJ_CNPJ doc,

f.FOR_COD_PESSOA codfor 
FROM entradapa e, fornecedor f, pessoa_juridica pj 
WHERE e.MCA_COD_PESSOA = f.FOR_CODIGO
AND f.FOR_COD_PESSOA = pj.PEJ_CODIGO
AND e.MCA_CODIGO = ".$altn."
GROUP BY e.MCA_CODIGO

";



foreach ($conn->query($sql) as $row) 
{
	$id = $row['MCA_ID'];
	?>
	<article>
	
	<fieldset>
	
	<center>
	<table border="0" cellspacing=5 cellpadding=5>
	
	<tr>
	<td align="center" colspan="2">
	<h4 class="modal-title">Alterar Nota</h4>
	</td>
	</tr>
	
	<tr>
	<td align="center" colspan="2">
	<br>
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Código do Fornecedor: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['codfor']; ?>" class="form-control" disabled>
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Fornecedor: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['nome']; ?>" class="form-control" disabled>
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Documento: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['doc']; ?>" class="form-control" disabled>
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp
	</td>
	<td>
	<a>ALTERAR</a>
	</td>
	</tr>
	
	<tr>
	<td align="center" colspan="2">
	<br>
	</td>
	</tr>
	
	</table>
	
	</center>
	
<form action="mca/mca/mcaalt.php" method="post">	
	<center>
	<table border="0" cellspacing=5 cellpadding=5>
	
	<tr>
	<td align="right">
	<label>Nota: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_NOTA']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Pedido: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_PEDIDO']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Controle do Fisco: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_CONT_FISCO']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Série: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_SERIE']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Página: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_PAGINA']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Natureza da Operação: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_NAT_OP']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>NFE: </label>
	</td>
	<td>
	<input type="text" value="<?php echo $row['MCA_CH_NFE']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Data Emissão: </label>
	</td>
	<td>
	<input type="date" value="<?php echo $row['MCA_DT_EMISSAO']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Data Saída: </label>
	</td>
	<td>
	<input type="date" value="<?php echo $row['MCA_DT_SAIDA']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	<label>Hora da Saída: </label>
	</td>
	<td>
	<input type="time" value="<?php echo $row['MCA_HR_SAIDA']; ?>" class="form-control">
	</td>
	</tr>
	
	<tr>
	<td align="right">
	&nbsp
	</td>
	<td>
	      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Alterar</button>
      </div>
	</td>
	</tr>
	
	
	</table>
	
	</center>
	<?php
}

	

$sqli = "

SELECT *
FROM entradapa e, itenspa i, produto p
WHERE e.MCA_ID = i.IPA_ENTRADAPA
AND i.IPA_PRODUTO = p.PRO_ID
AND i.IPA_ENTRADAPA = ".$id."

";


?>

<center>
<table border="0" width="100%">

<tr>

<td><label>Código</label></td>
<td><label>Descrição</label></td>
<td><label>Quantidade</label></td>
<td><label>UN</label></td>
<td><label>Valor/UN</label></td>
<td><label>CST</label></td>
<td><label>CFOP</label></td>
<td><label>NCMSH</label></td>

</tr>

<?php
foreach ($conn->query($sqli) as $row) 
{	?>

<tr>

<td><input type="text" value="<?php echo $row['PRO_CODIGO']?>" class="form-control" disabled></td>
<td><input type="text" value="<?php echo $row['PRO_AB_DESCRICAO']?>" class="form-control" disabled></td>
<td><input type="number" value="<?php echo $row['IPA_QUANTIDADE']?>" class="form-control"></td>
<td><input type="text" value="<?php echo $row['IPA_UN']?>" class="form-control"></td>
<td><input type="number" value="<?php echo $row['IPA_PRECOUN']?>" class="form-control"></td>
<td><input type="text" value="<?php echo $row['IPA_CST']?>" class="form-control"></td>
<td><input type="text" value="<?php echo $row['IPA_CFOP']?>" class="form-control"></td>
<td><input type="text" value="<?php echo $row['IPA_NCMSH']?>" class="form-control"></td>

</tr>

<?php }
?>



</table>

</center>


<center>
<table border="0" width="100%">

	<tr>

	<td align="right">
	&nbsp
	</td>

	<td align="right">
	      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Alterar</button>
      </div>
	</td>
	</tr>
</table>
</center>

<input type="hidden" name"id_ent" value="<?php echo $id?>" class="form-control">

	</form>
	</fieldset>
	</article>
