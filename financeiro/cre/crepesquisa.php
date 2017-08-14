<?php

require_once('financeiro/cre/classpesquisa.php');

$titulo[0] = "ID Parcela";
$titulo[1] = "Código Cliente";
$titulo[2] = "Cliente";

$div[0][0] = "text"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "ID Parcela"; //fundo
$div[1][0] = "text";
$div[1][1] = "findfor";
$div[1][2] = "Código cliente";
$div[2][0] = "text";
$div[2][1] = "limite";
$div[2][2] = "Cliente";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('fin','tes1',$titulo ,$div);





?>