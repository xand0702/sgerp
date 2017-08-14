<?php



require_once('../../financeiro/cre/classalt.php'); 

$colunasql[0][0] = 'pago'; //variavel
$colunasql[0][1] = ''; //obg
$colunasql[0][2] = 'PAGO'; //sql


$colunasql[1][0] = 'dtpago'; //variavel
$colunasql[1][1] = ''; //obg
$colunasql[1][2] = 'DT_PAGO'; //sql


$colunasql[2][0] = 'vlpago'; //variavel
$colunasql[2][1] = ''; //obg
$colunasql[2][2] = 'VL_PAGO'; //sql






$formalt = new classalt();
$formalt->alt('VNG_', 'fin','tes1','cre', 'venpgmt' , $colunasql);
 


require('tmp/alt.php'); 	

?>