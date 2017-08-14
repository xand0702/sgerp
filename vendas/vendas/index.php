

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];







if($info != '')
{
require_once('vendasinfo.php'); 
	
}
else if($del != '')
{
require_once('vendasdel.php'); 
	
}
else if($altn != '')
{
require_once('vendasaltn.php'); 
	
}
else if($alt != '')
{
require_once('vendasalt.php'); 
	
}
else if($cad == 1)
{
require_once('vendasformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('vendasformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('vendasformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('vendasformcad4.php'); 
	
}
else if($cad == 5)
{
require_once('vendasformcad5.php'); 
	
}

else
{
require('vendas/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Vendas


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=ven&bot=tes1&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#vendasrels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('vendasformrel.php'); 


//formulario cadastro





//pesquisa

require_once('vendaspesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('vendastabela.php'); 



}

?>


</article>