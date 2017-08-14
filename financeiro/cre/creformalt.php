



		<!-- Modal -->
  <div class="modal fade" id="crealt<?php echo @$row['idpar']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Parcela</h4>
        </div>
        <div class="modal-body">








<form action="financeiro/cre/crealt.php" method="post">

<input type="hidden" value="<?php echo @$row['idpar']; ?>" name="id">


		<fieldset>

			
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		
		<tr>
			<td align=right>
			<label>ID Parcela:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="idpar" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['idpar'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Cód. Cli.:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="clicod" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['clicod'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Cliente:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['nome'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Vl. Parcela:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vlpar" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['vlpar'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Dt. Pagamento:

			: </label>
			</td>
			<td align=left>
			<input type="date" name="dtpgmt" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['dtpgmt'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>PAGO:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="pago" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['pago'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Dt. Pago:

			: </label>
			</td>
			<td align=left>
			<input type="date" name="dtpago" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['dtpago'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Vl. Pago:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vlpago" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['vlpago'];?>">
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
	
