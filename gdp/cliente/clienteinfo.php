<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];
$tpess = $_REQUEST['tpess'];
$codpess = $_REQUEST['codpess'];





		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		echo $md;
		}


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


<div class="label4"> Informação do Cliente </div>


<div class="label2"> 


<?php 


if($tpess == 'pf')
	
	{


$sql = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_CODIGO = '.$codpess.'


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
<div class="fomrat008"> 
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
		  

		  
		  
		  
        
</div></div>
	


		
		
      </div>
	

<?php 



	}
	elseif($tpess == 'pj')
	{


$sqlpj = '

SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_CODIGO = '.$codpess.'


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

<div class="fomrat008"> 

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

	
	

	
	
	
</table>


	

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


  	</div></div></div></div>

	
	
	
	<?php 
	
	}
	
	?>
	
	
	

	
<?php

	}

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

			SELECT *
			FROM cliente c
			WHERE c.CLI_ID = '.$id.'
';




	foreach ($conn->query($sqldados) as $row) 
	{




?>		
		<tr>
			<td width=50%>
			<label>Comprador Autorizado: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_COMPRADOR']; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Emprego: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_EMPREGO']; ?>
			</td>
		</tr>

		<tr>
			<td width=50%>
			<label>Renda: </label>
			</td>
			<td align=left>
			<?php moeda($row['CLI_RENDA']); ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Limite: </label>
			</td>
			<td align=left>
			<?php moeda($row['CLI_LIMITE']); ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Telefone Confirmação 01: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_TEL_CONFIRMACAO1']; ?>
			</td>
		</tr>
		
		<tr>
			<td width=50%>
			<label>Contato 01: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_CONTATO1']; ?>
			</td>
		</tr>
		
		<tr>
			<td width=50%>
			<label>Telefone Confirmação 02: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_TEL_CONFIRMACAO2']; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 02: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_CONTATO2']; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Telefone Confirmação 03: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_TEL_CONFIRMACAO3']; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 03: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_CONTATO3']; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo " ".$row['CLI_OBSERVACAO']; ?>
			</td>
		</tr>


<?php 

	}
?>
		
		</table>	

<div class="label5">	
	
	
	<table border=0 width=100% >
	
	
	<tr>
		<td width=50%>
			&nbsp
		</td>
		<td width=50% align="right"> 
	<form action="gdp/cliente/relatorios/info.php" method="post" target="_blank">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="codpess" value="<?php echo $codpess; ?>">
		<input type="hidden" name="tpess" value="<?php echo $tpess; ?>">
		
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
			<form action="gdp/cliente/clienteinfodireciona.php">
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Fechar</button>
			</div>
			</form>
		</td>
	</tr>
	
	</table>


</article>

