<?php


require_once('../../estoque/cad.php'); 

$sql[0] = "NOTA";
$sql[1] = "PEDIDO";
$sql[2] = "DT_EMISSAO";
$sql[3] = "DT_SAIDA";
$sql[4] = "HR_SAIDA";
$sql[5] = "CONT_FISCO";
$sql[6] = "SERIE";
$sql[7] = "PAGINA";
$sql[8] = "NAT_OP";
$sql[9] = "CH_NFE";
$sql[10] = "RECEBIDO";
$sql[11] = "IMAGEM";


$variavel[0] = "nota";
$variavel[1] = "pedido";
$variavel[2] = "dt_emissao";
$variavel[3] = "dt_saida";
$variavel[4] = "hr_saida";
$variavel[5] = "cfcb";
$variavel[6] = "serie";
$variavel[7] = "pagina";
$variavel[8] = "nt_op";
$variavel[9] = "nfe";
$variavel[10] = "codigoe"; //RECEBIDO
$variavel[11] = "img"; 


$teste = new classcad();
$teste->cad('EPA_', 'estoque','tes2','produtoacabado', 'entradapa', $variavel, $sql);





require_once('../../estoque/tmp/cad.php'); 



?>