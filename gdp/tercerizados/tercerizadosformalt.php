 
		<!-- Modal -->
  <div class="modal fade" id="tercerizadosalt<?php echo @$row['id']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Tercerizado</h4>
        </div>
        <div class="modal-body">








<form action="gdp/tercerizados/tercerizadosalt.php" method="post">

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
			<label>Finalidade: : </label>
			</td>
			<td align=left>
			<input type="text" name="fina" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_FINALIDADE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Custo: </label>
			</td>
			<td align=left>
			<input type="text" name="custo" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_CUSTO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data Vencimento: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_venc" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_DATA_VENC'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tempo: </label>
			</td>
			<td align=left>
			<input type="text" name="tempo" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_TEMPO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº de Pessoas: </label>
			</td>
			<td align=left>
			<input type="number" name="n_p" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_N_PESSOAS'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Data Início: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_ini" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_DATA_INI'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Data Fim: </label>
			</td>
			<td align=left>
			<input type="date" name="dt_fim" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['TER_DATA_FIM'];?>">
			</td>
		</tr>
		
		
		
		
		
		
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row['TER_OBSERVACAO'];?></textarea>
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