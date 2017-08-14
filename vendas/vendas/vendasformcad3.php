
<article style="padding-bottom: 100%">	

     <div align="center" class="modal-header">
        
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation"><a href="#">Passo 1</a></li>
			<li role="presentation"><a href="#">Passo 2</a></li>
			<li role="presentation" class="active"><a href="#">Passo 3</a></li>
			<li role="presentation"><a href="#">Passo 4</a></li>
			<li role="presentation"><a href="#">Passo 5</a></li>
			
		</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod=ven&bot=tes1&cad=4" method="post">



		<fieldset>
	

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Escolha a forma de Pagamento</h4>
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Escolha: </label>
			</td>
			<td align=left>
			
			<label class="radio-inline"><input type="radio" value="avista"  name="pag" id="codigo">À Vista</label>
			<label class="radio-inline"><input type="radio" value="parcelado" name="pag" id="codigo">Parcelado</label>
			
			</td>
		</tr>
		<tr>
			<td colspan=2>
			&nbsp
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Total: </label>
			</td>
			<td align=left>
			
			<label><?php
			
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		echo $md;
		}

			
			
			
			moeda(@$_SESSION['vendas']['total']);
			
			
			
			?></label>
			
			</td>
		</tr>
		</table>

	
</fieldset>
		
		
		
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
		</form>