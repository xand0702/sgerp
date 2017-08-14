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


<div class="label4"> Informação Pessoa Física </div>


<div class="label2"> 





<?php 
$sql = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_ID = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{
?>

<table border=0 valign=top width=100%>
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
	<tr>
		<td class=tabinfo1><label>Email: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_EMAIL']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>RG: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_RG']; ?> </td>
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

</td></tr></table>


 </a></center>













</div>
<div class="label5"> 
<table border=0 valign=top width=100%>
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
		
if($siglasexo == 'M')
	$sexonome = "Masculino";
else
	$sexonome = "Feminino";
		
		
		
		
		
		?>
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo $sexonome; ?> </td>
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
		<td width=50%><label>Bairro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_BAIRRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>CEP: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_CEP']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>País: </label></td>
		
		
		
		
		
		
		
		<?php 
		
		
		
$pais = $row['PEF_PAIS'];
		
$sqlpais = 'SELECT *
FROM pais
WHERE PAS_ID = '.$pais.'


';






	foreach ($conn->query($sqlpais) as $rowpais) 
	{
		
			$nomepais = $rowpais['PAS_NOME'];
		
	}			
		
		
	?>	
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomepais); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado: </label></td>
		
		
		
		
		
		
<?php 
		
		
		
$estado = $row['PEF_ESTADO'];
		
$sqlpais = 'SELECT *
FROM estado
WHERE EST_ID = '.$estado.'


';






	foreach ($conn->query($sqlpais) as $rowestado) 
	{
		
			$nomeestado = $rowestado['EST_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomeestado); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Cidade: </label></td>		
		
		
		
		
		
<?php 
		
		
		
$cidade = $row['PEF_CIDADE'];
		
$sqlpais = 'SELECT *
FROM cidade
WHERE CID_ID = '.$cidade.'


';






	foreach ($conn->query($sqlpais) as $rowcidade) 
	{
		
			$nomecidade = $rowcidade['CID_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecidade); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Nacionalidade: </label></td>
		
		
		
		
<?php 
		
		
		
$nacionaliade = $row['PEF_NACIONALIDADE'];
		
$sqlnacionalidade = 'SELECT *
FROM pais
WHERE PAS_ID = '.$nacionaliade.'


';






	foreach ($conn->query($sqlnacionalidade) as $rownacionalidade) 
	{
		
			$nomecnacionalidade = $rownacionalidade['PAS_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecnacionalidade); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Naturalidade: </label></td>
		
		
		
		
<?php 
		
		
		
$naturalidade = $row['PEF_NATURALIDADE'];
		
$sqlnaturalidade = 'SELECT *
FROM cidade
WHERE CID_ID = '.$naturalidade.'


';






	foreach ($conn->query($sqlnaturalidade) as $rownaturalidade) 
	{
		
			$nomecnaturalidade = $rownaturalidade['CID_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecnaturalidade); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado Civil: </label></td>
		
		
		
		
		
<?php 
		
		
		
$estadocivil = $row['PEF_ESTADO_CIVIL'];
		
$sqlestadocivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.$estadocivil.'


';






	foreach ($conn->query($sqlestadocivil) as $rowestadocivil) 
	{
		
			$nomecestadocivil = $rowestadocivil['CIV_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecestadocivil); ?> </td>
	</tr>

	
		<tr>
		<td width=50%><label>Data de Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_CADASTRO']); ?> </td>
	</tr>	<tr>
		<td width=50%><label>Hora do Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_HORA_CADASTRO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['PEF_ID_USUARIO'];
$sqlusu = "SELECT c.usuario nome
FROM controle_de_acesso c
WHERE c.codigo_funcionario = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = $usu->nome;
		
echo $nome;		
		
		
		
		 ?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ID_USUARIO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_IP_CADASTRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sessão do cadastrador : </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_SESSION']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Data da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_ALTERACAO']); ?> </td>
	</tr>	
	
	
	<tr>
		<td width=50%><label>Hora da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_HORA_ALTERACAO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['PEF_ID_USUARIO_ALTER'];
$sqlusu = "SELECT c.usuario nome
FROM controle_de_acesso c
WHERE c.codigo_funcionario = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = $usu->nome;
		
echo $nome;			
		?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ID_USUARIO_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_IP_ALTERACAO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Sessão do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_SESSION_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Histórico: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_MOTIVO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%>
			<div class="modal-footer">
				<button style="visibility: hidden;" type="submit" class="btn btn-default">Fechar</button>
			</div>
		</td>
		<td width=50%> 
			<form action="gdp/pessoafisica/pessoafisicainfodireciona.php">
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
<form enctype="multipart/form-data" action="gdp/pessoafisica/pessoafisicaaltfot.php" method="post">

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
<input type="hidden" name="idfoto" value="<?php echo $row['PEF_ID']; ?>">
</form>
	
		</div>  
		  
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
		  
		  
		  
        
</div></div>
	















</article>

