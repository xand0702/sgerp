
		<!-- Modal -->
  <div class="modal fade" id="capalt<?php echo @$row['idct']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Contas à Pagar</h4>
        </div>
        <div class="modal-body">








<form action="financeiro/cap/capalt.php" method="post">

<input type="hidden" value="<?php echo @$row['idct']; ?>" name="id">

		<fieldset>

		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Descrição: </label>
			</td>
			<td align=left>
			<input type="text" name="desc" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['descr'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Credor: </label>
			</td>
			<td>
			<input type="text" name="credor" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['credor'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Documento: </label>
			</td>
			<td>
			<input type="text" name="doc" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['doc'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data Vencimento: </label>
			</td>
			<td>
			<input type="date" name="dt_ven" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['dtven'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Valor: </label>
			</td>
			<td>
			<input type="text" name="valor" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['valor'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Parcelas: </label>
			</td>
			<td>
			<input type="number" name="n_p" class="form-control" placeholder="Preenchimento Obrigatório" disabled value="<?php echo @$row['tp'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>PAGO: </label>
			</td>
			<td>
			<input type="text" name="pago" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['pago'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Valor PAGO: </label>
			</td>
			<td>
			<input type="text" name="vlpago" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['vlpago'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data PAGO: </label>
			</td>
			<td>
			<input type="date" name="dtpago" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['dtpago'];?>">
			</td>
		</tr>
		

		<tr>
			<td colspan=2 align=left>
				<label for="password">Observação:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['obs'];?></textarea>
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