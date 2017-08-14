

<!--   formulario cadastro pessoa fisica  -->
			
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="capcad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro Contas à Pagar</h4>
      </div>
      <div class="modal-body">
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<form enctype="multipart/form-data" action="financeiro/cap/capcadastro.php" method="post">



		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Descrição: </label>
			</td>
			<td align=left>
			<input type="text" name="desc" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Credor: </label>
			</td>
			<td>
			<input type="text" name="credor" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Documento: </label>
			</td>
			<td>
			<input type="text" name="doc" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data Vencimento: </label>
			</td>
			<td>
			<input type="date" name="dt_ven" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Valor: </label>
			</td>
			<td>
			<input type="text" name="valor" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Parcelas: </label>
			</td>
			<td>
			<input type="number" name="n_p" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		

		<tr>
			<td colspan=2 align=left>
				<label for="password">Observação:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"></textarea>
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
