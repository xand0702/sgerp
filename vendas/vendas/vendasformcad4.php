		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

require_once('vendas/vendas/classcad4.php'); 



if(@$_SESSION['vendas']['pgmto'] == '')
{
	$pag = @$_POST['pag'];
	$_SESSION['vendas']['pgmto'] = $pag;
	
	
}
else
{
	$pag = $_SESSION['vendas']['pgmto'];
	
}	


if($pag == '')
{
		ok('Insira campo obrigatorio');
		echo '<script>window.location="index.php?mod=ven&bot=tes1&cad=3"</script>';
	
}	







if($pag == 'avista')
{
?>

<article style="padding-bottom: 100%">	

     <div align="center" class="modal-header">
        
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation"><a href="#">Passo 1</a></li>
			<li role="presentation"><a href="#">Passo 2</a></li>
			<li role="presentation"><a href="#">Passo 3</a></li>
			<li role="presentation" class="active"><a href="#">Passo 4</a></li>
			<li role="presentation"><a href="#">Passo 5</a></li>
			
		</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod=ven&bot=tes1&cad=5" method="post">



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
			
			<label class="radio-inline"><input type="radio" value="dinheiro"  name="pagav" id="codigo">Dinheiro</label>
			<label class="radio-inline"><input type="radio" value="debito" name="pagav" id="codigo">Débito</label>
			
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Desconto</label>
			</td>
			<td align=left>
			<input type="text" name="desc" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
			
			
		</tr>
		
		<tr>
			<td align=right>
			<label>Motivo Desconto</label>
			</td>
			<td align=left>
			<input type="text" name="m_desc" class="form-control" placeholder="Preenchimento Obrigatório">
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







<?php	
}
elseif($pag == 'parcelado')
{

$pagamento[0][0] = 'Entrada'; 									//label
$pagamento[0][1] = 'text'; 									//type
$pagamento[0][2] = 'entrada'; 									//name
$pagamento[0][3] = 'placeholder="Preenchimento Obrigatório"'; 	//placeholder="Preenchimento Obrigatório"

$pagamento[1][0] = 'Nº de Parcelas';							//label
$pagamento[1][1] = 'number'; 									//type
$pagamento[1][2] = 'n_p'; 										//name
$pagamento[1][3] = 'placeholder="Preenchimento Obrigatório"'; 	//placeholder="Preenchimento Obrigatório"

$pagamento[2][0] = 'Taxa de Juros'; 							//label
$pagamento[2][1] = 'text'; 									//type
$pagamento[2][2] = 'txj'; 										//name
$pagamento[2][3] = 'placeholder="Preenchimento Obrigatório"'; 	//placeholder="Preenchimento Obrigatório"

$pagamento[3][0] = 'Desconto';									//label
$pagamento[3][1] = 'text'; 									//type
$pagamento[3][2] = 'desc'; 										//name
$pagamento[3][3] = 'placeholder="Preenchimento Obrigatório"'; 	//placeholder="Preenchimento Obrigatório"

$pagamento[4][0] = 'Motivo Desconto';							//label
$pagamento[4][1] = 'text'; 										//type
$pagamento[4][2] = 'm_desc';									//name
$pagamento[4][3] = 'placeholder="Preenchimento Obrigatório"'; 	//placeholder="Preenchimento Obrigatório"





$cad2pp = new classcad4();
$cad2pp->cad4('ven', 'vendas', 'tes1', 'vendas', 'Pagamento', $pagamento);


require('vendas/vendas/tmp/cad4.php'); 		

}



?>