		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

require_once('comprar/pedido/cad2.php'); 


require_once('comprar/pedido/cad22.php'); 
require_once('comprar/pedido/cad23.php'); 




require_once('comprar/pedido/classtabela.php'); 
require_once('comprar/pedido/classpesquisa.php'); 


if(@$_SESSION['pedido']['cod_cli'] == '' || @$_SESSION['pedido']['tip_m'] == '')
{
	$id = @$_POST['codigof'];
	$_SESSION['pedido']['cod_cli'] = $id;
	

	$tip_m = @$_POST['tip_m'];
	$_SESSION['pedido']['tip_m'] = $tip_m;
	$_SESSION['pedido']['mat'] = $tip_m;
	
}
else
{
	$tip_m = $_SESSION['pedido']['tip_m'];
	$id = $_SESSION['pedido']['cod_cli'];
	$_SESSION['pedido']['mat'] = $tip_m;
	
}	

	



		function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
		}
		
	
if($id == '' || $tip_m == '')
{
		ok('Insira campos obrigatorios');
		echo '<script>window.location="index.php?mod=com&bot=tes1&cad=1"</script>';
	
}	


if($tip_m == 'P.A.')
{



$fornec[0][0] 	= 'Quantidade Pedido';										//label
$fornec[0][1] 	= 'number';										//type
$fornec[0][2] 	= 'quant_sai';										//name
$fornec[0][3] 	= 'placeholder="Preenchimento Obrigatório"';	//placeholder="Preenchimento Obrigatório"

$fornec[1][0] 	= 'Valor/UN compra';
$fornec[1][1] 	= 'number';
$fornec[1][2] 	= 'vl_compra';
$fornec[1][3] 	= 'placeholder="Preenchimento Obrigatório"';

$fornec[2][0] 	= 'Data Entrega(estitiva)';
$fornec[2][1] 	= 'date';
$fornec[2][2] 	= 'dt_ent';
$fornec[2][3] 	= 'placeholder="Preenchimento Obrigatório"';





$pedido = new classcad21();
$pedido->cad21('com','tes1','pedido' ,'Pedido' ,$fornec);


require_once('comprar/pedido/tmp/cad2.php'); 		






}
elseif($tip_m == 'M.C.')
{



$fornec[0][0] 	= 'Quantidade Pedido';										//label
$fornec[0][1] 	= 'number';										//type
$fornec[0][2] 	= 'quant_sai';										//name
$fornec[0][3] 	= 'placeholder="Preenchimento Obrigatório"';	//placeholder="Preenchimento Obrigatório"

$fornec[1][0] 	= 'Valor/UN compra';
$fornec[1][1] 	= 'number';
$fornec[1][2] 	= 'vl_compra';
$fornec[1][3] 	= 'placeholder="Preenchimento Obrigatório"';

$fornec[2][0] 	= 'Data Entrega(estitiva)';
$fornec[2][1] 	= 'date';
$fornec[2][2] 	= 'dt_ent';
$fornec[2][3] 	= 'placeholder="Preenchimento Obrigatório"';




$pedido = new classcad22();
$pedido->cad22('com','tes1', 'pedido','Pedido' ,$fornec);


require_once('comprar/pedido/tmp/cad22.php'); 		

 




}
elseif($tip_m == 'sv')
{
	


$fornec[0][0] 	= 'Tempo';										//label
$fornec[0][1] 	= 'text';										//type
$fornec[0][2] 	= 'tempo';										//name
$fornec[0][3] 	= 'placeholder="Preenchimento Obrigatório"';	//placeholder="Preenchimento Obrigatório"

$fornec[1][0] 	= 'Preço';
$fornec[1][1] 	= 'number';
$fornec[1][2] 	= 'preco';
$fornec[1][3] 	= 'placeholder="Preenchimento Obrigatório"';

$fornec[2][0] 	= 'Início(estitiva)';
$fornec[2][1] 	= 'date';
$fornec[2][2] 	= 'dt_ini';
$fornec[2][3] 	= 'placeholder="Preenchimento Obrigatório"';

$fornec[3][0] 	= 'Descrição';
$fornec[3][1] 	= 'text';
$fornec[3][2] 	= 'desc';
$fornec[3][3] 	= 'placeholder="Preenchimento Obrigatório"';




$pedido = new classcad23();
$pedido->cad23('com','tes1', 'pedido','Pedido' ,$fornec);


require_once('comprar/pedido/tmp/cad23.php'); 		





}


?>

<form enctype="multipart/form-data" name="form2" action="index.php?mod=com&bot=tes1&cad=3" method="post">
<hr>
<?php



$codd = $id;

$sql = "

SELECT pf.PEF_CODIGO cod
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND f.FUN_CODIGO = ".$codd."


";


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$id = $query->cod;	






?>



<div class="label2"> 





<?php 
$sqlpf = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_CODIGO = '.$id.'


';






	foreach ($conn->query($sqlpf) as $row) 
	{
?>

<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
			<h4>Dados do Funcionário</h4>
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>		
	</tr>
	<tr>
		<td class=tabinfo1><label>Nome: </label></td>
		<td class=tabinfo2><?php print $row['PEF_NOME']; ?></td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Telefone: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_TELEFONE']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>CPF: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_CPF']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Celular: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_CELULAR']; ?> </td>
	</tr>

	
	
</table>



</div>
<div class="label3">













<center> <a data-toggle="modal" data-target="#pessoafisicaimg<?php 	echo $row['PEF_ID'];?>"> 


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













</div>
<div class="label5"> 
<table border=0 valign=top width=100%>
	<tr>
		<td class=tabinfo1><label>Email: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_EMAIL']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>RG: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_RG']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Orgão de Expedido: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ORGEX']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Data de expedição: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_EXPEDICAO']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Data de Nascimento: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_NASCIMENTO']);?> </td>
	</tr>
	<tr>
		<td width=50%><label>Nome da Mãe: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_MAE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Nome do Pai: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_PAI']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sexo: </label></td>
		
		<?php 
		
		
		
$sexo = $row['PEF_SEXO'];
		
$sqlsexo = 'SELECT *
FROM sexo
WHERE SEX_ID = '.$sexo.'


';






	foreach ($conn->query($sqlsexo) as $rowsexo) 
	{
		
			$siglasexo = $rowsexo['SEX_NOME'];
		
	}	
		
if($siglasexo == 'F')
	$sexonome = "Feminino";
	elseif($siglasexo == 'M')
	{$sexonome = "Masculino";}
elseif(($siglasexo == 'O'))
	{$sexonome = "outros";}
		
		
		
		
		
		?>
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo $sexonome; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado Civil: </label></td>
		
		
		
		
		
<?php 
		
		
		
$pedidoadocivil = $row['PEF_ESTADO_CIVIL'];
		
$sqlpedidoadocivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.$pedidoadocivil.'


';






	foreach ($conn->query($sqlpedidoadocivil) as $rowpedidoadocivil) 
	{
		
			$nomecpedidoadocivil = $rowpedidoadocivil['CIV_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecpedidoadocivil); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>CEP: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_CEP']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Endereço: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ENDERECO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Número: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_NUMERO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Complemento: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_COMPLEMENTO']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Bairro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_BAIRRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Cidade: </label></td>		
		
		<td width=50% class=tabinfo3> <?php print $row['PEF_CIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ESTADO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>País: </label></td>
<td width=50% class=tabinfo3> <?php print $row['PEF_PAIS']; ?> </td>
	</tr>

	<tr>
		<td width=50%><label>Nacionalidade: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_NACIONALIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Naturalidade: </label></td>
		
		<td width=50% class=tabinfo3> <?php print $row['PEF_NATURALIDADE']; ?> </td>
	</tr>
		<tr>
		<td width=50%>&nbsp </td>
		
		<td width=50% class=tabinfo3>
		<a href="index.php?mod=gdp&bot=tes1&codpes=<?php echo $id;?>">Alterar</a>
		
		</td>
	</tr>	
	

	
	
	
</table>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
	<?php 
	
	}
	
	?>

</div>
















<!-- Modal -->
  <div class="modal fade" id="pessoafisicaimg<?php 	echo $row['PEF_ID'];?>" role="dialog">
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
	else
	{
		echo "feminino.jpg";
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

	  	</form>	

</fieldset>		
		
</article>	






		
	
	
	
	


	