<?php



require_once('gdp/classformalt.php'); 

$colunaalt[0][0] = 'Vendedor'; //label
$colunaalt[0][1] = 'text'; //type
$colunaalt[0][2] = 'vend'; //name
$colunaalt[0][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[0][4] = 'VENDEDOR'; //sql


$colunaalt[1][0] = 'Limite'; //label
$colunaalt[1][1] = 'number'; //type
$colunaalt[1][2] = 'limite'; //name
$colunaalt[1][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[1][4] = 'LIMITE'; //sql


$colunaalt[2][0] = 'Vencimento'; //label
$colunaalt[2][1] = 'date'; //type
$colunaalt[2][2] = 'venc'; //name
$colunaalt[2][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[2][4] = 'VENCIMENTO'; //sql


$colunaalt[3][0] = 'Gerente'; //label
$colunaalt[3][1] = 'text'; //type
$colunaalt[3][2] = 'gerente'; //name
$colunaalt[3][3] = ''; //obrigatorio
$colunaalt[3][4] = 'GERENTE'; //sql





$formalt = new classformalt();
$formalt->formalt('FOR_', 'gdp','tes5','fornecedor' ,'Fornecedor' , $colunaalt);



require_once('gdp/tmp/formalt.php'); 	

?>