<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];






		function databr($data)
		{
			if($data == null)
			{
				echo "";
			}
			else
			{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
			}
		}

?>


<article style="padding-bottom: 280%">


<div class="label4"> Informação Funcionário </div>


<div class="label2"> 





<?php 
$sql = '



SELECT * 
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_ID = '.$id.' AND f.FUN_COD_PEF = pf.PEF_CODIGO


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




	if($row["FUN_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["FUN_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";
?>">

</td></tr></table>


 </a></center>













</div>
<div class="label5"> 
<table border=0 valign=top width=100%>
<tr>
		<td class=tabinfo1><label>Setor: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_SETOR']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Cargo: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_CARGO']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Função: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_FUNCAO']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Cart. Trabalho: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_CARTEIRA_TRAB']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Série: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_SERIE_CT']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>PIS: </label></td>
		<td class=tabinfo2> <?php print $row['FUN_PIS']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Salário Cart.: </label></td>
		<td width=50% class=tabinfo3> <?php $row['FUN_SALARIO_CARTEIRA']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>CBO: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CBO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Descrição CBO: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_DESC_CBO']; ?> </td>
	</tr>
		
	<tr>
		<td width=50%><label>FGTS: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_FGTS']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Exame Médico: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_EXAME_MEDICO']); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Próximo: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_PROX_EXAME_MED']); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Exame Aud.: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_EXAME_AUDIOMETRIA']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Próximo Aud.: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_PROX_EXAME_AUD']); ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Exame EPI: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_EXAME_EPI']); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Revogação: </label></td>		
		
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_REVOGACAO']); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Adminição: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_EXAME_ADMICAO']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Primeira Exp.: </label></td>
<td width=50% class=tabinfo3> <?php print databr($row['FUN_VENC1_EXP']); ?> </td>
	</tr>

	<tr>
		<td width=50%><label>Segunda Exp.: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_VENC2_EXP']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Comissão: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_COMISSAO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Valor por Hora: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_VALOR_HORA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Sal. Família: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SALARIO_FAMILIA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Comp. Salárial: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_COMP_SAL']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Base Férias: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_BASE_FERIAS']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Base 13º: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_BASE_13']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Entrada: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_ENTRADA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Almoço: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_ALMOCO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Volta Almoço: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_ALMOCO_VOLT']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Saída: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SAIDA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>horas dia: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CARG_HOR_DIA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Horas Sem: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CARG_HOR_SEM']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Dia de Rep: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_DIA_REPOUSO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Hor. Vagos: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_HOR_VAG']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Senha catraca: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SENHA_CAT']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>CNH: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CNH']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>CNH Venc: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CNH_VENC']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>CNH Categoria: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CATEGORIA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Tít. Eleitor: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_TITULO_ELEITOR']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Tít. Zona: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_ZONA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Tít. Seção: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SECAO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Cônjuge: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CONJUGE']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Cert. Casam.: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_CERT_CASAMENTO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Filhos: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_FILHOS']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Escolaridade: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_ESCOLARIDADE']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Aposentado: </label></td>
		<td width=50% class=tabinfo3> <?php print $aposentado; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Deficiente: </label></td>
		<td width=50% class=tabinfo3> <?php print $deficiente; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Descrição Def: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_DEFICIENTE_DESC']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Nº Camisa: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_N_CAMISA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Nº Calça: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_N_CALCA']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Nº Calçado: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_N_CALCADO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Data Aviso: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_DATA_AVISO']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Demissão: </label></td>
		<td width=50% class=tabinfo3> <?php print databr($row['FUN_DATA_DEM']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Razão: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_RAZAO']; ?> </td>
	</tr>
	
	
	
		<tr>
		<td width=50%><label>Data de Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['FUN_DATA_CADASTRO']); ?> </td>
	</tr>	<tr>
		<td width=50%><label>Hora do Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_HORA_CADASTRO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['FUN_ID_CAD'];
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
		<td width=50% class=tabinfo3> <?php print $row['FUN_ID_CAD']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_IP_CADASTRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sessão do cadastrador : </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SESSION_CAD']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Data da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['FUN_DATA_ALTTERACAO']); ?> </td>
	</tr>	
	
	
	<tr>
		<td width=50%><label>Hora da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_HORA_ALTERACAO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['FUN_ID_ALTER'];
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
		<td width=50% class=tabinfo3> <?php print $row['FUN_ID_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_IP_ALTERACAO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Sessão do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_SESSION_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Histórico: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['FUN_OBSERVACAO']; ?> </td>
	</tr>	
	
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50%> 
	<form action="gdp/funcionario/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $row['FUN_ID']; ?>">
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
			<form action="gdp/funcionario/funcinarioinfodireciona.php">
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

	
		</div>  
		  
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
		  
		  
		  
        
</div></div>














</article>

