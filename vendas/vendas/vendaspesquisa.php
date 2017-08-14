<?php

require_once('vendas/vendas/classpesquisa.php');

$titulo[0] = "NOTA";
$titulo[1] = "Código Cliente";
$titulo[2] = "Data Emissão";

$div[0][0] = "number"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "NOTA"; //fundo
$div[1][0] = "number";
$div[1][1] = "vendfor";
$div[1][2] = "Código cliente";
$div[2][0] = "date";
$div[2][1] = "limite";
$div[2][2] = "";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('ven','tes1',$titulo ,$div);





?>