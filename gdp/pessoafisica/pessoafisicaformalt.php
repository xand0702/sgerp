
		<!-- Modal -->
  <div class="modal fade" id="pessoafisicaalt<?php echo @$row['PEF_ID']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Pessoa Fisica</h4>
        </div>
        <div class="modal-body">








<form action="gdp/pessoafisica/pessoafisicaalt.php" method="post">

<input type="hidden" value="<?php echo @$row['PEF_ID']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_NOME'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone: </label>
			</td>
			<td>
			<input type="number" name="telefone" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_TELEFONE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF: </label>
			</td>
			<td>
			<input type="number" name="cpf" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_CPF'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Celular: </label>
			</td>
			<td>
			<input type="number" name="celular" class="form-control" value="<?php echo @$row['PEF_CELULAR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Email: </label>
			</td>
			<td>
			<input type="text" name="email" class="form-control" value="<?php echo @$row['PEF_EMAIL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>RG: </label>
			</td>
			<td>
			<input type="number" name="rg" class="form-control" value="<?php echo @$row['PEF_RG'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Orgão Expedidor: </label>
			</td>
			<td>
			<input type="text" name="oe" class="form-control" value="<?php echo @$row['PEF_ORGEX'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data de Expedição: </label>
			</td>
			<td>
			<input type="date" name="dt_exp" class="form-control" value="<?php echo @$row['PEF_DATA_EXPEDICAO'];?>">
			</td>
		</tr>

		<tr>
			<td>
			<label align=right>Data de Nascimento: </label>
			</td>
			<td>
			<input type="date" name="dn" class="form-control" value="<?php echo @$row['PEF_DATA_NASCIMENTO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome da Mãe: </label>
			</td>
			<td>
			<input type="text" name="nmae" class="form-control" value="<?php echo @$row['PEF_MAE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome do Pai: </label>
			</td>
			<td>
			<input type="text" name="npai" class="form-control" value="<?php echo @$row['PEF_PAI'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>





			<label>Sexo: </label>



			</td>
			<td>






<select class="selectpicker" data-live-search="true" name="sexo">





<?php

$t = "

SELECT s.SEX_NOME sexo, s.SEX_ID id
FROM sexo s

";




	foreach($conn->query($t) as $rows)
	{

if($row['PEF_SEXO'] == $rows['id'])
	$fixa = "selected";
else
	$fixa = "";

if($rows['sexo'] == "F")
	{$option = "Feminino";}
elseif(($rows['sexo'] == "M"))
	{$option = "Masculino";}
elseif(($rows['sexo'] == "O"))
	{$option = "Outros";}

  echo '<option '.$fixa.' data-tokens="'.utf8_encode($rows['id']).'" value="'.utf8_encode($rows['id']).'"> '.utf8_encode($option).'  </option>
';




	}






?>


 </select>








			</td>
		</tr>
		
		
		
<tr>
			<td align=right>
			<label for="password">Estado Civil:</label>
			</td>
			<td>

<select class="selectpicker" data-live-search="true" name="ecivil">




<?php



$tt5 = "

SELECT c.CIV_NOME civil, C.CIV_ID id
FROM civil c



";




	foreach($conn->query($tt5) as $rowec)
	{
		
		if($row['PEF_SEXO'] == $rows['id'])
			$fixaa = "selected";
		else
			$fixaa = "";
		
		
		echo '<option '.$fixa.' value="'.utf8_encode($rowec['id']).'"> '.utf8_encode($rowec['civil']).'  </option>';
	}



?>


 </select>



			</td>
		</tr>		
		
			<tr>
			<td align=right>
			<label>CEP: </label>
			</td>
			<td>
			<input type="text" name="cep"  class="form-control" value="<?php echo @$row['PEF_CEP']; ?>">
			</td>
		</tr>	
		
		
		
		
		
		<tr>
			<td align=right>
			<label for="password">Endereço: </label>
			</td>
			<td>
			<input type="text" name="endereco" id="password" class="form-control" value="<?php echo @$row['PEF_ENDERECO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Número: </label>
			</td>
			<td>
			<input type="number" name="numero" id="password" class="form-control" value="<?php echo @$row['PEF_NUMERO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Complemento: </label>
			</td>
			<td>
			<input type="text" name="complemento" class="form-control" value="<?php echo @$row['PEF_COMPLEMENTO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Bairro: </label>
			</td>
			<td>
			<input type="text" name="bairro" class="form-control" value="<?php echo @$row['PEF_BAIRRO']; ?>">
			</td>
		</tr>

		<tr>
			<td align=right>



			<label for="password">Cidade: </label>
			</td>
			<td>



	<input type="text" name="cidade"  class="form-control" value="<?php echo @$row['PEF_CIDADE']; ?>">

			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Estado: </label>
			</td>
			<td>


	<input type="text" name="estado"  class="form-control" value="<?php echo @$row['PEF_ESTADO']; ?>">


			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">País: </label>
			</td>
			<td>

	<input type="text" name="pais"  class="form-control" value="<?php echo @$row['PEF_PAIS']; ?>">

			</td>
		</tr>



















		<tr>
			<td align=right>
			<label for="password">Nacionalidade: </label>
			</td>
			<td>



	<input type="text" name="nacionalidade"  class="form-control" value="<?php echo @$row['PEF_NACIONALIDADE']; ?>">

			</td>
		</tr>





		<tr>
			<td align=right>
			<label for="password">Naturalidade: </label>
			</td>
			<td>



	<input type="text" name="naturalidade"  class="form-control" value="<?php echo @$row['PEF_NATURALIDADE']; ?>">


			</td>
		</tr>


		

		<tr>
			<td colspan=2 align=left>
				<label for="password">Histórico:</label>
			</td>
		</tr>
		<tr>
			<td colspan=2>
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"><?php echo @$row['PEF_MOTIVO']; ?></textarea>
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