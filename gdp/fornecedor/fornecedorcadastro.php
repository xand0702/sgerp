<?php


require_once('../../gdp/cad.php'); 

$sql[0] = "VENDEDOR";
$sql[1] = "VENCIMENTO";
$sql[2] = "LIMITE";
$sql[3] = "GERENTE";

$variavel[0] = "vendedor";
$variavel[1] = "vencimento";
$variavel[2] = "limite";
$variavel[3] = "gerente";


$teste = new classcad();
$teste->cad('FOR_', 'gdp','tes5','fornecedor' ,$variavel, $sql);

require_once('../../gdp/tmp/cad.php'); 

?>