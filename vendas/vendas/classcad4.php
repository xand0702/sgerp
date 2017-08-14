<?php


class classcad4



{
	
	
	
	
	
	
			
function cad4($mod ,$dir, $tes, $subdir, $tit, $dados)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("".$dir."/".$subdir."/tmp/cad4.php", "w+");

	$escrever = 	'
	
	
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
	

		
	
	

<form name="form1" action="index.php?mod='.$mod.'&bot='.$tes.'&cad=5" method="post">		
	<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira dados do '.$tit.'</h4>
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
		<tr>
			<td align=right>
			<label>Valor: </label>
			</td>
			<td align=left>
			
			<label><?php
			
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, \',\', \' \');
		$md = "R$ ".$md;
		echo $md;
		}

			
			
			
			moeda(@$_SESSION[\'vendas\'][\'total\']);
			
			
			
			?></label>
			
			</td>
		</tr>
	';	
		

$escrever .= '		
		
		
		
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
		
		
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad21		
			
			
			
} //fim class
?>			

		
