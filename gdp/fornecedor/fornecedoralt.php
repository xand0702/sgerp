<?php



require_once('../../gdp/classalt.php'); 

$colunasql[0][0] = 'vend'; //variavel
$colunasql[0][1] = 'obg'; //obg
$colunasql[0][2] = 'VENDEDOR'; //sql


$colunasql[1][0] = 'limite'; //variavel
$colunasql[1][1] = 'obg'; //obg
$colunasql[1][2] = 'LIMITE'; //sql


$colunasql[3][0] = 'venc'; //variavel
$colunasql[3][1] = 'obg'; //obg
$colunasql[3][2] = 'VENCIMENTO'; //sql


$colunasql[2][0] = 'gerente'; //variavel
$colunasql[2][1] = ''; //obg
$colunasql[2][2] = 'GERENTE'; //sql





$formalt = new classalt();
$formalt->alt('FOR_', 'gdp','tes5','fornecedor' , $colunasql);



require_once('../../gdp/tmp/alt.php'); 	

?>