<?php


class classcad20



{	
	
			
function cad20($dir ,$subdir)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("".$dir."/".$subdir."/tmp/cad2.php", "a+");

	$escrever = 	'
	
	
	

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

$conta = count(@$_SESSION[\'itens\']);

//print_r(@$_SESSION[\'itens\'][0]);
 for($i=0;$i < $conta; $i++)
 {

$icms = @$_SESSION[\'itens\'][$i][7];
$ipi = @$_SESSION[\'itens\'][$i][8];
$total = @$_SESSION[\'itens\'][$i][10];



$icms = ($icms/100)*$total;
$ipi = ($ipi/100)*$total
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION[\'itens\'][$i][0]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][3]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][4]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][9]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][6]; ?></td>
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
		<td><?php echo moeda(@$_SESSION[\'vendas\'][\'total\']);?></td>
</table>
	
<a href="'.$dir.'/'.$subdir.'/limpa.php">LIMPA</a>
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
}	//fim função cad20		
			
			
			
} //fim class