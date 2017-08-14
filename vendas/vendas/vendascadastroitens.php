<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

require('cadd.php'); 



$sqll[0] = "VEN_ID";
$sqll[1] = "ID_ISP";
$sqll[2] = "ID_PROD";
$sqll[3] = "QUANTIDADE";


$variavelp[0] = "ven_id";
$variavelp[1] = "isp_id";
$variavelp[2] = "prod_id";
$variavelp[3] = "quantidade";

$sql = "

SELECT MAX(f.VEN_ID) codigo
FROM vendas f

" ;

try 	
	{
		@$query = $conn->prepare($sql);

		@$query->execute();

		@$codigo = $query->fetch(PDO::FETCH_OBJ);

		@$codigo = $codigo->codigo;
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


	
	
	
	
	
	
	


$conta = count(@$_SESSION[itens]);

for($i = 0; $i < $conta; $i++)
{

$_SESSION['vendas']['ven_id'][$i] = $codigo ;
$_SESSION['vendas']['isp_id'][$i] = @$_SESSION[itens][$i][1] ;
$_SESSION['vendas']['prod_id'][$i] = @$_SESSION[itens][$i][2] ;
$_SESSION['vendas']['quantidade'][$i] = @$_SESSION[itens][$i][9] ;


}

$tvendase = new classcadd();
$tvendase->cadd('VNI_', 'ven', 'vendas','tes1','vendas', 'venitens', $variavelp, $sqll);


require('../../vendas/vendas/tmp/cadd.php'); 

?>