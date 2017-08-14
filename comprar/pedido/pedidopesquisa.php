<?php

require_once('comprar/pedido/classpesquisa.php');

$titulo[0] = "Pedido";
$titulo[1] = "Código Funcionário";
$titulo[2] = "Data Pedido";

$div[0][0] = "number"; //type
$div[0][1] = "codfor"; //name
$div[0][2] = "Pedido"; //fundo
$div[1][0] = "number";
$div[1][1] = "vendfor";
$div[1][2] = "Código Funcionário";
$div[2][0] = "date";
$div[2][1] = "limite";
$div[2][2] = "";


$pesquisa = new classpesquisa();
$pesquisa->pesquisa('com','tes1',$titulo ,$div);





?>