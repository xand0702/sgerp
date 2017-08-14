

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];







if($info != '')
{
require_once('pedidoinfo.php'); 
	
}
else if($del != '')
{
require_once('pedidodel.php'); 
	
}
else if($altn != '')
{
require_once('pedidoaltn.php'); 
	
}
else if($alt != '')
{
require_once('pedidoalt.php'); 
	
}
else if($cad == 1)
{
require_once('pedidoformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('pedidoformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('pedidoformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('pedidoformcad4.php'); 
	
}

else
{
require('comprar/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Pedido


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=com&bot=tes1&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#pedidorels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('pedidoformrel.php'); 


//formulario cadastro





//pesquisa

require_once('pedidopesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('pedidotabela.php'); 



}

?>


</article>