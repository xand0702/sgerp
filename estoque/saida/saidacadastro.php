<?php
session_start();

require('../../estoque/saida/cad.php'); 



if(@$_SESSION['saida']['tip_m'] == 'P.A.')
{


$sql[0] = "COD_FUN";


$variavel[0] = "cod_fun";


$saipa = new classcad();
$saipa->cad('SPA_', 'est','tes4','saida', 'saidapa', $variavel, $sql);


}
elseif(@$_SESSION['saida']['tip_m'] == 'M.C.')
{
$sql[0] = "COD_FUN";


$variavel[0] = "cod_fun";


$saimc = new classcad();
$saimc->cad('SMC_', 'est','tes4','saida', 'saidamc', $variavel, $sql);
	
	
}




require('../../estoque/saida/tmp/cad.php'); 



?>