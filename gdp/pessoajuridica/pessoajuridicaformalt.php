
		<!-- Modal -->
  <div class="modal fade" id="pessoajuridicaalt<?php echo @$row['PEJ_ID']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Pessoa Jurídica</h4>
        </div>
        <div class="modal-body">








<form action="gdp/pessoajuridica/pessoajuridicaalt.php" method="post">

<input type="hidden" value="<?php echo @$row['PEJ_ID']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Razão Social: </label>
			</td>
			<td align=left>
			<input type="text" name="razaos" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEJ_RAZAO_SOCIAL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNPJ: </label>
			</td>
			<td>
			<input type="number" name="cnpj" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEJ_CNPJ'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Inscrição Estadual: </label>
			</td>
			<td>
			<input type="number" name="ie" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEJ_INS_ESTATUAL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome Fantasia: </label>
			</td>
			<td>
			<input type="text" name="nfantasia" class="form-control" value="<?php echo @$row['PEJ_NOME_FANTASIA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 01: </label>
			</td>
			<td>
			<input type="number" name="tel1" class="form-control" value="<?php echo @$row['PEJ_TELEFONE1'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 01: </label>
			</td>
			<td>
			<input type="text" name="cont1" class="form-control" value="<?php echo @$row['PEJ_CONTATO1'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 02: </label>
			</td>
			<td>
			<input type="number" name="tel2" class="form-control" value="<?php echo @$row['PEJ_TELEFONE2'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 02: </label>
			</td>
			<td>
			<input type="text" name="cont2" class="form-control" value="<?php echo @$row['PEJ_CONTATO2'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 03: </label>
			</td>
			<td>
			<input type="number" name="tel3" class="form-control" value="<?php echo @$row['PEJ_TELEFONE3'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 03: </label>
			</td>
			<td>
			<input type="text" name="cont3" class="form-control" value="<?php echo @$row['PEJ_CONTATO3'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Email: </label>
			</td>
			<td>
			<input type="text" name="email" class="form-control" value="<?php echo @$row['PEJ_EMAIL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Site: </label>
			</td>
			<td>
			<input type="text" name="site" class="form-control" value="<?php echo @$row['PEJ_SITE'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Data de Fundação: </label>
			</td>
			<td>
			<input type="date" name="dt_fun" class="form-control" value="<?php echo @$row['PEJ_DATA_FUNDACAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Fundador: </label>
			</td>
			<td>
			<input type="text" name="fundador" class="form-control" value="<?php echo @$row['PEJ_FUNDADOR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Presidente: </label>
			</td>
			<td>
			<input type="text" name="presidente" class="form-control" value="<?php echo @$row['PEJ_PRESIDENTE'];?>">
			</td>
		</tr>
		
		

<tr>
			<td align=right>
			
			
			
			
			
			<label>Segmento: </label>



			</td>
			<td>


			



<select class="selectpicker" data-live-search="true" name="segmento">
  




<?php



$s = "

SELECT s.SEG_ID id, s.SEG_NOME nome
FROM segmento s
";

	foreach($conn->query($s) as $rows)
	{


if($row['PEJ_SEGMENTO'] == $rows['id'])
	$fixa = "selected";
else
	$fixa = "";

  echo '<option '.$fixa.' data-tokens="'.utf8_encode($rows['id']).'" value="'.utf8_encode($rows['id']).'"> '.utf8_encode($rows['nome']).'  </option>'; 
  
  
  

	}

 



?>			
	

 </select>






		
			
			</td>
		</tr>
		





<tr>
			<td align=right>
			
			
			
			
			
			<label>Porte: </label>



			</td>
			<td>


			



<select class="selectpicker" data-live-search="true" name="porte">
  




<?php



$p = "

SELECT p.POR_ID id, p.POR_NOME nome
FROM porte p

";

	foreach($conn->query($p) as $PEJ)
	{
if($row['PEJ_PORTE'] == $PEJ['id'])
	$fixa = "selected";
else
	$fixa = "";


  echo '<option '.$fixa.' data-tokens="'.utf8_encode($PEJ['id']).'" value="'.utf8_encode($PEJ['id']).'"> '.utf8_encode($PEJ['nome']).'  </option>'; 
  
  
  

	}


 



?>			
	

 </select>






		
			
			</td>
		</tr>
		



		
		
		
		<tr>
			<td align=right>
			
			
			
			
			
			<label>Tipo de Empresa: </label>



			</td>
			<td>


			



<select class="selectpicker" data-live-search="true" name="tip_emp">
  




<?php



$t = "

SELECT te.TIP_ID id, te.TIP_NOME nome
FROM tipo_emp te

";

	foreach($conn->query($t) as $rowt)
	{
if($row['PEJ_TIPO'] == $rowt['id'])
	$fixa = "selected";
else
	$fixa = "";

  echo '<option '.$fixa.' data-tokens="'.utf8_encode($rowt['id']).'" value="'.utf8_encode($rowt['id']).'"> '.utf8_encode($rowt['nome']).'  </option>'; 
  
  
  

	}


 



?>			
	

 </select>






		
			
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label>Atividade: </label>
			</td>
			<td>
			<input type="number" name="atividade"  class="form-control" value="<?php echo @$row['PEJ_ATIVIDADE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CEP: </label>
			</td>
			<td>
			<input type="number" name="cep"  class="form-control" value="<?php echo @$row['PEJ_CEP'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label for="password">Endereço: </label>
			</td>
			<td>
			<input type="text" name="endereco" id="password" class="form-control" value="<?php echo @$row['PEJ_ENDERECO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Número: </label>
			</td>
			<td>
			<input type="number" name="numero" id="password" class="form-control" value="<?php echo @$row['PEJ_NUMERO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Complemento: </label>
			</td>
			<td>
			<input type="text" name="complemento" class="form-control" value="<?php echo @$row['PEJ_COMPLEMENTO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Bairro: </label>
			</td>
			<td>
			<input type="text" name="bairro" class="form-control" value="<?php echo @$row['PEJ_BAIRRO'];?>">
			</td>
		</tr>

		
		<tr>
			<td align=right>			
			<label for="password">Cidade: </label>
			</td>
			<td>
				<input type="text" name="cidade"  class="form-control" value="<?php echo @$row['PEJ_CIDADE'];?>">	

			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Estado: </label>
			</td>
			<td>
			

				<input type="text" name="estado"  class="form-control" value="<?php echo @$row['PEJ_ESTADO'];?>">	
			
			
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">País: </label>
			</td>
			<td>
			
<input type="text" name="pais"  class="form-control" value="<?php echo @$row['PEJ_PAIS'];?>">	
			
			</td>
		</tr>
		


		<tr>
			<td colspan=2 align=left>
				<label for="password">Histórico:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"><?php echo @$row['PEJ_MOTIVO']; ?></textarea>
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