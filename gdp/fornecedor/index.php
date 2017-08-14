

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];






if($info != '')
{
require_once('fornecedorinfo.php'); 
	
}
else if($del != '')
{
require_once('fornecedordel.php'); 
	
}
else if($alt != '')
{
require_once('fornecedoralt.php'); 
	
}
else if($cad == 1)
{
require_once('fornecedorformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('fornecedorformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('fornecedorformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('fornecedorformcad4.php'); 
	
}

else
{
require('gdp/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Fornecedores


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=gdp&bot=tes5&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#fornecedorrels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('fornecedorformrel.php'); 


//formulario cadastro





//pesquisa

require_once('fornecedorpesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('fornecedortabela.php'); 



}

?>


</article>