<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];






		function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
		}

?>


<article style="padding-bottom: 150%">


<div class="label4"> Informação Pessoa Jurídica </div>


<div class="label2"> 





<?php 
$sql = '



SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_ID = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{
?>

<table border=0 valign=top width=100%>
	<tr>
		<td class=tabinfo1><label>Razão Social: </label></td>
		<td class=tabinfo2><?php print $row['PEJ_RAZAO_SOCIAL']; ?></td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>CNPJ: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CNPJ']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Inscrição Estadual: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_INS_ESTATUAL']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Nome Fantasia </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_NOME_FANTASIA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Telefone 01: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_TELEFONE1']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Contato 01: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CONTATO1']; ?> </td>
	</tr>
	
	
	
</table>



</div>
<div class="label3">













<center> <a data-toggle="modal" data-target="#pessoafisicaimg<?php 	echo $row['PEJ_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoajuridica/img/<?php 
if($row['PEJ_IMAGEM'] == '')
{
	echo "empresa.jpg";
	
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
		<td class=tabinfo1><label>Telefone 02: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_TELEFONE2']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Contato 02: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CONTATO2']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Telefone 03: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_TELEFONE3']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Contato 03: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CONTATO3']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Email: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_EMAIL']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Site: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_SITE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Data de Fundação: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEJ_DATA_FUNDACAO']); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Fundador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_FUNDADOR']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Presidente: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_PRESIDENTE']; ?> </td>
	</tr>
	


	<tr>
		<td width=50%><label>Segmento: </label></td>
		
		<?php 
		
		
		
$segmento = $row['PEJ_SEGMENTO'];
		
$sqlsegmento = 'SELECT *
FROM segmento
WHERE SEG_ID = '.$segmento.'


';






	foreach ($conn->query($sqlsegmento) as $rowsegmento) 
	{
		
			echo '<td width=50% class=tabinfo3> '.$rowsegmento['SEG_NOME'].' </td>';
	}	
		
	
		?>
		
	</tr>
	
	
	
	
	<tr>
		<td width=50%><label>Porte: </label></td>
		
		<?php 
		
		
		
$porte = $row['PEJ_PORTE'];
		
$sqlporte = 'SELECT *
FROM porte
WHERE POR_ID = '.$porte.'


';






	foreach ($conn->query($sqlporte) as $rowporte) 
	{
		
			echo '<td width=50% class=tabinfo3> '.utf8_encode($rowporte['POR_NOME']).' </td>';
	}	
		
	
		?>
		
	</tr>	<tr>
		<td width=50%><label>Tipo de Empresa: </label></td>
		
		<?php 
		
		
		
$tipo = $row['PEJ_TIPO'];
		
$sqltipo = 'SELECT *
FROM tipo_emp
WHERE TIP_ID = '.$tipo.'


';






	foreach ($conn->query($sqltipo) as $rowtipo) 
	{
		
			echo '<td width=50% class=tabinfo3> '.$rowtipo['TIP_NOME'].' </td>';
	}	
		
	
		?>
		
	</tr>





	
	
	
	
	
	
	<tr>
		<td width=50%><label>Atividade: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_ATIVIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>CEP: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_CEP']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Endereço: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_ENDERECO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Número: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_NUMERO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Complemento: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_COMPLEMENTO']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Bairro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_BAIRRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Cidade: </label></td>		
		
		<td width=50% class=tabinfo3> <?php print $row['PEJ_CIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_ESTADO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>País: </label></td>
<td width=50% class=tabinfo3> <?php print $row['PEJ_PAIS']; ?> </td>
	</tr>

	
	
		<tr>
		<td width=50%><label>Data de Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEJ_DATA_CADASTRO']); ?> </td>
	</tr>	<tr>
		<td width=50%><label>Hora do Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_HORA_CADASTRO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['PEJ_ID_CAD'];
$sqlusu = "SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = $usu->nome;
		
echo $nome;		
		
		
		
		 ?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_ID_CAD']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_IP_CADASTRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sessão do cadastrador : </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_SESSION']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Data da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEJ_DATA_ALTERACAO']); ?> </td>
	</tr>	
	
	
	<tr>
		<td width=50%><label>Hora da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_HORA_ALTERACAO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['PEJ_ID_ALTER'];
$sqlusu = "SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = $usu->nome;
		
echo $nome;			
		?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_ID_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_IP_ALTERACAO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Sessão do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_SESSION_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Histórico: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEJ_MOTIVO']; ?> </td>
	</tr>	
	
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50%> 
	<form action="gdp/pessoajuridica/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $row['PEJ_ID']; ?>">
		<input type="submit" class="btn btn-default" value="Imprimir">
	</form>
		</td>
	</tr>
	
	
	
	

	
	
	
	<tr>
		<td width=50%>
			<div class="modal-footer">
				<button style="visibility: hidden;" type="submit" class="btn btn-default">Fechar</button>
			</div>
		</td>
		<td width=50%> 
			<form action="gdp/pessoajuridica/pessoajuridicainfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	
	
			
	
	
	
	
	
	
	
	
	
	
	
	
</table>
	<?php 
	
	}
	
	?>

</div>
















<!-- Modal -->
  <div class="modal fade" id="pessoajuridicaimg<?php 	echo $row['PEJ_ID'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="gdp/pessoajuridica/img/<?php 
if($row['PEJ_IMAGEM'] == '')
{
		echo "masculino.jpg";
}
else
{
	echo $row['PEF_IMAGEM'];
}
?>">

</center>
<form enctype="multipart/form-data" action="gdp/pessoafisica/pessoajuridicaaltfot.php" method="post">

<table width=100%>
		<tr>
			<td align=right width=50%>
			<label for="password">Foto: </label>
			</td>
			<td width=50%>
			<label class="btn btn-default btn-file">
				Carregar... <input type="file" name="file">
			</label>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			<td align=left width=50%> 
					<button type="submit" class="btn btn-default">Alterar</button>
				
			</td>
		</tr>
		
		     
		
</table>
<input type="hidden" name="idfoto" value="<?php echo $row['PEJ_ID']; ?>">
</form>
	
		</div>  
		  
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
		  
		  
		  
        
</div></div>
	















</article>

