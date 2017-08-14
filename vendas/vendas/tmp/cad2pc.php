<?php 


require_once('raiz/arq/conecta2.php'); 





?>

<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Cliente</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php

$sqldados = '


SELECT t.CLI_CODIGO codigo, 
pf.PEF_NOME nome,
pf.PEF_CPF doc,
t.CLI_ID id,
t.CLI_PESSOA pessoa,
pf.PEF_IMAGEM imagem,
pf.PEF_SEXO sexo,
t.CLI_COMPRADOR,
t.CLI_EMPREGO,
t.CLI_RENDA,
t.CLI_LIMITE,
t.CLI_TEL_CONFIRMACAO1,
t.CLI_CONTATO1,
t.CLI_TEL_CONFIRMACAO2,
t.CLI_CONTATO2,
t.CLI_TEL_CONFIRMACAO3,
t.CLI_CONTATO3,
t.CLI_OBSERVACAO
FROM cliente t, pessoa_fisica pf
WHERE t.CLI_CODIGO = 1
AND t.CLI_COD_PESSOA = pf.PEF_CODIGO
AND t.CLI_PESSOA = \'pf\'

UNION ALL
SELECT t.CLI_CODIGO codigo,
pj.PEJ_RAZAO_SOCIAL nome, 
pj.PEJ_CNPJ doc,
t.CLI_ID id,
t.CLI_PESSOA pessoa,
pj.PEJ_IMAGEM imagem,
pj.PEJ_CNPJ sexo,
t.CLI_COMPRADOR,
t.CLI_EMPREGO,
t.CLI_RENDA,
t.CLI_LIMITE,
t.CLI_TEL_CONFIRMACAO1,
t.CLI_CONTATO1,
t.CLI_TEL_CONFIRMACAO2,
t.CLI_CONTATO2,
t.CLI_TEL_CONFIRMACAO3,
t.CLI_CONTATO3,
t.CLI_OBSERVACAO

FROM cliente t, pessoa_juridica pj
WHERE t.CLI_CODIGO = 1
AND t.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND t.CLI_PESSOA = \'pj\'


			
';
	


	foreach ($conn->query($sqldados) as $row) 
	{



if(@$row['pessoa'] == 'pf')	
{
	?>




<tr><td>


<center> <a data-toggle="modal" data-target="#vendasimg<?php 	echo $row['id'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['imagem'] == '')
{
	if($row['sexo'] == 1)
	{
		echo "masculino.jpg";
	}
	elseif($row['sexo'] == 2)
	{
		echo "feminino.jpg";
	}
	elseif($row['sexo'] == 3)
	{
		echo "outros.jpg";
	}
}
else
{
	echo $row['imagem'];
}
?>">

</td></tr></table>


 </a></center>

</tr></td>

<tr><td>&nbsp

</tr></td>

	
	<tr>
		<td class=tabinfo1><label>Código: </label></td><td class=tabinfo2>
		<?php print $row['codigo']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Nome: </label></td><td class=tabinfo2>
		<?php print $row['nome']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>CPF: </label></td><td class=tabinfo2>
		<?php print $row['doc']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Comprador Autorizado: </label></td><td class=tabinfo2>
		<?php print $row['CLI_COMPRADOR']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Emprego: </label></td><td class=tabinfo2>
		<?php print $row['CLI_EMPREGO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Renda: </label></td><td class=tabinfo2>
		<?php print classcad2pc::moeda($row['CLI_RENDA']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Limite: </label></td><td class=tabinfo2>
		<?php print classcad2pc::moeda($row['CLI_LIMITE']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 01: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO1']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 01: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO1']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 02: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO2']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 02: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO2']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 03: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO3']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 03: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO3']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Observação: </label></td><td class=tabinfo2>
		<?php print $row['CLI_OBSERVACAO']; ?></td>
		</tr>
	
		
		
		</table>	

		</div>
		
		
			
		
		
		
<!-- Modal -->
  <div class="modal fade" id="vendasimg<?php 	echo 	$row['id'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['imagem'] == '')
{
	if($row['sexo'] == 1)
	{
		echo "masculino.jpg";
	}
	elseif($row['sexo'] == 2)
	{
		echo "feminino.jpg";
	}
	elseif($row['sexo'] == 3)
	{
		echo "outros.jpg";
	}
}
else
{
	echo $row['imagem'];
}
?>">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>




<hr>
	
	<?php
}	
else
{
	

?>	

<tr><td>


<center> <a data-toggle="modal" data-target="#vendasimg<?php 	echo $row['id'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoajuridica/img/<?php 
if($row['imagem'] == '')
{
		echo "empresa.jpg";
}
else
{
	echo $row['imagem'];
}
?>">

</td></tr></table>


 </a></center>

</tr></td>

<tr><td>&nbsp

</tr></td>

	
	<tr>
		<td class=tabinfo1><label>Código: </label></td><td class=tabinfo2>
		<?php print $row['codigo']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Nome: </label></td><td class=tabinfo2>
		<?php print $row['nome']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>CPF: </label></td><td class=tabinfo2>
		<?php print $row['doc']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Comprador Autorizado: </label></td><td class=tabinfo2>
		<?php print $row['CLI_COMPRADOR']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Emprego: </label></td><td class=tabinfo2>
		<?php print $row['CLI_EMPREGO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Renda: </label></td><td class=tabinfo2>
		<?php print classcad2pc::moeda($row['CLI_RENDA']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Limite: </label></td><td class=tabinfo2>
		<?php print classcad2pc::moeda($row['CLI_LIMITE']); ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 01: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO1']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 01: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO1']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 02: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO2']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 02: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO2']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Tel. 03: </label></td><td class=tabinfo2>
		<?php print $row['CLI_TEL_CONFIRMACAO3']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Contato 03: </label></td><td class=tabinfo2>
		<?php print $row['CLI_CONTATO3']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Observação: </label></td><td class=tabinfo2>
		<?php print $row['CLI_OBSERVACAO']; ?></td>
		</tr>
	
		
		
		</table>	

		</div>
		
		
			
		
		
		
<!-- Modal -->
  <div class="modal fade" id="vendasimg<?php 	echo 	$row['id'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="gdp/pessoajuridica/img/<?php 
if($row['imagem'] == '')
{
		echo "empresa.jpg";
}
else
{
	echo $row['imagem'];
}
?>">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>

		
<?php
}
	}

?>		
	
	
