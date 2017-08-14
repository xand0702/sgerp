

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];







if($info != '')
{
require_once('produtoacabadoinfo.php'); 
	
}
else if($del != '')
{
require_once('produtoacabadodel.php'); 
	
}
else if($altn != '')
{
require_once('produtoacabadoaltn.php'); 
	
}
else if($alt != '')
{
require_once('produtoacabadoalt.php'); 
	
}
else if($cad == 1)
{
require_once('produtoacabadoformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('produtoacabadoformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('produtoacabadoformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('produtoacabadoformcad4.php'); 
	
}

else
{
require('estoque/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Entrada Produtos Acabados


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=est&bot=tes2&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#produtoacabadorels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('produtoacabadoformrel.php'); 


//formulario cadastro





//pesquisa

require_once('produtoacabadopesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('produtoacabadotabela.php'); 



}

?>


</article>