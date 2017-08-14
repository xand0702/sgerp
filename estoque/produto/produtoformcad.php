

<!--   formulario cadastro pessoa fisica  -->
			
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="produtocad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro Produto</h4>
      </div>
      <div class="modal-body">
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<form enctype="multipart/form-data" action="estoque/produto/produtocadastro.php" method="post">



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
			<label>Abreviatura Desc: </label>
			</td>
			<td>
			<input type="text" name="a_desc" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Unidade: </label>
			</td>
			<td>
			<input type="text" name="uni" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Codigo de Barra: </label>
			</td>
			<td>
			<input type="number" name="barra" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Estoque Mínimo: </label>
			</td>
			<td>
			<input type="number" name="est_min" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque Critico: </label>
			</td>
			<td>
			<input type="number" name="est_crit" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Estoque Máximo: </label>
			</td>
			<td>
			<input type="number" name="est_max" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Fabricante: </label>
			</td>
			<td>
			<input type="text" name="fabricante" class="form-control">
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label>Marca: </label>
			</td>
			<td>
			<input type="text" name="marca" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Modelo: </label>
			</td>
			<td>
			<input type="text" name="modelo" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Categoria: </label>
			</td>
			<td>
			<input type="text" name="categoria" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Peso Bruto: </label>
			</td>
			<td>
			<input type="number" name="peso_b" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Peso Líquido: </label>
			</td>
			<td>
			<input type="number" name="peso_l" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Comprimento (m): </label>
			</td>
			<td>
			<input type="number" name="comprimento" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Largura (m): </label>
			</td>
			<td>
			<input type="number" name="largura" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Altura: </label>
			</td>
			<td>
			<input type="number" name="altura" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Grade: </label>
			</td>
			<td>
			<input type="text" name="grade" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Agrupamento: </label>
			</td>
			<td>
			<input type="text" name="agrup" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Dias de Garantia: </label>
			</td>
			<td>
			<input type="number" name="dia_gar" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Situração Tributária: </label>
			</td>
			<td>
			<input type="text" name="st_trib" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Substituição Tributária: </label>
			</td>
			<td>
			<input type="text" name="sb_trib" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Classifica Fiscal: </label>
			</td>
			<td>
			<input type="text" name="clas_fiscal" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Cofins: </label>
			</td>
			<td>
			<input type="number" name="cofins" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>IRPJ: </label>
			</td>
			<td>
			<input type="number" name="irpj" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>ICMS: </label>
			</td>
			<td>
			<input type="number" name="icms"  placeholder="Preenchimento Obrigatório" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>IPI: </label>
			</td>
			<td>
			<input type="number" name="ipi"  placeholder="Preenchimento Obrigatório" class="form-control">
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
