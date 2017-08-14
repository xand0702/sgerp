 
		<!-- Modal -->
  <div class="modal fade" id="funcinarioaltlogin<?php echo @$row['FUN_ID']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Login e Senha</h4>
        </div>
        <div class="modal-body">








<form action="gdp/funcionario/funcinarioaltlogin.php" method="post">

<input type="hidden" value="<?php echo @$row['FUN_ID']; ?>" name="id">

		<fieldset>

		
	
<table align=center border=0 cellspacing=5 cellpadding=5>		
		

<tr>
			<td align=right>
			<label>Usuario: </label>
			</td>
			<td align=left>
			<input type="text" name="usuario" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_USUARIO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Senha: </label>
			</td>
			<td align=left>
			<input type="password" name="pass" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['FUN_SENHA'];?>">
			</td>
		</tr>
		<tr>
			<td class=tabinfo1><label>Nivel de Acesso: </label></td>
			<td class=tabinfo2>
	
			
			<select class="selectpicker" data-live-search="true" name="n_acess">
			

			
<?php
$ni = "

SELECT f.FUN_NIVEL id
FROM funcinario f 
WHERE f.FUN_ID = ".$row['FUN_ID']."

";

$queryt = $conn->prepare($ni);

$queryt->execute();

$queryt = $queryt->fetch(PDO::FETCH_OBJ);

$dr = $queryt->id;

if($dr == 1)
{
	echo '
			<option value=1  selected >Administrador</option>
			<option value=2>Compras</option>
			<option value=3>Estoque</option>
			<option value=4>Vendas</option>
			<option value=5>GDP</option>
			<option value=6>Financeiro</option>
	';
}
elseif($dr == 2)
{
	echo '
			<option value=1>Administrador</option>
			<option value=2  selected >Compras</option>
			<option value=3>Estoque</option>
			<option value=4>Vendas</option>
			<option value=5>GDP</option>
			<option value=6>Financeiro</option>
	';
}
elseif($dr == 3)
{
	echo '
			<option value=1>Administrador</option>
			<option value=2>Compras</option>
			<option value=3  selected >Estoque</option>
			<option value=4>Vendas</option>
			<option value=5>GDP</option>
			<option value=6>Financeiro</option>
	';
}
elseif($dr == 4)
{
	echo '
			<option value=1>Administrador</option>
			<option value=2>Compras</option>
			<option value=3>Estoque</option>
			<option value=4  selected >Vendas</option>
			<option value=5>GDP</option>
			<option value=6>Financeiro</option>
	';
}
elseif($dr == 5)
{
	echo '
			<option value=1>Administrador</option>
			<option value=2>Compras</option>
			<option value=3>Estoque</option>
			<option value=4>Vendas</option>
			<option value=5  selected >GDP</option>
			<option value=6>Financeiro</option>
	';
}
elseif($dr == 6)
{
	echo '
			<option value=1>Administrador</option>
			<option value=2>Compras</option>
			<option value=3>Estoque</option>
			<option value=4>Vendas</option>
			<option value=5>GDP</option>
			<option value=6  selected >Financeiro</option>
	';
}


?>			
			</select>
			
			</td>
		</tr>		
		<tr>
			<td align=center colspan=2>
			&nbsp
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