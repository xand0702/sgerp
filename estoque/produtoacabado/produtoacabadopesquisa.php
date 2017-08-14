<?php

require_once('estoque/classpesquisa.php');

$titulo[0] = "Código";
$titulo[1] = "Nota";
$titulo[2] = "Pedido";

$div[0][0] = "number"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "Código"; //fundo
$div[1][0] = "text";
$div[1][1] = "vendfor";
$div[1][2] = "Nota";
$div[2][0] = "number";
$div[2][1] = "limite";
$div[2][2] = "Pedido";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('est','tes2',$titulo ,$div);





?>