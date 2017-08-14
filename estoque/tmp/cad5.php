<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

$id = $_SESSION['saida']['cod_cli'];


if($_SESSION['saida']['cod_cli'] == '' ||

@$_SESSION['saida']['quant_sai'] == '' ||



@$_SESSION['saida']['vl_venda'] == ''
)

{
$id = $_SESSION['saida']['cod_cli'];

		
@$quant_sai = @$_POST['quant_sai'];



$vl_venda = @$_POST['vl_venda'];



	$id = $_SESSION['saida']['cod_cli'];
	
$_SESSION['saida']['quant_sai'] = $quant_sai;

	
	$_SESSION['saida']['vl_venda'] = $vl_venda;
}
	

else
	{
	$id = $_SESSION['saida']['cod_cli'];	
	
	
	
$quant_sai = $_SESSION['saida']['quant_sai'];



$vl_venda = $_SESSION['saida']['vl_venda'];
	
	}
	
$obs = @$_POST['obs'];

$_SESSION['saida']['obs'] = $obs;



if($quant_sai == '' || 


	$vl_venda == ''
	)
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="index.php?mod=est&bot=tes4&cad=3"</script>';
	
}	
	

?>


	<?php
	
	function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}	
	
?>
<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
    <li role="presentation" class="active"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	



<div> 
<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		
<div  class="label5" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Código</b></td>
			<td><b>Produto</b></td>
			<td><b>UN</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Preço/UN</b></td>
			<td><b>Total</b></td>
			<td><b>ICMS</b></td>
			<td><b>IPI</b></td>
		
		</tr>	
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 $total = @$_SESSION['itens'][$i][11] * @$_SESSION['itens'][$i][9];
	 $icms = (@$_SESSION['itens'][$i][3]/100) * $total;
	 $ipi = (@$_SESSION['itens'][$i][4]/100) * $total;
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][12]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][10]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][9]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][11]); ?></td>
			<td><?php echo moeda(@$total); ?></td>
			<td><?php echo moeda(@$icms); ?></td>
			<td><?php echo moeda(@$ipi); ?></td>
		
		</tr>	
<?php

 }
?>		
	</table>
	
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>




<hr>


<form enctype="multipart/form-data" name="form2" action="estoque/saida/saidacadastro.php" method="post">

<div class="fomrat007"> 
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Saida</h4>
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
			<td width=50%>
			<label>Quantidade da Saída: </label>
			</td>

			<td align=left>
			<?php echo " ".$quant_sai; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Valor de venda: </label>
			</td>

			<td align=left>
			<?php print moeda($vl_venda); ?>
			</td>
		</tr>






		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo " ".$obs; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			
			<td width=50% class=tabinfo3>
			<a href="index.php?mod=est&bot=tes4&cad=2">Alterar</a>
			
			</td>
		</tr>		
		</table>



	

</div>
		<<hr>
		
		
	
	
	