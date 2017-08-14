<?php



require_once('estoque/saida/classformalt.php'); 

$colunaalt[0][0] = 'Produto'; //label
$colunaalt[0][1] = 'text'; //type
$colunaalt[0][2] = 'codpro'; //name
$colunaalt[0][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[0][4] = 'codpro'; //sql


$colunaalt[1][0] = 'Nota'; //label
$colunaalt[1][1] = 'number'; //type
$colunaalt[1][2] = 'nota'; //name
$colunaalt[1][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[1][4] = 'nota'; //sql


$colunaalt[2][0] = 'Descriçao'; //label
$colunaalt[2][1] = 'text'; //type
$colunaalt[2][2] = 'nome'; //name
$colunaalt[2][3] = 'placeholder="Preenchimento Obrigatório" disabled'; //obrigatorio
$colunaalt[2][4] = 'nome'; //sql


$colunaalt[3][0] = 'Quantidade'; //label
$colunaalt[3][1] = 'number'; //type
$colunaalt[3][2] = 'quant'; //name
$colunaalt[3][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[3][4] = 'quant'; //sql

$colunaalt[4][0] = 'Preço'; //label
$colunaalt[4][1] = 'number'; //type
$colunaalt[4][2] = 'valor'; //name
$colunaalt[4][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[4][4] = 'valor'; //sql

$colunaalt[5][0] = 'UN'; //label
$colunaalt[5][1] = 'text'; //type
$colunaalt[5][2] = 'un'; //name
$colunaalt[5][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[5][4] = 'un'; //sql

$colunaalt[6][0] = 'CST'; //label
$colunaalt[6][1] = 'text'; //type
$colunaalt[6][2] = 'cst'; //name
$colunaalt[6][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[6][4] = 'cst'; //sql

$colunaalt[7][0] = 'CFOP'; //label
$colunaalt[7][1] = 'text'; //type
$colunaalt[7][2] = 'cfop'; //name
$colunaalt[7][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[7][4] = 'cfop'; //sql

$colunaalt[8][0] = 'NCMSH'; //label
$colunaalt[8][1] = 'text'; //type
$colunaalt[8][2] = 'ncmsh'; //name
$colunaalt[8][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[8][4] = 'ncmh'; //sql



$formalt = new classformalt();
$formalt->formalt('est','tes4','saida' ,'Produto' , $colunaalt);



require_once('estoque/saida/tmp/formalt.php'); 	

?>