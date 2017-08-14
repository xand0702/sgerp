<?php

require_once('estoque/saida/classpesquisa.php');

$titulo[0] = "Tipo de Produto";
$titulo[1] = "Código";
$titulo[2] = "Descrição";

$div[0][0] = "text"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "Tipo de Produto"; //fundo
$div[1][0] = "text";
$div[1][1] = "vendfor";
$div[1][2] = "Código";
$div[2][0] = "text";
$div[2][1] = "limite";
$div[2][2] = "Descrição";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('est','tes4',$titulo ,$div);





?>