

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];





if($info != '')
{
require_once('pessoafisicainfo.php'); 
	
}
else if($del != '')
{
require_once('pessoafisicadel.php'); 
	
}
else if($alt != '')
{
require_once('pessoafisicaalt.php'); 
	
}

else
{
require('gdp/corpo.php');


			








$cliente = new classcorpo();
$cliente->corpo('Pessoas Física','pessoafisicacad','pessoafisicarels','pessoafisica','pessoafisica','pessoafisicapesquisa.php');
?>

















<?php


//formulario cadastro

require_once('pessoafisicaformrel.php'); 


//formulario cadastro

require_once('pessoafisicaformcad.php'); 


//pesquisa

require_once('pessoafisicapesquisa.php'); 


	

	//tabela



require_once('pessoafisicatabela.php'); 



}

?>


