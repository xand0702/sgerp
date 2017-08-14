<?php



require('vendas/vendas/classformalt.php'); 

$colunaalt[0][0] = 'Código Cliente'; //label
$colunaalt[0][1] = 'text'; //type
$colunaalt[0][2] = 'codcli'; //name
$colunaalt[0][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[0][4] = 'codcli'; //sql


$colunaalt[1][0] = 'Nome'; //label
$colunaalt[1][1] = 'number'; //type
$colunaalt[1][2] = 'nome'; //name
$colunaalt[1][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[1][4] = 'nome'; //sql


$colunaalt[2][0] = 'NOTA'; //label
$colunaalt[2][1] = 'text'; //type
$colunaalt[2][2] = 'nota'; //name
$colunaalt[2][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[2][4] = 'nota'; //sql


$colunaalt[3][0] = 'Pagamento'; //label
$colunaalt[3][1] = 'number'; //type
$colunaalt[3][2] = 'fpgmt'; //name
$colunaalt[3][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[3][4] = 'fpgmt'; //sql

$colunaalt[4][0] = 'Forma de Pagamento'; //label
$colunaalt[4][1] = 'number'; //type
$colunaalt[4][2] = 'mpgmt'; //name
$colunaalt[4][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[4][4] = 'mpgmt'; //sql

$colunaalt[5][0] = 'Valor da Nota'; //label
$colunaalt[5][1] = 'text'; //type
$colunaalt[5][2] = 'vlnota'; //name
$colunaalt[5][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[5][4] = 'vlnota'; //sql

$colunaalt[6][0] = 'Valor à Pagar'; //label
$colunaalt[6][1] = 'text'; //type
$colunaalt[6][2] = 'vlpagar'; //name
$colunaalt[6][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[6][4] = 'vlpagar'; //sql

$colunaalt[7][0] = 'Valor Pago'; //label
$colunaalt[7][1] = 'text'; //type
$colunaalt[7][2] = 'vlpago'; //name
$colunaalt[7][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[7][4] = 'vlpago'; //sql

$colunaalt[8][0] = 'Transporte'; //label
$colunaalt[8][1] = 'text'; //type
$colunaalt[8][2] = 'trnp'; //name
$colunaalt[8][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[8][4] = 'trnp'; //sql



$formalt = new classformalt();
$formalt->formalt('ven','tes1','vendas' ,'Venda' , $colunaalt);



require('vendas/vendas/tmp/formalt.php'); 	

?>