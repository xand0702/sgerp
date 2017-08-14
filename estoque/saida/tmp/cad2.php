
	
	
	


	<?php


		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}	
		
		
		
	
?>
<?php if ($_SESSION['saida']['tip_m'] == 'P.A.')
{	

?>

<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation" class="active"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigop']").blur(function(){
			var nome = $("input[name='nome']");
			var id = $("input[name='id']");
			var cod = $("input[name='cod']");
			var icms = $("input[name='icms']");
			var ipi = $("input[name='ipi']");
			var fab = $("input[name='fab']");
			var idd = $("input[name='idd']");
			
			
			
			
 
			$( nome ).val('Carregando...');
			$( fab ).val('Carregando...');
			
			

			
 
				$.getJSON(
					"estoque/saida/ch_produtopa.php",
					{ codigo: $( this ).val() },
					
					function( json )
					{
						$( nome ).val( json.nome );
						$( id ).val( json.id );
						$( cod ).val( json.cod );
						$( icms ).val( json.icms );
						$( ipi ).val( json.ipi );
						$( fab ).val( json.fab );
						$( idd ).val( json.idd );
						
						
					}
				);
		});
	});
	</script>

	
	

<form name="form1" action="estoque/saida/cad2insere.php" method="post">		
	


		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados da Saída</h4>
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
		
		<tr>
			<td align=right>
			<label>Quantidade Saída: </label>
			</td>
		
			<td align=left>
			<input type="number"
		
		name="quant_sai" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Valor Venda: </label>
			</td>
		
			<td align=left>
			<input type="number"
		
		name="vl_venda" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		

		
		</table>
		
		
	
	

	



		<input type="hidden" id="codigo" name="img" value"$img">
		<input type="hidden" id="codigo" name="id" >
		<input type="hidden" id="codigo" name="cod" >
		<input type="hidden" id="codigo" name="icms" >
		<input type="hidden" id="codigo" name="ipi" >
		<input type="hidden" id="codigo" name="idd" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Insira o ID Item: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigop" name="codigop" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=est&bot=tes1">Consulta</a>
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
			<input type="text" id="nome" name="nome" class="form-control" >
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="fab" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>
	<hr>


<div> 
<table border=0 valign=top width=100%>

	<tr>
		<td width=50% align=right>
		<label></label>
		</td>
		<td align=left>
		
      <div class="modal-footer">
        <button type="submit" value="form1 onClick="document.form1.submit()" class="btn btn-default">Inserir</button>
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


<div> 
<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		
<div  class="label6" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Código</b></td>
			<td><b>Produto</b></td>
			<td><b>Quant. Saída</b></td>
			<td><b>Estoque</b></td>
			<td><b>Preço Compra</b></td>
			<td><b>Preço Venda</b></td>
		
		</tr>	
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][8]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][7]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][5]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][4]); ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][9]); ?></td>
			
			
		</tr>	
<?php

 }
?>		
	</table>
	
<a href="estoque/saida/limpa.php">LIMPA</a>
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table>
<?php

}

else
{	

?>

<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation" class="active"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigop']").blur(function(){
			var nome = $("input[name='nome']");
			var id = $("input[name='id']");
			var cod = $("input[name='cod']");
			var icms = $("input[name='icms']");
			var ipi = $("input[name='ipi']");
			var fab = $("input[name='fab']");
			var idd = $("input[name='idd']");
			
			
			
 
			$( nome ).val('Carregando...');
			$( fab ).val('Carregando...');
			
			

			
 
				$.getJSON(
					"estoque/saida/ch_produtomc.php",
					{ codigo: $( this ).val() },
					
					function( json )
					{
						$( nome ).val( json.nome );
						$( id ).val( json.id );
						$( cod ).val( json.cod );
						$( icms ).val( json.icms );
						$( ipi ).val( json.ipi );
						$( fab ).val( json.fab );
						$( idd ).val( json.idd );
						
					}
				);
		});
	});
	</script>

	
	

<form name="form1" action="estoque/saida/cad2insere.php" method="post">		
	


		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados da Saída</h4>
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
		
		<tr>
			<td align=right>
			<label>Quantidade Saída: </label>
			</td>
		
			<td align=left>
			<input type="number"
		
		name="quant_sai" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Valor Venda: </label>
			</td>
		
			<td align=left>
			<input type="number"
		
		name="vl_venda" 
		
		class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		

		
		</table>
		
		
	
	

	



		<input type="hidden" id="codigo" name="img" value"$img">
		<input type="hidden" id="codigo" name="id" >
		<input type="hidden" id="codigo" name="cod" >
		<input type="hidden" id="codigo" name="icms" >
		<input type="hidden" id="codigo" name="ipi" >
		<input type="hidden" id="codigo" name="idd" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Insira o ID Item: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigop" name="codigop" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=est&bot=tes1">Consulta</a>
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
			<input type="text" id="nome" name="nome" class="form-control" >
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="fab" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>
	<hr>


<div> 
<table border=0 valign=top width=100%>

	<tr>
		<td width=50% align=right>
		<label></label>
		</td>
		<td align=left>
		
      <div class="modal-footer">
        <button type="submit" value="form1 onClick="document.form1.submit()" class="btn btn-default">Inserir</button>
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


<div> 
<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		
<div  class="label6" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Código</b></td>
			<td><b>Produto</b></td>
			<td><b>Quant. Saída</b></td>
			<td><b>Estoque</b></td>
			<td><b>Preço Compra</b></td>
		
		</tr>	
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][8]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][7]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][5]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][4]); ?></td>
			
			
		</tr>	
<?php

 }
?>		
	</table>
	
<a href="estoque/saida/limpa.php">LIMPA</a>
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table>
<?php

}


?>
</div>




<hr>


		
		
		
		
	
	