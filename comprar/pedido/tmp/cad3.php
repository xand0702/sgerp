<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

$id = $_SESSION['pedido']['cod_cli'];



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
    <li role="presentation" class="active"><a href="#">Passo 3</a></li>
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






<?php


if($_SESSION['pedido']['tip_m'] == 'P.A.' || $_SESSION['pedido']['tip_m'] == 'M.C.')
{


?>




		
<div  class="label6" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Cód. For.</b></td>
			<td><b>Fornecedor</b></td>
			<td><b>Cód. Prod.</b></td>
			<td><b>Produto</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Valor/UN</b></td>
			<td><b>Data Entrega*</b></td>
			
		
		</tr>		
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][6]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][11]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][15]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][3]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][4]); ?></td>
			<td><?php echo classcad31::databr(@$_SESSION['itens'][$i][5]); ?></td>
			
			
		</tr>	
		</tr>	
<?php

 }
?>		
	</table>
	
</div>	




<?php

}
elseif($_SESSION['pedido']['tip_m'] == 'sv')
{
?>








		
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

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][1]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][4]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][5]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][6]); ?></td>
			<td><?php echo classcad31::databr(@$_SESSION['itens'][$i][7]); ?></td>
			
			
		</tr>	
<?php

 }
?>		
	</table>
	
</div>	













<?php


}

?>

		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>




<hr>


<form enctype="multipart/form-data" name="form2" action="comprar/pedido/pedidocadastro.php" method="post">


		<<hr>
		
		
	
	
	