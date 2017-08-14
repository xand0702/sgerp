

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];







if($info != '')
{
require_once('saidainfo.php'); 
	
}
else if($del != '')
{
require_once('saidadel.php'); 
	
}
else if($altn != '')
{
require_once('saidaaltn.php'); 
	
}
else if($alt != '')
{
require_once('saidaalt.php'); 
	
}
else if($cad == 1)
{
require_once('saidaformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('saidaformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('saidaformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('saidaformcad4.php'); 
	
}

else
{
require('estoque/corpo.php');


			







?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Saída de Produto do Estoque


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
			<a href="index.php?mod=est&bot=tes4&cad=1">
				<button type="button" class="btn btn-lg btn-primary">Cadastro</button>
			</a>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#saidarels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('saidaformrel.php'); 


//formulario cadastro





//pesquisa

require_once('saidapesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('saidatabela.php'); 



}

?>


</article>