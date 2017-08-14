<?php



require_once('classalt.php'); 

$colunasql[0][0] = 'quant'; //variavel
$colunasql[0][1] = 'obg'; //obg
$colunasql[0][2] = 'QUANTIDADE'; //sql


$colunasql[1][0] = 'valor'; //variavel
$colunasql[1][1] = 'obg'; //obg
$colunasql[1][2] = 'PRECOUN'; //sql


$colunasql[2][0] = 'un'; //variavel
$colunasql[2][1] = 'obg'; //obg
$colunasql[2][2] = 'UN'; //sql


$colunasql[3][0] = 'cst'; //variavel
$colunasql[3][1] = 'obg'; //obg
$colunasql[3][2] = 'CST'; //sql



$colunasql[4][0] = 'cfop'; //variavel
$colunasql[4][1] = 'obg'; //obg
$colunasql[4][2] = 'CFOP'; //sql



$colunasql[5][0] = 'ncmsh'; //variavel
$colunasql[5][1] = 'obg'; //obg
$colunasql[5][2] = 'NCMSH'; //sql







$formalt = new classalt();
$formalt->alt('IPA_', 'ven','tes1','vendas', 'itenspa' , $colunasql);
 


require_once('../../vendas/vendas/tmp/alt.php'); 	

?>