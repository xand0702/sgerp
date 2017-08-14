 
		<!-- Modal -->
  <div class="modal fade" id="funcinarioalt<?php echo @$row['FUN_ID']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Funcionário</h4>
        </div>
        <div class="modal-body">








<form action="gdp/funcionario/funcinarioalt.php" method="post">

<input type="hidden" value="<?php echo @$row['FUN_ID']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" value="<?php echo @$row['PEF_NOME'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF: </label>
			</td>
			<td align=left>
			<input type="text" name="cpf" class="form-control" value="<?php echo @$row['PEF_CPF'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			&nbsp
			</td>
			<td align=left>
			<a href="index.php?mod=gdp&bot=tes1&codpes=<?php echo @$row['PEF_CODIGO'];?>">Alterar</a>

			</td>
		</tr>
</table>
<hr>		
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		<tr>
			<td align=right>
			<label>Situação: </label>
			</td>
			<td>
				<select class="selectpicker" data-live-search="true" name="situacao">
<?php
$t = "

SELECT f.FUN_SITUACAO id
FROM funcinario f 
WHERE f.FUN_ID = ".$row['FUN_ID']."

";

$queryt = $conn->prepare($t);

$queryt->execute();

$queryt = $queryt->fetch(PDO::FETCH_OBJ);

$ts = $queryt->id;


$situacao[1] = "ATIVO";
$situacao[2] = "DESLIGADO";


$i = 0;

	for ($i = 1; $i <= count($situacao); $i++)
	{

		if($i == $ts)
			echo '<option selected data-tokens="'.$i.'" value="'.$i.'"> '.$situacao[$i].'  </option><br>';
		else
			echo '<option data-tokens="'.$i.'" value="'.$i.'"> '.$situacao[$i].'  </option><br>';

		
		
	}




?>			
 </select>
			</td>

	</tr>
		<tr>
			<td align=right>
			<label>Setor: </label>
			</td>
			<td align=left>
			<input type="text" name="setor" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_SETOR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cargo: </label>
			</td>
			<td align=left>
			<input type="text" name="cargo" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_CARGO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Função: </label>
			</td>
			<td align=left>
			<input type="text" name="funcao" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_FUNCAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cart. Trabalho: </label>
			</td>
			<td align=left>
			<input type="number" name="ct" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_CARTEIRA_TRAB'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Série: </label>
			</td>
			<td align=left>
			<input type="text" name="seriect" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_SERIE_CT'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>PIS: </label>
			</td>
			<td align=left>
			<input type="number" name="pis" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_PIS'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Salário Cart.: </label>
			</td>
			<td align=left>
			<input type="number" name="sal_car" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_SALARIO_CARTEIRA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CBO: </label>
			</td>
			<td align=left>
			<input type="number" name="cbo" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_CBO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Descrição CBO: </label>
			</td>
			<td align=left>
			<input type="text" name="desc_cbo" class="form-control" value="<?php echo @$row['FUN_DESC_CBO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>FGTS: </label>
			</td>
			<td align=left>
			<input type="text" name="fgts" class="form-control" value="<?php echo @$row['FUN_FGTS'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Exame Médico: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_med" class="form-control" value="<?php echo @$row['FUN_EXAME_MEDICO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Próximo: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_med_prox" class="form-control" value="<?php echo @$row['FUN_PROX_EXAME_MED'];?>">
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Exame Aud.: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_aud" class="form-control" value="<?php echo @$row['FUN_EXAME_AUDIOMETRIA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Próximo Aud.: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_aud_prox" class="form-control" value="<?php echo @$row['FUN_PROX_EXAME_AUD'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Exame EPI: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_epi" class="form-control" value="<?php echo @$row['FUN_EXAME_EPI'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Revogação: </label>
			</td>
			<td align=left>
			<input type="date" name="revogacao" class="form-control" value="<?php echo @$row['FUN_REVOGACAO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Adminição: </label>
			</td>
			<td align=left>
			<input type="date" name="ex_adm" class="form-control" value="<?php echo @$row['FUN_EXAME_ADMICAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Primeira Exp.: </label>
			</td>
			<td align=left>
			<input type="date" name="v_p_e" class="form-control" value="<?php echo @$row['FUN_VENC1_EXP'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Segunda Exp.: </label>
			</td>
			<td align=left>
			<input type="date" name="v_s_e" class="form-control" value="<?php echo @$row['FUN_VENC2_EXP'];?>">
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label>Comissão: </label>
			</td>
			<td align=left>
			<input type="number" name="comissao" class="form-control" value="<?php echo @$row['FUN_COMISSAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Valor por Hora: </label>
			</td>
			<td align=left>
			<input type="number" name="v_hora" class="form-control" value="<?php echo @$row['FUN_VALOR_HORA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Sal. Família: </label>
			</td>
			<td align=left>
			<input type="number" name="sal_fam" class="form-control" value="<?php echo @$row['FUN_SALARIO_FAMILIA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Comp. Salárial: </label>
			</td>
			<td align=left>
			<input type="number" name="complemento" class="form-control" value="<?php echo @$row['FUN_COMP_SAL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base Férias: </label>
			</td>
			<td align=left>
			<input type="number" name="b_fer" class="form-control" value="<?php echo @$row['FUN_BASE_FERIAS'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base 13º: </label>
			</td>
			<td align=left>
			<input type="number" name="b_13" class="form-control" value="<?php echo @$row['FUN_BASE_13'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Entrada: </label>
			</td>
			<td align=left>
			<input type="time" name="entrada" class="form-control" value="<?php echo @$row['FUN_ENTRADA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Almoço: </label>
			</td>
			<td align=left>
			<input type="time" name="h_alm" class="form-control" value="<?php echo @$row['FUN_ALMOCO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Volta Almoço: </label>
			</td>
			<td align=left>
			<input type="time" name="h_alm_v" class="form-control" value="<?php echo @$row['FUN_ALMOCO_VOLT'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Saída: </label>
			</td>
			<td align=left>
			<input type="time" name="saida" class="form-control" value="<?php echo @$row['FUN_SAIDA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>horas dia: </label>
			</td>
			<td align=left>
			<input type="number" name="carg_dia" class="form-control" value="<?php echo @$row['FUN_CARG_HOR_DIA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horas Sem.: </label>
			</td>
			<td align=left>
			<input type="number" name="carg_sem" class="form-control" value="<?php echo @$row['FUN_CARG_HOR_SEM'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Dia de Rep.: </label>
			</td>
			<td align=left>
			<select class="selectpicker" data-live-search="true" name="dia_rep">
			

			
<?php
$ta = "

SELECT f.FUN_DIA_REPOUSO id
FROM funcinario f 
WHERE f.FUN_ID = ".$row['FUN_ID']."

";

$queryt = $conn->prepare($ta);

$queryt->execute();

$queryt = $queryt->fetch(PDO::FETCH_OBJ);

$dr = $queryt->id;

if($dr == "Domíngo")
{
	echo '
	<option value="Domíngo" selected >Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Segunda-feira")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira" selected >Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Terça-feira")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira" selected >Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Quarta-feira")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira" selected >Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Quinta-feira")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira" selected >Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Sexta-feira")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira" selected >Sexta-feira</option>
	<option value="Sábado">Sábado</option>
	';
}
elseif($dr == "Sábado")
{
	echo '
	<option value="Domíngo">Domíngo</option>
	<option value="Segunda-feira">Segunda-feira</option>
	<option value="Terça-feira">Terça-feira</option>
	<option value="Quarta-feira">Quarta-feira</option>
	<option value="Quita-feira">Quita-feira</option>
	<option value="Sexta-feira">Sexta-feira</option>
	<option value="Sábado" selected >Sábado</option>
	';
}

?>			
			</select>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Hor. Vagos: </label>
			</td>
			<td align=left>
			<input type="text" name="hr_vaga" class="form-control" value="<?php echo @$row['FUN_HOR_VAG'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Senha catraca: </label>
			</td>
			<td align=left>
			<input type="number" name="sh_cat" class="form-control" value="<?php echo @$row['FUN_SENHA_CAT'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH: </label>
			</td>
			<td align=left>
			<input type="number" name="cnh" class="form-control" value="<?php echo @$row['FUN_CNH'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH Venc.: </label>
			</td>
			<td align=left>
			<input type="date" name="cnh_venc" class="form-control" value="<?php echo @$row['FUN_CNH_VENC'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH Categoria: </label>
			</td>
			<td align=left>
			<input type="text" name="cnh_cat" class="form-control" value="<?php echo @$row['FUN_CATEGORIA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Eleitor: </label>
			</td>
			<td align=left>
			<input type="number" name="tit" class="form-control" value="<?php echo @$row['FUN_TITULO_ELEITOR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Zona: </label>
			</td>
			<td align=left>
			<input type="number" name="tit_zona" class="form-control" value="<?php echo @$row['FUN_ZONA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Seção: </label>
			</td>
			<td align=left>
			<input type="number" name="tit_secao" class="form-control" value="<?php echo @$row['FUN_SECAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cônjuge: </label>
			</td>
			<td align=left>
			<input type="text" name="conjuge" class="form-control" value="<?php echo @$row['FUN_CONJUGE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cert. Casam.: </label>
			</td>
			<td align=left>
			<input type="text" name="ct_cas" class="form-control" value="<?php echo @$row['FUN_CERT_CASAMENTO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Filhos: </label>
			</td>
			<td align=left>
			<input type="number" name="filhos" class="form-control" value="<?php echo @$row['FUN_FILHOS'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Escolaridade: </label>
			</td>
			<td align=left>
			<input type="text" name="escolaridade" class="form-control" value="<?php echo @$row['FUN_ESCOLARIDADE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Aposentado: </label>
			</td>
			<td align=left>

			
<?php
$ta = "

SELECT f.FUN_APOSENTADO id
FROM funcinario f 
WHERE f.FUN_ID = ".$row['FUN_ID']."

";

$queryt = $conn->prepare($ta);

$queryt->execute();

$queryt = $queryt->fetch(PDO::FETCH_OBJ);

$ta = $queryt->id;

$apo[1] = "SIM";
$apo[2] = "NÃO";


$i = 0;

	for ($i = 1; $i <= count($apo); $i++)
	{
	
		if($i == $ta)
			echo '<label class="radio-inline"><input type="radio" value="'.$i.'" name="apos" checked>'.$apo[$i].'</label>';
		else
			echo '<label class="radio-inline"><input type="radio" value="'.$i.'" name="apos" >'.$apo[$i].'</label>';
	}
?>			
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Deficiente: </label>
			</td>
			<td align=left>

			
<?php
$td = "

SELECT f.FUN_DEFICIENTE id
FROM funcinario f 
WHERE f.FUN_ID = ".$row['FUN_ID']."

";

$queryt = $conn->prepare($td);

$queryt->execute();

$queryt = $queryt->fetch(PDO::FETCH_OBJ);

$td = $queryt->id;

$sitd[1] = "SIM";
$sitd[2] = "NÃO";


$i = 0;

	for ($i = 1; $i <= count($sitd); $i++)
	{
	
		if($i == $td)
			echo '<label class="radio-inline"><input type="radio" value="'.$i.'" name="def" checked>'.$sitd[$i].'</label>';
		else
			echo '<label class="radio-inline"><input type="radio" value="'.$i.'" name="def" >'.$sitd[$i].'</label>';
	}
?>			
			</td>
		</tr>
		

		<tr>
			<td align=right>
			<label>Descrição Def.: </label>
			</td>
			<td align=left>
			<input type="text" name="def_desc" class="form-control" value="<?php echo @$row['FUN_DEFICIENTE_DESC'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Camisa: </label>
			</td>
			<td align=left>
			<input type="text" name="n_camisa" class="form-control" value="<?php echo @$row['FUN_N_CAMISA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calça: </label>
			</td>
			<td align=left>
			<input type="text" name="n_calca" class="form-control" value="<?php echo @$row['FUN_N_CALCA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calçado: </label>
			</td>
			<td align=left>
			<input type="number" name="n_calcado" class="form-control" value="<?php echo @$row['FUN_N_CALCADO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data Aviso: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_aviso" class="form-control" value="<?php echo @$row['FUN_DATA_AVISO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Demissão: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_dem" class="form-control" value="<?php echo @$row['FUN_DATA_DEM'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Razão: </label>
			</td>
			<td align=left>
			<input type="text" name="razao" class="form-control" value="<?php echo @$row['FUN_RAZAO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['FUN_OBSERVACAO'];?></textarea>
			</td>
		</tr>
		



		
		
			

	</table>
		</fieldset>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Alterar</button>
      </div>
	  	</form>






        </div>
      </div>




    </div>