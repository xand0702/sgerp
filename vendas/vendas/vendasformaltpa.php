



		<!-- Modal -->
  <div class="modal fade" id="vendasaltpa<?php echo @$row['id']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Produto</h4>
        </div>
        <div class="modal-body">








<form action="vendas/vendas/vendasaltpa.php" method="post">

<input type="hidden" value="<?php echo @$row['id']; ?>" name="id">
<input type="hidden" value="<?php echo @$row['material']; ?>" name="material">


		<fieldset>

			
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		
		<tr>
			<td align=right>
			<label>Produto:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="codpro" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['codpro'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Nota:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="nota" 
			
class="form-control" placeholder="Preenchimento Obrigatório" disabled 
value="<?php echo @$row['nota'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Descriçao:

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
			<label>Quantidade:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="quant" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['quant'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Preço:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="valor" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['valor'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>UN:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="un" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['un'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>CST:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="cst" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['cst'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>CFOP:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="cfop" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['cfop'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>NCMSH:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="ncmsh" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['ncmh'];?>">
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
	
