
		<!-- Modal -->
  <div class="modal fade" id="fornecedoralt<?php echo @$row['id']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Fornecedor</h4>
        </div>
        <div class="modal-body">








<form action="gdp/fornecedor/fornecedoralt.php" method="post">

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
			<label>Vendedor:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="vend" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['FOR_VENDEDOR'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Limite:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="limite" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['FOR_LIMITE'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Vencimento:

			: </label>
			</td>
			<td align=left>
			<input type="date" name="venc" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['FOR_VENCIMENTO'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Gerente:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="gerente" 
			
class="form-control"  
value="<?php echo @$row['FOR_GERENTE'];?>">
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['FOR_OBSERVACAO'];?></textarea>
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
	
