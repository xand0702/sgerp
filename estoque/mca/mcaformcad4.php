		<?php 



require_once('estoque/cad5.php'); 



@$fornec[0][0] = "nota"; //variavel
@$fornec[0][1] = "obg";		//obrigatorio

@$fornec[1][0] = "pedido";
@$fornec[1][1] = "obg";

@$fornec[2][0] = "dt_emissao";
@$fornec[2][1] = "obg";

@$fornec[3][0] = "dt_saida";
@$fornec[3][1] = "obg";

@$fornec[4][0] = "hr_saida";
@$fornec[4][1] = "obg";

@$fornec[5][0] = "cfcb";
@$fornec[5][1] = "obg";

@$fornec[6][0] = "serie";
@$fornec[6][1] = "obg";

@$fornec[7][0] = "pagina";
@$fornec[7][1] = "obg";

@$fornec[8][0] = "nt_op";
@$fornec[8][1] = "obg";

@$fornec[9][0] = "nfe";
@$fornec[9][1] = "obg";

@$fornec[10][0] = "codigoe";
@$fornec[10][1] = "obg";

@$fornec[11][0] = "img";
@$fornec[11][1] = "obg";





$tmcae = new classcad5();
$tmcae->cad5('est','tes3','mca' ,'cod_cli' , $fornec);



$dados[0][0] = 'Nota';//label
$dados[0][1] = 'nota';//variavel
$dados[0][2] = 'text';//tipo


$dados[1][0] = 'Pedido';//label
$dados[1][1] = 'pedido';//variavel
$dados[1][2] = 'text';//tipo

$dados[2][0] = 'Data Emissão';//label
$dados[2][1] = 'dt_emissao';//variavel
$dados[2][2] = 'data';//tipo

$dados[3][0] = 'Data Saída';//label
$dados[3][1] = 'dt_saida';//variavel
$dados[3][2] = 'data';//tipo


$dados[4][0] = 'Hora da saída';//label
$dados[4][1] = 'hr_saida';//variavel
$dados[4][2] = 'text';//tipo


$dados[5][0] = 'Controle Fisco (Código de barras)';//label
$dados[5][1] = 'cfcb';//variavel
$dados[5][2] = 'text';//tipo


$dados[6][0] = 'Série';//label
$dados[6][1] = 'serie';//variavel
$dados[6][2] = 'text';//tipo


$dados[7][0] = 'Página';//label
$dados[7][1] = 'pagina';//variavel
$dados[7][2] = 'text';//tipo


$dados[8][0] = 'Natureza da Operação';//label
$dados[8][1] = 'nt_op';//variavel
$dados[8][2] = 'text';//tipo


$dados[9][0] = 'NFE';//label
$dados[9][1] = 'nfe';//variavel
$dados[9][2] = 'text';//tipo


$dados[10][0] = 'Código do Funcionário que recebeu';//label
$dados[10][1] = 'codigoe';//variavel
$dados[10][2] = 'text';//tipo




$tmcae = new classcad51();
$tmcae->cad51('est','tes3','mca' ,'Pedido' ,$dados);
		
		

require_once('estoque/tmp/cad5.php'); 		




$codd = $id;

$sql = "
		SELECT p.FOR_PESSOA pessoa, pf.PEF_CODIGO cod
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pf.PEF_CODIGO
GROUP BY pessoa
UNION ALL
SELECT p.FOR_PESSOA pessoa, pj.PEJ_CODIGO cod
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY pessoa


";


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$pessoa = $query->pessoa;	

$id = $query->cod;	




if($pessoa == "pf")
{

?>


<div class="label2"> 





<?php 
$sql = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_CODIGO = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{
?>

<table border=0 valign=top width=100%>
		<tr>
			<td align=center colspan=2>
			<h4>Dados da Pessoa Física</h4>
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
		
		
		
$mcaadocivil = $row['PEF_ESTADO_CIVIL'];
		
$sqlmcaadocivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.$mcaadocivil.'


';






	foreach ($conn->query($sqlmcaadocivil) as $rowmcaadocivil) 
	{
		
			$nomecmcaadocivil = $rowmcaadocivil['CIV_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecmcaadocivil); ?> </td>
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
        <button type="submit" value="form2" onClick="document.form2.submit() class="btn btn-default">Próximo</button>
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

	  
	  
	  
	  
<?php


	}
	elseif($pessoa == "pj")
	{


?>	  
	  
	  
<div class="label2"> 





<?php 
$sqlpj = '

SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_CODIGO = '.$id.'


';




	foreach ($conn->query($sqlpj) as $row) 
	{
?>

<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
			<h4>Dados da Pessoa Jurídica</h4>
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>		
	</tr>
	<tr>
		<td class=tabinfo1><label>Razão Social: </label></td>
		<td class=tabinfo2><?php echo $row['PEJ_RAZAO_SOCIAL']; ?></td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>CNPJ: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CNPJ']; ?> </td>
	</tr>
		<td class=tabinfo1><label>Inscrição Estadual: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_INS_ESTATUAL']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Nome Fantasia </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_NOME_FANTASIA']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Telefone: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_TELEFONE1']; ?> </td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Contato: </label></td>
		<td class=tabinfo2> <?php print $row['PEJ_CONTATO1']; ?> </td>
	</tr>
	
	
	
</table>



</div>
<div class="label3">













<center> <a data-toggle="modal" data-target="#pessoajuridicaimg<?php 	echo $row['PEJ_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoajuridica/img/<?php 
if($row['PEJ_IMAGEM'] == '')
{
	echo "empresa.jpg";
	
}
else
{
	echo $row['PEJ_IMAGEM'];
}
?>">

</td></tr></table>


 </a></center>













</div>

<div class="label5"> 

<br><br>
<table border=0 valign=top width=100%>
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
		<td width=50%>&nbsp </td>
		
		<td width=50% class=tabinfo3>
		<a href="index.php?mod=gdp&bot=tes2&codpj=<?php echo $id;?>">Alterar</a>
		
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
	echo "empresa.jpg";
	
}
else
{
	echo $row['PEJ_IMAGEM'];
}
?>">


<?php

	}

?>	  
	  
	  	</form>			
		
		
	
	
	
	
	
</fieldset>
		
		
		
 
	  
</article>