

<!--   formulario cadastro pessoa fisica  -->
			
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="pessoajuridicacad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro Pessoa Jurídica</h4>
      </div>
      <div class="modal-body">
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<form enctype="multipart/form-data" action="gdp/pessoajuridica/pessoajuridicacadastro.php" method="post">



		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Razão Social: </label>
			</td>
			<td align=left>
			<input type="text" name="razaos" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNPJ: </label>
			</td>
			<td>
			<input type="number" name="cnpj" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Inscrição Estadual: </label>
			</td>
			<td>
			<input type="number" name="ie" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome Fantasia: </label>
			</td>
			<td>
			<input type="text" name="nfantasia" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 01: </label>
			</td>
			<td>
			<input type="numer" name="tel1" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato: </label>
			</td>
			<td>
			<input type="text" name="cont1" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 02: </label>
			</td>
			<td>
			<input type="numer" name="tel2" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato: </label>
			</td>
			<td>
			<input type="text" name="cont2" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone 03: </label>
			</td>
			<td>
			<input type="numer" name="tel3" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato: </label>
			</td>
			<td>
			<input type="text" name="con3" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Email: </label>
			</td>
			<td>
			<input type="text" name="email" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Site: </label>
			</td>
			<td>
			<input type="text" name="site" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Data de Fundação: </label>
			</td>
			<td>
			<input type="date" name="dt_fun" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Fundador: </label>
			</td>
			<td>
			<input type="text" name="fundador" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Presidente: </label>
			</td>
			<td>
			<input type="text" name="presidente" class="form-control">
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

	foreach($conn->query($s) as $row)
	{



  echo '<option data-tokens="'.utf8_encode($row['id']).'" value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['nome']).'  </option>'; 
  
  
  

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

	foreach($conn->query($p) as $row)
	{



  echo '<option data-tokens="'.utf8_encode($row['id']).'" value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['nome']).'  </option>'; 
  
  
  

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

	foreach($conn->query($t) as $row)
	{


  echo '<option data-tokens="'.utf8_encode($row['id']).'" value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['nome']).'  </option>'; 
  
  
  

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
			<input type="number" name="atividade"  class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CEP: </label>
			</td>
			<td>
			<input type="number" name="cep"  class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label for="password">Endereço: </label>
			</td>
			<td>
			<input type="text" name="endereco" id="password" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Número: </label>
			</td>
			<td>
			<input type="number" name="numero" id="password" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Complemento: </label>
			</td>
			<td>
			<input type="text" name="complemento" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Bairro: </label>
			</td>
			<td>
			<input type="text" name="bairro" class="form-control">
			</td>
		</tr>

		
		<tr>
			<td align=right>			
			<label for="password">Cidade: </label>
			</td>
			<td>
				<input type="text" name="cidade"  class="form-control">	

			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Estado: </label>
			</td>
			<td>
			

				<input type="text" name="estado"  class="form-control">	
			
			
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">País: </label>
			</td>
			<td>
			
<input type="text" name="pais"  class="form-control">	
			
			</td>
		</tr>
		

		<tr>
			<td align=right>
			<label for="password">Foto: </label>
			</td>
			<td>
			<label class="btn btn-default btn-file">
				Carregar... <input type="file" name="file">
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=2 align=left>
				<label for="password">Histórico:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"></textarea>
		</td>
		</tr>	

	</table>
</fieldset>
		
		
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
	  	</form>	
    </div>

  </div>
</div>			
