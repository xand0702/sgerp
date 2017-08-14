<?php



require_once('financeiro/cre/classformalt.php'); 

$colunaalt[0][0] = 'ID Parcela'; //label
$colunaalt[0][1] = 'text'; //type
$colunaalt[0][2] = 'idpar'; //name
$colunaalt[0][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[0][4] = 'idpar'; //sql


$colunaalt[1][0] = 'Cód. Cli.'; //label
$colunaalt[1][1] = 'text'; //type
$colunaalt[1][2] = 'clicod'; //name
$colunaalt[1][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[1][4] = 'clicod'; //sql


$colunaalt[2][0] = 'Cliente'; //label
$colunaalt[2][1] = 'text'; //type
$colunaalt[2][2] = 'nome'; //name
$colunaalt[2][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[2][4] = 'nome'; //sql


$colunaalt[3][0] = 'Vl. Parcela'; //label
$colunaalt[3][1] = 'text'; //type
$colunaalt[3][2] = 'vlpar'; //name
$colunaalt[3][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[3][4] = 'vlpar'; //sql

$colunaalt[4][0] = 'Dt. Pagamento'; //label
$colunaalt[4][1] = 'date'; //type
$colunaalt[4][2] = 'dtpgmt'; //name
$colunaalt[4][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[4][4] = 'dtpgmt'; //sql

$colunaalt[5][0] = 'PAGO'; //label
$colunaalt[5][1] = 'text'; //type
$colunaalt[5][2] = 'pago'; //name
$colunaalt[5][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[5][4] = 'pago'; //sql

$colunaalt[6][0] = 'Dt. Pago'; //label
$colunaalt[6][1] = 'date'; //type
$colunaalt[6][2] = 'dtpago'; //name
$colunaalt[6][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[6][4] = 'dtpago'; //sql

$colunaalt[7][0] = 'Vl. Pago'; //label
$colunaalt[7][1] = 'text'; //type
$colunaalt[7][2] = 'vlpago'; //name
$colunaalt[7][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[7][4] = 'vlpago'; //sql


$formalt = new classformalt();
$formalt->formalt('financeiro','tes1','cre' ,'Parcela' , $colunaalt);



require('financeiro/cre/tmp/formalt.php'); 	

?>