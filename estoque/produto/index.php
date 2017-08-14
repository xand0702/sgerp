

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];





if($info != '')
{
require_once('produtoinfo.php'); 
	
}
else if($del != '')
{
require_once('produtodel.php'); 
	
}
else if($alt != '')
{
require_once('produtoalt.php'); 
	
}

else
{
require('estoque/corpo.php');


			








$cliente = new classcorpo();
$cliente->corpo('Produtos','produtocad','produtorels','produto','produto','produtopesquisa.php');
?>

















<?php


//formulario cadastro

require_once('produtoformrel.php'); 


//formulario cadastro

require_once('produtoformcad.php'); 


//pesquisa

require_once('produtopesquisa.php'); 


	

	//tabela



require_once('produtotabela.php'); 



}

?>


