		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 



if(@$_SESSION['funcionario']['cod_pf'] == '')
{
	$id = @$_POST['codigo'];
	@$_SESSION['funcionario']['cod_pf'] = $id;
}
else
{
	$id = @$_SESSION['funcionario']['cod_pf'];
}




		function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
		}
		
	
if($id == '')
{
		ok('Insira o codigo da Pessoa Física');
		echo '<script>window.location="index.php?mod=gdp&bot=tes3&cad=1"</script>';
	
}	

?>



<article style="padding-bottom: 150%">	     




     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation" class="active"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
	<li role="presentation"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		











		
				
		
<form enctype="multipart/form-data" action="index.php?mod=gdp&bot=tes3&cad=3" method="post">



		<fieldset>
		

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados do Funcionário</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		
		<tr>
			<td align=right>
			<label>Setor: </label>
			</td>
			<td align=left>
			<input type="text" name="setor" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cargo: </label>
			</td>
			<td align=left>
			<input type="text" name="cargo" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Função: </label>
			</td>
			<td align=left>
			<input type="text" name="funcao" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Carteira de Trabalho: </label>
			</td>
			<td align=left>
			<input type="number" name="ct" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Série: </label>
			</td>
			<td align=left>
			<input type="text" name="seriect" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>PIS: </label>
			</td>
			<td align=left>
			<input type="number" name="pis" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Salário Carteira: </label>
			</td>
			<td align=left>
			<input type="number" name="sal_car" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CBO: </label>
			</td>
			<td align=left>
			<input type="number" name="cbo" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Descrição CBO: </label>
			</td>
			<td align=left>
			<input type="text" name="desc_cbo" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>FGTS: </label>
			</td>
			<td align=left>
			<input type="text" name="fgts" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Exame Médico: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_med" class="form-control">
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Exame Audiometria: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_aud" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Exame EPI: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_epi" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Exame Adminição: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_adm" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Primeira Experiência: </label>
			</td>
			<td align=left>
			<input type="date" name="v_p_e" class="form-control">
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label>Comissão: </label>
			</td>
			<td align=left>
			<input type="number" name="comissao" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Valor por Hora: </label>
			</td>
			<td align=left>
			<input type="number" name="v_hora" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Salário Família: </label>
			</td>
			<td align=left>
			<input type="number" name="sal_fam" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Complemento Salárial: </label>
			</td>
			<td align=left>
			<input type="number" name="complemento" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base Férias: </label>
			</td>
			<td align=left>
			<input type="number" name="b_fer" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base 13º: </label>
			</td>
			<td align=left>
			<input type="number" name="b_13" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Horário de Entrada: </label>
			</td>
			<td align=left>
			<input type="time" name="entrada" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário de Almoço: </label>
			</td>
			<td align=left>
			<input type="time" name="h_alm" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário da volta Almoço: </label>
			</td>
			<td align=left>
			<input type="time" name="h_alm_v" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário de Saída: </label>
			</td>
			<td align=left>
			<input type="time" name="saida" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Carga horária dia: </label>
			</td>
			<td align=left>
			<input type="number" name="carg_dia" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Carga horária semanal: </label>
			</td>
			<td align=left>
			<input type="number" name="carg_sem" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Dia de Repouso: </label>
			</td>
			<td align=left>
			<select class="selectpicker" data-live-search="true" name="dia_rep">
				<option value="Domíngo">Domíngo</option>
				<option value="Segunda-feira">Segunda-feira</option>
				<option value="Terça-feira">Terça-feira</option>
				<option value="Quarta-feira">Quarta-feira</option>
				<option value="Quinta-feira">Quinta-feira</option>
				<option value="Sexta-feira">Sexta-feira</option>
				<option value="Sábado">Sábado</option>
			</select>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horários Vagos: </label>
			</td>
			<td align=left>
			<input type="text" name="hr_vaga" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Senha catraca: </label>
			</td>
			<td align=left>
			<input type="number" name="sh_cat" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH: </label>
			</td>
			<td align=left>
			<input type="number" name="cnh" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH Vencimento: </label>
			</td>
			<td align=left>
			<input type="date" name="cnh_venc" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH Categoria: </label>
			</td>
			<td align=left>
			<input type="text" name="cnh_cat" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Título de Eleitor: </label>
			</td>
			<td align=left>
			<input type="number" name="tit" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Zona: </label>
			</td>
			<td align=left>
			<input type="number" name="tit_zona" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Seção: </label>
			</td>
			<td align=left>
			<input type="number" name="tit_secao" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cônjuge: </label>
			</td>
			<td align=left>
			<input type="text" name="conjuge" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Certidão de Casamento: </label>
			</td>
			<td align=left>
			<input type="text" name="ct_cas" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Filhos: </label>
			</td>
			<td align=left>
			<input type="number" name="filhos" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Escolaridade: </label>
			</td>
			<td align=left>
			<input type="text" name="escolaridade" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Aposentado: </label>
			</td>
			<td align=left>
			<label class="radio-inline"><input type="radio" value="1" name="apos">SIM</label>
			<label class="radio-inline"><input type="radio" value="2" name="apos" checked>NÃO</label>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Deficiente: </label>
			</td>
			<td align=left>
			<label class="radio-inline"><input type="radio" value="1" name="def">SIM</label>
			<label class="radio-inline"><input type="radio" value="2" name="def" checked>NÃO</label>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Descrição Deficiencia: </label>
			</td>
			<td align=left>
			<input type="text" name="def_desc" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Camisa: </label>
			</td>
			<td align=left>
			<input type="text" name="n_camisa" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calça: </label>
			</td>
			<td align=left>
			<input type="text" name="n_calca" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calçado: </label>
			</td>
			<td align=left>
			<input type="number" name="n_calcado" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"></textarea>
			</td>
		</tr>
		
		</table>
		
		
		<hr>
		<br><br>





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