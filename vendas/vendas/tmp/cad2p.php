<?php 


require_once('raiz/arq/conecta2.php'); 





?>

<div class="label5">	
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Vendedor</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
<?php


$sqldados = '

			SELECT *
			FROM funcinario t, pessoa_fisica pf
			WHERE t.FUN_CODIGO = 3
			AND t.FUN_COD_PEF = pf.PEF_CODIGO
';
	



	foreach ($conn->query($sqldados) as $row) 
	{



	?>




<tr><td>


<center> <a data-toggle="modal" data-target="#vendasimg<?php 	echo $row['FUN_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['PEF_IMAGEM'] == '')
{
	if($row['PEF_SEXO'] == 1)
	{
		echo "masculino.jpg";
	}
	elseif($row['PEF_SEXO'] == 2)
	{
		echo "feminino.jpg";
	}
	elseif($row['PEF_SEXO'] == 3)
	{
		echo "outros.jpg";
	}
}
else
{
	echo $row['PEF_IMAGEM'];
}
?>">

</td></tr></table>


 </a></center>

</tr></td>

<tr><td>&nbsp

</tr></td>

	
	<tr>
		<td class=tabinfo1><label>Código: </label></td><td class=tabinfo2>
		<?php print $row['FUN_CODIGO']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>Nome: </label></td><td class=tabinfo2>
		<?php print $row['PEF_NOME']; ?></td>
		</tr>
		
	<tr>
		<td class=tabinfo1><label>CPF: </label></td><td class=tabinfo2>
		<?php print $row['PEF_CPF']; ?></td>
		</tr>
	
		
<?php

	}

?>	
		
		</table>	

		
		
		
			
		
		
		
<!-- Modal -->
  <div class="modal fade" id="vendasimg<?php 	echo 	$row['FUN_ID'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['PEF_IMAGEM'] == '')
{
	if($row['PEF_SEXO'] == 1)
	{
		echo "masculino.jpg";
	}
	elseif($row['PEF_SEXO'] == 2)
	{
		echo "feminino.jpg";
	}
	elseif($row['PEF_SEXO'] == 3)
	{
		echo "outros.jpg";
	}
}
else
{
	echo $row['PEF_IMAGEM'];
}
?>">

</center>

	
		</div>  
	
 
		  
        
</div></div>
			
		
      </div>




<hr>
	
			
	
	
