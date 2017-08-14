<?php

require_once('gdp/classpesquisa.php');

$titulo[0] = "Código";
$titulo[1] = "Vendedor";
$titulo[2] = "Limite";

$div[0][0] = "number"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "Código"; //fundo
$div[1][0] = "text";
$div[1][1] = "vendfor";
$div[1][2] = "Vendedor";
$div[2][0] = "number";
$div[2][1] = "limite";
$div[2][2] = "Limite";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('gdp','tes5',$titulo ,$div);





?>