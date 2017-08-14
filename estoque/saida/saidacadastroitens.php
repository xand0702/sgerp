<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

require('cadd.php'); 



if(@$_SESSION['saida']['tip_m'] == 'P.A.')
{
$sqll[0] = "SAIDAPA";
$sqll[1] = "PRODUTO";
$sqll[2] = "QUANTIDADE";
$sqll[3] = "VL_VENDA";


$variavelp[0] = "entrada";
$variavelp[1] = "produto";
$variavelp[2] = "quant";
$variavelp[3] = "vl_venda";


$sql = "

SELECT MAX(f.SPA_ID) codigo
FROM saidapa f

" ;


@$query = $conn->prepare($sql);

@$query->execute();

@$codigo = $query->fetch(PDO::FETCH_OBJ);

@$codigo = $codigo->codigo;







$conta = count(@$_SESSION[itens]);

for($i = 0; $i < $conta; $i++)
{
$sqlp = "
SELECT p.PRO_ID id
FROM produto p
WHERE p.PRO_CODIGO = ".@$_SESSION[itens][$i][2]."
" ;


$query = $conn->prepare($sqlp);

$query->execute();

$produto = $query->fetch(PDO::FETCH_OBJ);

$produto = $produto->id;

$_SESSION['saida']['entrada'][$i] = $codigo ;
$_SESSION['saida']['produto'][$i] = $produto ;
$_SESSION['saida']['quant'][$i] = @$_SESSION[itens][$i][7] ;
$_SESSION['saida']['vl_venda'][$i] = @$_SESSION[itens][$i][9] ;


}





$tsaidae = new classcadd();
$tsaidae->cadd('ISP_', 'est','tes4','saida', 'saidaitenspa', $variavelp, $sqll);
}
else
{

$sqll[0] = "SAIDAMC";
$sqll[1] = "PRODUTO";
$sqll[2] = "QUANTIDADE";


$variavelp[0] = "entrada";
$variavelp[1] = "produto";
$variavelp[2] = "quant";


$sql = "

SELECT MAX(f.SMC_ID) codigo
FROM saidamc f

" ;


@$query = $conn->prepare($sql);

@$query->execute();

@$codigo = $query->fetch(PDO::FETCH_OBJ);

@$codigo = $codigo->codigo;







$conta = count(@$_SESSION[itens]);

for($i = 0; $i < $conta; $i++)
{
$sqlp = "
SELECT p.PRO_ID id
FROM produto p
WHERE p.PRO_CODIGO = ".@$_SESSION[itens][$i][2]."
" ;


$query = $conn->prepare($sqlp);

$query->execute();

$produto = $query->fetch(PDO::FETCH_OBJ);

$produto = $produto->id;

$_SESSION['saida']['entrada'][$i] = $codigo ;
$_SESSION['saida']['produto'][$i] = $produto ;
$_SESSION['saida']['quant'][$i] = @$_SESSION[itens][$i][7] ;


}





$tsaidae = new classcadd();
$tsaidae->cadd('ISM_', 'est','tes4','saida', 'saidaitensmc', $variavelp, $sqll);	
	
}

require('../../estoque/saida/tmp/cadd.php'); 

?>