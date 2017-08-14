		<?php 



require_once('estoque/saida/classinfo.php'); 


$colunainfo[0][0] = 'ID Item'; //label
$colunainfo[0][1] = 'idit'; //sql
$colunainfo[0][2] = ''; //tipo


$colunainfo[1][0] = 'Código do Produto'; //label
$colunainfo[1][1] = 'codpro'; //sql
$colunainfo[1][2] = ''; //tipo


$colunainfo[2][0] = 'Descrição do Produto'; //label
$colunainfo[2][1] = 'nome'; //sql
$colunainfo[2][2] = ''; //tipo


$colunainfo[3][0] = 'UN'; //label
$colunainfo[3][1] = 'un'; //sql
$colunainfo[3][2] = ''; //tipo

$colunainfo[4][0] = 'Fabricante'; //label
$colunainfo[4][1] = 'fab'; //sql
$colunainfo[4][2] = ''; //tipo

$colunainfo[5][0] = 'Estoque'; //label
$colunainfo[5][1] = 'quant'; //sql
$colunainfo[5][2] = ''; //tipo

$colunainfo[6][0] = 'Preço por peça'; //label
$colunainfo[6][1] = 'valor'; //sql
$colunainfo[6][2] = 'moeda'; //tipo

$colunainfo[7][0] = 'Total do estoque'; //label
$colunainfo[7][1] = 'total'; //sql
$colunainfo[7][2] = 'moeda'; //tipo

$colunainfo[8][0] = 'NOTA'; //label
$colunainfo[8][1] = 'nota'; //sql
$colunainfo[8][2] = ''; //tipo

$colunainfo[9][0] = 'NFE'; //label
$colunainfo[9][1] = 'nfe'; //sql
$colunainfo[9][2] = ''; //tipo




















$info = new classinfo();
$info->info( 'est','tes4', 'saida' , 'Estoque' ,$colunainfo);
		

require('estoque/saida/tmp/info.php'); 		




