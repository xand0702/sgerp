		<?php 



require_once('estoque/classinfo.php'); 

$sqlinfo[0] = "SELECT *
FROM entradapa pf
WHERE pf.EPA_CODIGO = '.\$info.'
";


$colunainfo[0][0] = 'Nota'; //label
$colunainfo[0][1] = 'NOTA'; //sql
$colunainfo[0][2] = ''; //tipo


$colunainfo[1][0] = 'Pedido'; //label
$colunainfo[1][1] = 'PEDIDO'; //sql
$colunainfo[1][2] = ''; //tipo


$colunainfo[2][0] = 'Controle fisco'; //label
$colunainfo[2][1] = 'CONT_FISCO'; //sql
$colunainfo[2][2] = ''; //tipo


$colunainfo[3][0] = 'Série'; //label
$colunainfo[3][1] = 'SERIE'; //sql
$colunainfo[3][2] = ''; //tipo

$colunainfo[4][0] = 'Página'; //label
$colunainfo[4][1] = 'PAGINA'; //sql
$colunainfo[4][2] = ''; //tipo

$colunainfo[5][0] = 'Natureza da Operação'; //label
$colunainfo[5][1] = 'NAT_OP'; //sql
$colunainfo[5][2] = ''; //tipo

$colunainfo[6][0] = 'NFE'; //label
$colunainfo[6][1] = 'CH_NFE'; //sql
$colunainfo[6][2] = ''; //tipo

$colunainfo[7][0] = 'Data da Emissão'; //label
$colunainfo[7][1] = 'DT_EMISSAO'; //sql
$colunainfo[7][2] = 'data'; //tipo

$colunainfo[8][0] = 'Data da Saída'; //label
$colunainfo[8][1] = 'DT_SAIDA'; //sql
$colunainfo[8][2] = 'data'; //tipo

$colunainfo[9][0] = 'Hora da Saída'; //label
$colunainfo[9][1] = 'HR_SAIDA'; //sql
$colunainfo[9][2] = ''; //tipo




















$info = new classinfo();
$info->info('EPA_', 'estoque','tes2', 'produtoacabado' ,'entradapa', 'NOTA' ,$colunainfo);
		

require_once('estoque/tmp/info.php'); 		




