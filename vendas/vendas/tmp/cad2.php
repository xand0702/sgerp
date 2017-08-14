
	
	
	


	<?php


		function moeda($moeda)
		{
			if($moeda == '')
				$moeda = 0;
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}	
		
		
		
		
		


?>


<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation" class="active"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
	<li role="presentation"><a href="#">Passo 4</a></li>
	<li role="presentation"><a href="#">Passo 5</a></li>
	
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigop']").blur(function(){
			var nome = $("input[name='nome']");
			var id = $("input[name='id']");
			var codpro = $("input[name='codpro']");
			var icms = $("input[name='icms']");
			var ipi = $("input[name='ipi']");
			var quant = $("input[name='quant']");
			var idpro = $("input[name='idpro']");
			var vlr = $("input[name='vlr']");
			
			
			
			
 
			$( nome ).val('Carregando...');
			$( quant ).val('Carregando...');
			
			

			
 
				$.getJSON(
					"vendas/vendas/ch_produto.php",
					{ codigo: $( this ).val() },
					
					function( json )
					{
						$( nome ).val( json.nome );
						$( id ).val( json.id );
						$( codpro ).val( json.codpro );
						$( icms ).val( json.icms );
						$( ipi ).val( json.ipi );
						$( quant ).val( json.quant );
						$( idpro ).val( json.idpro );
						$( vlr ).val( json.vlr );
						
						
					}
				);
		});
	});
	</script>

	
	

<form name="form1" action="vendas/vendas/cad2insere.php" method="post">		
	<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira dados da Venda</h4>
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



	



		<input type="hidden" id="codigo" name="id" >
		<input type="hidden" id="codigo" name="idpro" >
		
		<input type="hidden" id="codigo" name="codpro" >
		<input type="hidden" id="codigo" name="icms" >
		<input type="hidden" id="codigo" name="ipi" >
		<input type="hidden" id="codigo" name="vlr" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Quantidade: </label>
			</td>
			<td align=left>
			
			<input type="number" id="quant_sai" name="quant_sai" class="form-control" placeholder="Preenchimento Obrigatório">
									
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Insira o ID Item Vend: </label>
			</td>
			<td align=left>
			
			<input type="number" id="codigop" name="codigop" class="form-control" placeholder="Preenchimento Obrigatório">
			
			
			</td>
		</tr>
		
		</table>
<hr>
<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Descrição: </label>
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
			<input type="text" id="telefone" name="quant" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>

<div> 
<table border=0 valign=top width=100%>

	<tr>
		<td align=left colspan=2>
		
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
		
			<td><b>ID Item Vend.</b></td>
			<td><b>Cód. Prod.</b></td>
			<td><b>Descrição</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Valor/UN</b></td>
			<td><b>ICMS</b></td>
			<td><b>IPI</b></td>
			<td><b>Total</b></td>
			
		
		</tr>	
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {

$icms = @$_SESSION['itens'][$i][7];
$ipi = @$_SESSION['itens'][$i][8];
$total = @$_SESSION['itens'][$i][10];



$icms = ($icms/100)*$total;
$ipi = ($ipi/100)*$total
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][0]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][3]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][4]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][9]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][6]; ?></td>
			<td><?php echo moeda(@$icms); ?></td>
			<td><?php echo moeda(@$ipi); ?></td>
			<td><?php echo moeda(@$total); ?></td>
			
			
		</tr>	
<?php

 }
?>		

	<tr>
		<td colspan=6>&nbsp</td>
		<td align=right>
			<label>Total: </label>
		</td>
		<td><?php echo moeda(@$_SESSION['vendas']['total']);?></td>
</table>
	
<a href="vendas/vendas/limpa.php">LIMPA</a>
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table>

</div>




<hr>




	