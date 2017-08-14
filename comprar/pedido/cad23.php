<?php



class classcad23



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
	
	
	
			
function cad23($dir, $tes, $subdir, $tit, $dados)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("comprar/pedido/tmp/cad23.php", "w+");

	$escrever = 	'
	
	
	


	<?php


		function moeda($moeda)
		{
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
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name=\'codigot\']").blur(function(){
			var nome = $("input[name=\'nome\']");
			var cod = $("input[name=\'cod\']");
			var fab = $("input[name=\'fab\']");
			
			
			
 
			$( nome ).val(\'Carregando...\');
			$( fab ).val(\'Carregando...\');
			
			

			
 
				$.getJSON(
					"comprar/'.$subdir.'/ch_tercerizado.php",
					{ codigo: $( this ).val() },
					
					function( json )
					{
						$( nome ).val( json.nome );
						$( cod ).val( json.cod );
						$( fab ).val( json.fab );
						
					}
				);
		});
	});
	</script>

	
	

<form name="form1" action="comprar/'.$subdir.'/cad23insere.php" method="post">		
	

';

$escrever .= '
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados do '.$tit.'</h4>
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
		';
		
		
		$conta = count($dados);
		
		for($i=0; $i < $conta; $i++)
		{
			$cont = count($dados[0]);
			for($x=0; $x < $cont; $x++)
			{
				$cadt[$x] = $dados[$i][$x];
			}
			
		$y = 0;
		$escrever .= '
		<tr>
			<td align=right>
			<label>'.$cadt[$y].': </label>
			</td>
		';
		$y++;
		$escrever .= '
			<td align=left>
			<input type="'.$cadt[$y].'"
		';
		$y++;
		$escrever .= '
		name="'.$cadt[$y].'" 
		';
		$y++;
		$escrever .= '
		class="form-control" '.$cadt[$y].'>
			</td>
		</tr>
		';
			
		}
		
		
		$escrever .= '

		
		</table>
		
		
	
	';

$escrever .= '

	



		<input type="hidden" id="codigo" name="cod" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Código do Tercerizado: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigot" name="codigot" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=gdp&bot=tes6">Consulta</a>
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
			<label>Documento: </label>
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
		
			<td><b>Cód. Ter.</b></td>
			<td><b>Tercerizado</b></td>
			<td><b>Documento</b></td>
			<td><b>Tempo</b></td>
			<td><b>Preço</b></td>
			<td><b>Data Início</b></td>
		
			
		
		</tr>	
<?php

$conta = count(@$_SESSION[\'itens\']);

//print_r(@$_SESSION[\'itens\'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION[\'itens\'][$i][1]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][2]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][4]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][5]; ?></td>
			<td><?php echo moeda(@$_SESSION[\'itens\'][$i][6]); ?></td>
			<td><?php echo classcad23::databr(@$_SESSION[\'itens\'][$i][7]); ?></td>
			
			
		</tr>	
<?php

 }
?>		
	</table>
	
<a href="comprar/'.$subdir.'/limpa.php">LIMPA</a>
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

		
		
		
		
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad21		
			
			
			
} //fim class

?>