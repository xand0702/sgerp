

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];





if($info != '')
{
require_once('pessoajuridicainfo.php'); 
	
}
else if($del != '')
{
require_once('pessoajuridicadel.php'); 
	
}
else if($alt != '')
{
require_once('pessoajuridicaalt.php'); 
	
}

else
{
require('gdp/corpo.php');


			








$cliente = new classcorpo();
$cliente->corpo('Pessoas Jurídica','pessoajuridicacad','pessoajuridicarels','pessoajuridica','pessoajuridica',
'pessoajuridicapesquisa.php');
?>

















<?php


//formulario relatorio

require_once('pessoajuridicaformrel.php'); 


//formulario cadastro

require_once('pessoajuridicaformcad.php'); 


//pesquisa

require_once('pessoajuridicapesquisa.php'); 


	

	//tabela



require_once('pessoajuridicatabela.php'); 



}

?>


