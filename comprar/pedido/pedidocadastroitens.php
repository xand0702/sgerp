<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

require('cadd.php'); 



$sqll[0] = "PED_ID";
$sqll[1] = "VALOR";
$sqll[2] = "QUANT_TEMP";
$sqll[3] = "DT_ENT_INI";
$sqll[4] = "PROD_DESC";
$sqll[5] = "FOR_TER";
$sqll[6] = "TIPO";


$variavelp[0] = "ped_id";
$variavelp[1] = "valor";
$variavelp[2] = "quant_temp";
$variavelp[3] = "dt_ent_ini";
$variavelp[4] = "prod_desc";
$variavelp[5] = "for_ter";
$variavelp[6] = "tipo";

$sql = "

SELECT MAX(f.PED_ID) codigo
FROM pedido f

" ;


@$query = $conn->prepare($sql);

@$query->execute();

@$codigo = $query->fetch(PDO::FETCH_OBJ);

@$codigo = $codigo->codigo;





if($_SESSION['pedido']['mat'] == 'sv')
{
$conta = count(@$_SESSION[itens]);

for($i = 0; $i < $conta; $i++)
{

$_SESSION['pedido']['ped_id'][$i] = $codigo ;
$_SESSION['pedido']['valor'][$i] = @$_SESSION[itens][$i][6] ;
$_SESSION['pedido']['quant_temp'][$i] = @$_SESSION[itens][$i][5] ;
$_SESSION['pedido']['dt_ent_ini'][$i] = @$_SESSION[itens][$i][7] ;
$_SESSION['pedido']['prod_desc'][$i] = @$_SESSION[itens][$i][9] ;
$_SESSION['pedido']['for_ter'][$i] = @$_SESSION[itens][$i][1] ;
$_SESSION['pedido']['tipo'][$i] = @$_SESSION[itens][$i][8] ;

}
}
else
{
	$conta = count(@$_SESSION[itens]);

for($i = 0; $i < $conta; $i++)
{

$_SESSION['pedido']['ped_id'][$i] = $codigo ;
$_SESSION['pedido']['valor'][$i] = @$_SESSION[itens][$i][4] ;
$_SESSION['pedido']['quant_temp'][$i] = @$_SESSION[itens][$i][3] ;
$_SESSION['pedido']['dt_ent_ini'][$i] = @$_SESSION[itens][$i][5] ;
$_SESSION['pedido']['prod_desc'][$i] = @$_SESSION[itens][$i][11] ;
$_SESSION['pedido']['for_ter'][$i] = @$_SESSION[itens][$i][2] ;
$_SESSION['pedido']['tipo'][$i] = @$_SESSION[itens][$i][16] ;

}
}

$tpedidoe = new classcadd();
$tpedidoe->cadd('PDI_', 'com', 'comprar','tes1','pedido', 'pedidoitens', $variavelp, $sqll);


require('../../comprar/pedido/tmp/cadd.php'); 

?>