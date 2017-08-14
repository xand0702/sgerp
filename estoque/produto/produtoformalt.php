
		<!-- Modal -->
  <div class="modal fade" id="produtoalt<?php echo @$row['PRO_ID']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Produto</h4>
        </div>
        <div class="modal-body">








<form action="estoque/produto/produtoalt.php" method="post">

<input type="hidden" value="<?php echo @$row['PRO_ID']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Descrição: </label>
			</td>
			<td align=left>
			<input type="text" name="desc" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PRO_DESCRICAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Abreviatura Desc: </label>
			</td>
			<td>
			<input type="text" name="a_desc" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PRO_AB_DESCRICAO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Unidade: </label>
			</td>
			<td>
			<input type="text" name="uni" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PRO_UNIDADE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Codigo de Barra: </label>
			</td>
			<td>
			<input type="number" name="barra" class="form-control" value="<?php echo @$row['PRO_COD_BARRA'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque Mínimo: </label>
			</td>
			<td>
			<input type="number" name="est_min" class="form-control" value="<?php echo @$row['PRO_EST_MIN'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque CrÍtico: </label>
			</td>
			<td>
			<input type="number" name="est_crit" class="form-control" value="<?php echo @$row['PRO_EST_CRIT'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque Máximo: </label>
			</td>
			<td>
			<input type="number" name="est_max" class="form-control" value="<?php echo @$row['PRO_EST_MAX'];?>">
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Fabricante: </label>
			</td>
			<td>
			<input type="text" name="fabricante" class="form-control" value="<?php echo @$row['PRO_FABRICANTE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Marca: </label>
			</td>
			<td>
			<input type="text" name="marca" class="form-control" value="<?php echo @$row['PRO_MARCA'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Modelo: </label>
			</td>
			<td>
			<input type="text" name="modelo" class="form-control" value="<?php echo @$row['PRO_MODELO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Categoria: </label>
			</td>
			<td>
			<input type="text" name="categoria" class="form-control" value="<?php echo @$row['PRO_CATEGORIA'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Peso Bruto: </label>
			</td>
			<td>
			<input type="number" name="peso_b" class="form-control" value="<?php echo @$row['PRO_PESO_BRUTO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Peso Líquido: </label>
			</td>
			<td>
			<input type="number" name="peso_l" class="form-control" value="<?php echo @$row['PRO_PESO_LIQ'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Comprimento (m): </label>
			</td>
			<td>
			<input type="number" name="comprimento" class="form-control" value="<?php echo @$row['PRO_COMPRIMENTO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Largura (m): </label>
			</td>
			<td>
			<input type="number" name="largura" class="form-control" value="<?php echo @$row['PRO_LARGURA'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Altura: </label>
			</td>
			<td>
			<input type="number" name="altura" class="form-control" value="<?php echo @$row['PRO_ALTURA'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Grade: </label>
			</td>
			<td>
			<input type="text" name="grade" class="form-control" value="<?php echo @$row['PRO_GRADE'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Agrupamento: </label>
			</td>
			<td>
			<input type="text" name="agrup" class="form-control" value="<?php echo @$row['PRO_AGRUPAMENTO'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Dias de Garantia: </label>
			</td>
			<td>
			<input type="number" name="dia_gar" class="form-control" value="<?php echo @$row['PRO_DIAS_GARANT'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Situração Tributária: </label>
			</td>
			<td>
			<input type="text" name="st_trib" class="form-control" value="<?php echo @$row['PRO_SIT_TRIB'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Substituição Tributária: </label>
			</td>
			<td>
			<input type="text" name="sb_trib" class="form-control" value="<?php echo @$row['PRO_SUB_TRIB'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Classificão Fiscal: </label>
			</td>
			<td>
			<input type="text" name="clas_fiscal" class="form-control" value="<?php echo @$row['PRO_CLASS_TRIB'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Cofins: </label>
			</td>
			<td>
			<input type="number" name="cofins" class="form-control" value="<?php echo @$row['PRO_COFINS'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>IRPJ: </label>
			</td>
			<td>
			<input type="number" name="irpj" class="form-control" value="<?php echo @$row['PRO_IRPJ'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>ICMS: </label>
			</td>
			<td>
			<input type="number" name="icms" class="form-control"  placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PRO_ICMS'];?>">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>IPI: </label>
			</td>
			<td>
			<input type="number" name="ipi" class="form-control"  placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PRO_IPI'];?>">
			</td>
		</tr>
		

		<tr>
			<td colspan=2 align=left>
				<label for="password">Observação:</label>
			</td>
		</tr>
		<tr>
			<td colspan=2>
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"><?php echo @$row['PRO_OBSERVACAO']; ?></textarea>
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