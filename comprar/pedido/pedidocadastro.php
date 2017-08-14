<?php
session_start();

require('../../comprar/pedido/cad.php'); 





$sql[0] = "TIPO";


$variavel[0] = "mat";


$saipa = new classcad();
$saipa->cad('PED_', 'com', 'comprar','tes1','pedido', 'pedido', $variavel, $sql);







require('../../comprar/pedido/tmp/cad.php'); 



?>