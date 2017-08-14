 
		<!-- Modal -->
  <div class="modal fade" id="clientealt<?php echo @$row['id']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Cliente</h4>
        </div>
        <div class="modal-body">








<form action="gdp/cliente/clientealt.php" method="post">

<input type="hidden" value="<?php echo @$row['id']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" value="<?php echo @$row['nome'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF/CNPJ: </label>
			</td>
			<td align=left>
			<input type="text" name="cpf" class="form-control" value="<?php echo @$row['doc'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			&nbsp
			</td>
			<td align=left>
			<a href="index.php?mod=gdp&bot=tes<?php
			if($row['pessoa'] == 'pf')
				echo "1&codpes=".@$row['cod_p'];
			elseif($row['pessoa'] == 'pj')
				echo "2&codpj=".@$row['cod_p'];
			?>">Alterar</a>

			</td>
		</tr>
</table>
<hr>		
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		
		<tr>
			<td align=right>
			<label>Comprador Autorizado: : </label>
			</td>
			<td align=left>
			<input type="text" name="comp_aut" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_COMPRADOR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Emprego: </label>
			</td>
			<td align=left>
			<input type="text" name="emprego" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_EMPREGO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Renda: </label>
			</td>
			<td align=left>
			<input type="number" name="renda" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_EMPREGO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Limite: </label>
			</td>
			<td align=left>
			<input type="number" name="limite" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['limite'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone Confirmação 01: </label>
			</td>
			<td align=left>
			<input type="number" name="tel1" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_TEL_CONFIRMACAO1'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Contato 01: </label>
			</td>
			<td align=left>
			<input type="text" name="cont1" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_CONTATO1'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Telefone Confirmação 02: </label>
			</td>
			<td align=left>
			<input type="number" name="tel2" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_TEL_CONFIRMACAO2'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 02: </label>
			</td>
			<td align=left>
			<input type="text" name="cont2" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_CONTATO2'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone Confirmação 03: </label>
			</td>
			<td align=left>
			<input type="number" name="tel3" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_TEL_CONFIRMACAO3'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Contato 03: </label>
			</td>
			<td align=left>
			<input type="text" name="cont3" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['CLI_CONTATO3'];?>">
			</td>
		</tr>
		
		
		
		
		
		
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['CLI_OBSERVACAO'];?></textarea>
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