<?php

require_once('vendas/vendas/classpesquisamc.php');

$titulo[0] = "Código";
$titulo[1] = "Descrição";

$div[0][0] = "text"; //type
$div[0][1] = "vendfor"; //name
$div[0][2] = "Código"; //fundo
$div[1][0] = "text";
$div[1][1] = "limite";
$div[1][2] = "Descrição";


$pesquisa = new classpesquisamc();
$pesquisa->pesquisamc('ven','tes1',$titulo ,$div);





?>