<?php


class classcad5



{
	
	

function cad5( $subdir, $codigo)
{


$fp = fopen("estoque/saida/tmp/cad5.php", "w+");



$escrever = "<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

\$id = \$_SESSION['".$subdir."']['".$codigo."'];

";
$escrever .= "

?>

";	



$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>



<?php





class classcad51



{
	
	
			
function cad51($dir, $tes, $subdir, $tit, $dados)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("estoque/saida/tmp/cad5.php", "a+");

	$escrever = 	'
	<?php
	
	function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
		
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
		
<div  class="label6" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Código</b></td>
			<td><b>Produto</b></td>
			<td><b>Quant. Saída</b></td>
			<td><b>Estoque</b></td>
			<td><b>Preço/UN</b></td>
		
		</tr>	
<?php

$conta = count(@$_SESSION[\'itens\']);

//print_r(@$_SESSION[\'itens\'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION[\'itens\'][$i][2]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][8]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][7]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][5]; ?></td>
			<td><?php echo moeda(@$_SESSION[\'itens\'][$i][4]); ?></td>
		
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


<form enctype="multipart/form-data" name="form2" action="estoque/'.$subdir.'/'.$subdir.'cadastro.php" method="post">


		<<hr>
		
		
	
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad41		
			
			
			
} //fim class
?>			

		
