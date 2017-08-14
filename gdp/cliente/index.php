

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];






if($info != '')
{
require_once('clienteinfo.php'); 
	
}
else if($del != '')
{
require_once('clientedel.php'); 
	
}
else if($alt != '')
{
require_once('clientealt.php'); 
	
}
else if($cad == 1)
{
require_once('clienteformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('clienteformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('clienteformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('clienteformcad4.php'); 
	
}

else
{
require('gdp/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Clientes


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=gdp&bot=tes4&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#clienterels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('clienteformrel.php'); 


//formulario cadastro





//pesquisa

require_once('clientepesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('clientetabela.php'); 



}

?>


</article>