<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

require_once('../../estoque/cadd.php'); 

$sqll[0] = "ENTRADAPA";
$sqll[1] = "PRODUTO";
$sqll[2] = "QUANTIDADE";
$sqll[3] = "PRECOUN";
$sqll[4] = "UN";
$sqll[5] = "CST";
$sqll[6] = "CFOP";
$sqll[7] = "NCMSH";

$variavelp[0] = "entrada";
$variavelp[1] = "produto";
$variavelp[2] = "quantidade";
$variavelp[3] = "precoun";
$variavelp[4] = "un";
$variavelp[5] = "cst";
$variavelp[6] = "cfop";
$variavelp[7] = "ncmsh";





$sql = "

SELECT MAX(f.EPA_ID) codigo
FROM entradapa f

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
WHERE p.PRO_CODIGO = ".@$_SESSION[itens][$i][6]."
" ;


$query = $conn->prepare($sqlp);

$query->execute();

$produto = $query->fetch(PDO::FETCH_OBJ);

$produto = $produto->id;

$_SESSION['produtoacabado']['entrada'][$i] = $codigo ;
$_SESSION['produtoacabado']['produto'][$i] = $produto ;
$_SESSION['produtoacabado']['quantidade'][$i] = @$_SESSION[itens][$i][9] ;
$_SESSION['produtoacabado']['precoun'][$i] = @$_SESSION[itens][$i][11] ;
$_SESSION['produtoacabado']['un'][$i] = @$_SESSION[itens][$i][10] ;
$_SESSION['produtoacabado']['cst'][$i] = @$_SESSION[itens][$i][7] ;
$_SESSION['produtoacabado']['cfop'][$i] = @$_SESSION[itens][$i][8] ;
$_SESSION['produtoacabado']['ncmsh'][$i] = @$_SESSION[itens][$i][13] ;

}





$teste = new classcadd();
$teste->cadd('IPA_', 'estoque','tes2','produtoacabado', 'itenspa', $variavelp, $sqll);


require_once('../../estoque/tmp/cadd.php'); 

?>