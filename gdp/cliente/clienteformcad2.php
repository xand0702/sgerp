<?php

$pessoa = $_POST['codigo'];

@$_SESSION['cliente']['cod_cli'] = '';

if(@$_SESSION['cliente']['pessoa'] == 'pf')
	@$_SESSION['cliente']['pessoa'] = $pessoa;
elseif(@$_SESSION['cliente']['pessoa'] == 'pj')
	@$_SESSION['cliente']['pessoa'] = $pessoa;
elseif(@$_SESSION['cliente']['pessoa'] == '')
	@$_SESSION['cliente']['pessoa'] = $pessoa;


if($_SESSION['cliente']['pessoa'] == "pf")
{

?>


<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigo']").blur(function(){
			var nome = $("input[name='nome']");
			var cpf = $("input[name='cpf']");

			
			
 
			$( nome ).val('Carregando...');
			$( cpf ).val('Carregando...');

			
 
				$.getJSON(
					"gdp/cliente/ch_pessoafisica.php",
					{ codigo: $( this ).val() },
					function( json )
					{
						$( nome ).val( json.nome );
						$( cpf ).val( json.cpf );

					}
				);
		});
	});
	</script>





<article style="padding-bottom: 100%">	

     <div align="center" class="modal-header">
        
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation"><a href="#">Passo 1</a></li>
			<li role="presentation" class="active"><a href="#">Passo 2</a></li>
			<li role="presentation"><a href="#">Passo 3</a></li>
			<li role="presentation"><a href="#">Passo 4</a></li>
			
		</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod=gdp&bot=tes4&cad=3" method="post">



		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira o código da Pessoa Física</h4>
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Código: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigo" name="codigo" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=gdp&bot=tes1">Consulta</a>
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
<?php

}
else
{

?>





<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigo']").blur(function(){
			var nome = $("input[name='nome']");
			var cnpj = $("input[name='cnpj']");

			
			
 
			$( nome ).val('Carregando...');
			$( cnpj ).val('Carregando...');

			
 
				$.getJSON(
					"gdp/cliente/ch_pessoajuridica.php",
					{ codigo: $( this ).val() },
					function( json )
					{
						$( nome ).val( json.nome );
						$( cnpj ).val( json.cnpj );

					}
				);
		});
	});
	</script>



<article style="padding-bottom: 100%">	

     <div align="center" class="modal-header">
        
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation"><a href="#">Passo 1</a></li>
			<li role="presentation" class="active"><a href="#">Passo 2</a></li>
			<li role="presentation"><a href="#">Passo 3</a></li>
			<li role="presentation"><a href="#">Passo 4</a></li>
			
		</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod=gdp&bot=tes4&cad=3" method="post">



		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira o código da Pessoa Jurídica</h4>
			</td>
			
		</tr>
		<tr>
			<td align=right>
			<label>Código: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigo" name="codigo" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=gdp&bot=tes2">Consulta</a>
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
			<label>CNPJ: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="cnpj" class="form-control" disabled>
			</td>
		</tr>
		

	</table>
</fieldset>
		
		
		
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
	  	</form>	
<?php	

}


?>

