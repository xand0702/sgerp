



		<!-- Modal -->
  <div class="modal fade" id="vendasalt<?php echo @$row['id']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Venda</h4>
        </div>
        <div class="modal-body">








<form action="ven/vendas/vendasalt.php" method="post">

<input type="hidden" value="<?php echo @$row['id']; ?>" name="id">
<input type="hidden" value="<?php echo @$row['material']; ?>" name="material">


		<fieldset>

			
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		
		<tr>
			<td align=right>
			<label>Código Cliente:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="codcli" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['codcli'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Nome:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="nome" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['nome'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>NOTA:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="nota" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['nota'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Pagamento:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="fpgmt" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['fpgmt'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Forma de Pagamento:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="mpgmt" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['mpgmt'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Valor da Nota:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vlnota" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['vlnota'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Valor à Pagar:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vlpagar" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['vlpagar'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Valor Pago:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vlpago" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['vlpago'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Transporte:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="trnp" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['trnp'];?>">
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
	
