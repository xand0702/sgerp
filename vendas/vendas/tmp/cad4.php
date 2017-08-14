
	
	
<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
	<li role="presentation" class="active"><a href="#">Passo 4</a></li>
	<li role="presentation"><a href="#">Passo 5</a></li>
	
</ul>		
		
      </div>		
				


		<fieldset>
	

		
	
	

<form name="form1" action="index.php?mod=ven&bot=tes1&cad=5" method="post">		
	<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira dados do Pagamento</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
	</table>


		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		
		<tr>
			<td align=right>
			<label>Escolha: </label>
			</td>
			<td align=left>
			
			<label class="radio-inline"><input type="radio" value="boleto"  name="pagav" id="codigo">Boleto</label>
			<label class="radio-inline"><input type="radio" value="cc" name="pagav" id="codigo">Cartão de Crédito</label>
			<label class="radio-inline"><input type="radio" value="cheque" name="pagav" id="codigo">Cheque</label>
			
			</td>
		</tr>
		
		</table>
<br>
		
		
			<table align=center border=0 cellspacing=5 cellpadding=5>	
		
		

		<tr>
			<td align=right>
			<label>Entrada: </label>
			</td>
		
			<td align=left>
			<input type="text"
		
		name="entrada" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Nº de Parcelas: </label>
			</td>
		
			<td align=left>
			<input type="number"
		
		name="n_p" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Taxa de Juros: </label>
			</td>
		
			<td align=left>
			<input type="text"
		
		name="txj" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Desconto: </label>
			</td>
		
			<td align=left>
			<input type="text"
		
		name="desc" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Motivo Desconto: </label>
			</td>
		
			<td align=left>
			<input type="text"
		
		name="m_desc" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
				
		<tr>
			<td align=right>
			<label>Valor: </label>
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
		
		
		
		
		
		
	<br>

<div> 
<table border=0 valign=top width=100%>

	<tr>
		<td align=left colspan=2>
		
      <div class="modal-footer">
        <button type="submit" value="form1 onClick="document.form1.submit()" class="btn btn-default">Próximo</button>
      </div>
			
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>

</form>

<hr>
		
		
	
	