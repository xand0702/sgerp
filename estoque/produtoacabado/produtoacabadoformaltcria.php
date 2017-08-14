<?php



require_once('estoque/classformalt.php'); 

$colunaalt[0][0] = 'Nota'; //label
$colunaalt[0][1] = 'text'; //type
$colunaalt[0][2] = 'nota'; //name
$colunaalt[0][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[0][4] = 'NOTA'; //sql


$colunaalt[1][0] = 'Pedido'; //label
$colunaalt[1][1] = 'number'; //type
$colunaalt[1][2] = 'pedido'; //name
$colunaalt[1][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[1][4] = 'PEDIDO'; //sql


$colunaalt[2][0] = 'Controle do fisco'; //label
$colunaalt[2][1] = 'text'; //type
$colunaalt[2][2] = 'cont_fisco'; //name
$colunaalt[2][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[2][4] = 'CONT_FISCO'; //sql


$colunaalt[3][0] = 'Série'; //label
$colunaalt[3][1] = 'text'; //type
$colunaalt[3][2] = 'serie'; //name
$colunaalt[3][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[3][4] = 'SERIE'; //sql

$colunaalt[4][0] = 'Série'; //label
$colunaalt[4][1] = 'text'; //type
$colunaalt[4][2] = 'serie'; //name
$colunaalt[4][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[4][4] = 'SERIE'; //sql

$colunaalt[5][0] = 'Página'; //label
$colunaalt[5][1] = 'text'; //type
$colunaalt[5][2] = 'pagina'; //name
$colunaalt[5][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[5][4] = 'PAGINA'; //sql

$colunaalt[6][0] = 'Natureza da Operação'; //label
$colunaalt[6][1] = 'text'; //type
$colunaalt[6][2] = 'nt_op'; //name
$colunaalt[6][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[6][4] = 'NAT_OP'; //sql

$colunaalt[7][0] = 'NFE'; //label
$colunaalt[7][1] = 'text'; //type
$colunaalt[7][2] = 'nfe'; //name
$colunaalt[7][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[7][4] = 'CH_NFE'; //sql

$colunaalt[8][0] = 'Data da Emissão'; //label
$colunaalt[8][1] = 'date'; //type
$colunaalt[8][2] = 'dt_emi'; //name
$colunaalt[8][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[8][4] = 'DT_EMISSAO'; //sql

$colunaalt[9][0] = 'Data da Saída'; //label
$colunaalt[9][1] = 'date'; //type
$colunaalt[9][2] = 'dt_sai'; //name
$colunaalt[9][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[9][4] = 'DT_SAIDA'; //sql

$colunaalt[10][0] = 'Hora da Saída'; //label
$colunaalt[10][1] = 'time'; //type
$colunaalt[10][2] = 'hr_sai'; //name
$colunaalt[10][3] = 'placeholder="Preenchimento Obrigatório"'; //obrigatorio
$colunaalt[10][4] = 'HR_SAIDA'; //sql




$formalt = new classformalt();
$formalt->formalt('EPA_', 'estoque','tes2','produtoacabado' ,'Nota' , $colunaalt);



require_once('estoque/tmp/formalt.php'); 	

?>