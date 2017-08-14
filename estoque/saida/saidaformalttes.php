



		<!-- Modal -->
  <div class="modal fade" id="saidaalt<?php echo @$row['SAI_CODIGO']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Nota</h4>
        </div>
        <div class="modal-body">








<form action="estoque/saida/saidaalt.php" method="post">

<input type="hidden" value="<?php echo @$row['SAI_CODIGO']; ?>" name="id">

		<fieldset>

			
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

		
		<tr>
			<td align=right>
			<label>Nota:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="nota" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_NOTA'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Pedido:

			: </label>
			</td>
			<td align=left>
			<input type="number" name="pedido" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_PEDIDO'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Controle do fisco:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="cont_fisco" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_CONT_FISCO'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Série:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="serie" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_SERIE'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Série:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="serie" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_SERIE'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Página:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="pagina" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_PAGINA'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Natureza da Operação:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="nt_op" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_NAT_OP'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>NFE:

			: </label>
			</td>
			<td align=left>
			<input type="text" name="nfe" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_CH_NFE'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Data da Emissão:

			: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_emi" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_DT_EMISSAO'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Data da Saída:

			: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_sai" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_DT_SAIDA'];?>">
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Hora da Saída:

			: </label>
			</td>
			<td align=left>
			<input type="time" name="hr_sai" 
			
class="form-control" placeholder="Preenchimento Obrigatório" 
value="<?php echo @$row['SAI_HR_SAIDA'];?>">
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['SAI_OBSERVACAO'];?></textarea>
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
	
