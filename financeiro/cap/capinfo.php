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


<div class="label4"> Informação Contas à Pagar </div>


<div class="label2"> 





<?php 
$sql = '



SELECT *
FROM cap pf
WHERE pf.CAP_ID = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{
?>

<table border=0 valign=top width=100%>
	<tr>
		<td class=tabinfo1><label>Descrição: </label></td>
		<td class=tabinfo2><?php print $row['CAP_DESCRICAO']; ?></td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Abreviatura Desc: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_AB_DESCRICAO']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Unidade: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_UNIDADE']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Código de Barra: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_COD_BARRA']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Estoque Mínimo: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_EST_MIN']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Estoque Crítico: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_EST_CRIT']; ?> </td>
	</tr>
</table>



</div>
<div class="label3">













<center> <a data-toggle="modal" data-target="#capimg<?php 	echo $row['CAP_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="financeiro/cap/img/<?php 
if($row['CAP_IMAGEM'] == '')
{
	echo "outros.jpg";	
}
else
{
	echo $row['CAP_IMAGEM'];
}
?>">

</td></tr></table>


 </a></center>













</div>
<div class="label5"> 
<table border=0 valign=top width=100%>
	
	<tr>
		<td class=tabinfo1><label>Estoque Máximo: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_EST_MAX']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Fabricante: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_FABRICANTE']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Marca: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_MARCA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Modelo: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_MODELO']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Categoria: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_CATEGORIA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Peso Bruto: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_PESO_BRUTO']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Peso Líquido: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_PESO_LIQ']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Comprimento (m): </label></td>
		<td class=tabinfo2> <?php print $row['CAP_COMPRIMENTO']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Largura (m): </label></td>
		<td class=tabinfo2> <?php print $row['CAP_LARGURA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Altura: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_ALTURA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Grade: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_GRADE']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Agrupamento: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_AGRUPAMENTO']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Dias de Garantia: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_DIAS_GARANT']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Situração Tributária: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_SIT_TRIB']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Substituição Tributária: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_SUB_TRIB']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Classificão Fiscal: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_CLASS_TRIB']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Cofins: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_COFINS']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>IRPJ: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_IRPJ']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>ICMS: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_ICMS']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>IPI: </label></td>
		<td class=tabinfo2> <?php print $row['CAP_IPI']; ?> </td>
	</tr>
	
		<tr>
		<td width=50%><label>Data de Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['CAP_DATA_CADASTRO']); ?> </td>
	</tr>	<tr>
		<td width=50%><label>Hora do Cadastro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_HORA_CADASTRO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['CAP_ID_CAD'];
$sqlusu = "SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = @$usu->nome;

		
echo $nome;		
		
		
		
		 ?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_ID_CAD']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do cadastrador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_IP_CADASTRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sessão do cadastrador : </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_SESSION_CAD']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Data da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['CAP_DATA_ALTTERACAO']); ?> </td>
	</tr>	
	
	
	<tr>
		<td width=50%><label>Hora da Alteração: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_HORA_ALTERACAO']; ?> </td>
	</tr>	<tr>
		<td width=50%><label>Usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php 
		
$idusu = $row['CAP_ID_ALTER'];
$sqlusu = "SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$idusu;
	
$query = $conn->prepare($sqlusu);

$query->execute();

$usu = $query->fetch(PDO::FETCH_OBJ);

$nome = @$usu->nome;
		
echo $nome;			
		?> </td>
	</tr>	<tr>
		<td width=50%><label>Código do usuario alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_ID_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Ip do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_IP_ALTERACAO']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Sessão do alterador: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_SESSION_ALTER']; ?> </td>
	</tr>	
	<tr>
		<td width=50%><label>Observação: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['CAP_OBSERVACAO']; ?> </td>
	</tr>	
	
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50%> 
	<form action="financeiro/cap/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $row['CAP_ID']; ?>">
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
			<form action="financeiro/cap/capinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	
	
			
	
	
	
	
	
	
	
	
	
	
	
	
</table>


</div>
















<!-- Modal -->
  <div class="modal fade" id="capimg<?php 	echo $row['CAP_ID'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="financeiro/cap/img/<?php 
if($row['CAP_IMAGEM'] == '')
{

		echo "outros.jpg";
	
}
else
{
	echo $row['CAP_IMAGEM'];
}
?>">

</center>
<form enctype="multipart/form-data" action="financeiro/cap/capaltfot.php" method="post">

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
<input type="hidden" name="idfoto" value="<?php echo $row['CAP_ID']; ?>">
</form>
	
		</div>  
		  
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
		  
		  
		  
        
</div></div>
	



	<?php 
	
	}
	
	?>











</article>

