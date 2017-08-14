

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];







if($info != '')
{
require_once('mcainfo.php'); 
	
}
else if($del != '')
{
require_once('mcadel.php'); 
	
}
else if($altn != '')
{
require_once('mcaaltn.php'); 
	
}
else if($alt != '')
{
require_once('mcaalt.php'); 
	
}
else if($cad == 1)
{
require_once('mcaformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('mcaformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('mcaformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('mcaformcad4.php'); 
	
}

else
{
require('estoque/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Entrada Materiais de Consumo


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=est&bot=tes3&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#mcarels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('mcaformrel.php'); 


//formulario cadastro





//pesquisa

require_once('mcapesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('mcatabela.php'); 



}

?>


</article>