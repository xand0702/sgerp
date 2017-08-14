<?php


class classcad21



{
	
	
	
	
	
		function databr($data)
		{
			if($data == null)
			{
				return " - ";
			}
			else
			{
				$dt = explode("-", $data);
				$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
				return $dtimp;
			}
		}
	
	
			
function cad21($mod ,$dir, $tes, $subdir, $tit)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("".$dir."/".$subdir."/tmp/cad2.php", "w+");

	$escrever = 	'
	
	
	


	<?php


		function moeda($moeda)
		{
			if($moeda == \'\')
				$moeda = 0;
		$md = @number_format($moeda, 2, \',\', \' \');
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
		$("input[name=\'codigop\']").blur(function(){
			var nome = $("input[name=\'nome\']");
			var id = $("input[name=\'id\']");
			var codpro = $("input[name=\'codpro\']");
			var icms = $("input[name=\'icms\']");
			var ipi = $("input[name=\'ipi\']");
			var quant = $("input[name=\'quant\']");
			var idpro = $("input[name=\'idpro\']");
			var vlr = $("input[name=\'vlr\']");
			
			
			
			
 
			$( nome ).val(\'Carregando...\');
			$( quant ).val(\'Carregando...\');
			
			

			
 
				$.getJSON(
					"vendas/'.$subdir.'/ch_produto.php",
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

	
	

<form name="form1" action="vendas/'.$subdir.'/cad2insere.php" method="post">		
	<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira dados da '.$tit.'</h4>
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

';


$escrever .= '

	



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
		
		
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad21		
			
			
			
} //fim class
?>			

		
