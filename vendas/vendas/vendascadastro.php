<?php
session_start();

require('../../vendas/vendas/cad.php'); 





$sql[0] = "VL_GASTO";
$sql[1] = "VL_PARCELADO";
$sql[2] = "VL_BRUTO";

// varivel valor liquido recebe o valor com desconto do pagamento a vista

$variavel[0] = "total";
$variavel[1] = "v_liquido";
$variavel[2] = "vl_bruto";


$saipa = new classcad();
$saipa->cad('VEN_', 'ven', 'vendas','tes1','vendas', 'vendas', $variavel, $sql);







require('../../vendas/vendas/tmp/cad.php'); 



?>