<?php

require_once('vendas/vendas/classpesquisavnd.php');

$titulo[0] = "ID Item Vend.";
$titulo[1] = "Código Prod.";
$titulo[2] = "Descrição";


$div[0][0] = "number"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "ID Item Vend"; //fundo
$div[1][0] = "number"; //type
$div[1][1] = "vendfor"; //name
$div[1][2] = "Código Prod."; //fundo
$div[2][0] = "text";
$div[2][1] = "limite";
$div[2][2] = "Descrição";


$pesquisa = new classpesquisavnd();
$pesquisa->pesquisavnd('ven','tes1',$titulo ,$div);





?>