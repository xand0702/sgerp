

<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigof']").blur(function(){
			var nome = $("input[name='nome']");
			var cpf = $("input[name='cpf']");

			
			
 
			$( nome ).val('Carregando...');
			$( cpf ).val('Carregando...');

			
 
				$.getJSON(
					"comprar/pedido/ch_funcionario.php",
					{ codigo: $( this ).val() },
					function( json )
					{
						$( nome ).val( json.nome );
						$( cpf ).val( json.doc );

					}
				);
		});
	});
	</script>




<?php

//print_r($_SESSION[])

?>
<article style="padding-bottom: 100%">	

     <div align="center" class="modal-header">
        
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#">Passo 1</a></li>
			<li role="presentation"><a href="#">Passo 2</a></li>
			<li role="presentation"><a href="#">Passo 3</a></li>
			
		</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod=com&bot=tes1&cad=2" method="post">



		<fieldset>
	

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Escolha o Pedido</h4>
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Escolha: </label>
			</td>
			<td align=left>
			
			<label class="radio-inline"><input type="radio" value="P.A."  name="tip_m" id="codigo">Produto Acabado</label>
			<label class="radio-inline"><input type="radio" value="M.C." name="tip_m" id="codigo">Material de Consumo</label>
			<label class="radio-inline"><input type="radio" value="sv" name="tip_m" id="codigo">Serviço</label>
			
			</td>
		</tr>
		</table>

<br><hr>

	
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira o código do Funcionário</h4>
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Código: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigo" name="codigof" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=gdp&bot=tes3">Consulta</a>
			</td>
		</tr>
		</table>
		
<hr>
<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" id="nome" name="nome" class="form-control" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="cpf" class="form-control" disabled>
			</td>
		</tr>
		

	</table>
</fieldset>
		
		
		
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
	  	</form>	
