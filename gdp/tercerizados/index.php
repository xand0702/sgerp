

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];






if($info != '')
{
require_once('tercerizadosinfo.php'); 
	
}
else if($del != '')
{
require_once('tercerizadosdel.php'); 
	
}
else if($alt != '')
{
require_once('tercerizadosalt.php'); 
	
}
else if($cad == 1)
{
require_once('tercerizadosformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('tercerizadosformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('tercerizadosformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('tercerizadosformcad4.php'); 
	
}

else
{
require('gdp/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Tercerizados


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=gdp&bot=tes6&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#tercerizadosrels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('tercerizadosformrel.php'); 


//formulario cadastro





//pesquisa

require_once('tercerizadospesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('tercerizadostabela.php'); 



}

?>


</article>