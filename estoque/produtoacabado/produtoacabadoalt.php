<?php



require_once('../../estoque/classalt.php'); 

$colunasql[0][0] = 'nota'; //variavel
$colunasql[0][1] = 'obg'; //obg
$colunasql[0][2] = 'NOTA'; //sql


$colunasql[1][0] = 'pedido'; //variavel
$colunasql[1][1] = 'obg'; //obg
$colunasql[1][2] = 'PEDIDO'; //sql


$colunasql[2][0] = 'cont_fisco'; //variavel
$colunasql[2][1] = 'obg'; //obg
$colunasql[2][2] = 'CONT_FISCO'; //sql


$colunasql[3][0] = 'serie'; //variavel
$colunasql[3][1] = 'obg'; //obg
$colunasql[3][2] = 'SERIE'; //sql



$colunasql[4][0] = 'pagina'; //variavel
$colunasql[4][1] = 'obg'; //obg
$colunasql[4][2] = 'PAGINA'; //sql



$colunasql[5][0] = 'nt_op'; //variavel
$colunasql[5][1] = 'obg'; //obg
$colunasql[5][2] = 'NAT_OP'; //sql



$colunasql[6][0] = 'nfe'; //variavel
$colunasql[6][1] = 'obg'; //obg
$colunasql[6][2] = 'CH_NFE'; //sql



$colunasql[7][0] = 'dt_emi'; //variavel
$colunasql[7][1] = 'obg'; //obg
$colunasql[7][2] = 'DT_EMISSAO'; //sql



$colunasql[8][0] = 'dt_sai'; //variavel
$colunasql[8][1] = 'obg'; //obg
$colunasql[8][2] = 'DT_SAIDA'; //sql



$colunasql[9][0] = 'hr_sai'; //variavel
$colunasql[9][1] = 'obg'; //obg
$colunasql[9][2] = 'HR_SAIDA'; //sql






$formalt = new classalt();
$formalt->alt('EPA_', 'estoque','tes2','produtoacabado', 'entradapa' , $colunasql);



require_once('../../estoque/tmp/alt.php'); 	

?>