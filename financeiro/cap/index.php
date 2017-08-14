

<?php

require_once('raiz/arq/conecta2.php'); 

		
$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];





if($info != '')
{
require_once('capinfo.php'); 
	
}
else if($del != '')
{
require_once('capdel.php'); 
	
}
else if($alt != '')
{
require_once('capalt.php'); 
	
}

else
{
require('financeiro/corpo.php');


			

$sqlvp = "


SELECT SUM(cp.CAP_VALOR) pagar
FROM contap cp
WHERE cp.CAP_PAGO = 'NÃO'

";

try 	
	{
$query = $conn->prepare($sqlvp);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$pagar = $query->pagar;	

		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

	
	
	




$cliente = new classcorpo();
$cliente->corpo('Contas a Pagar','capcad','caprels', $pagar);
?>

















<?php


//formulario cadastro

require_once('capformrel.php'); 


//formulario cadastro

require_once('capformcad.php'); 


//pesquisa

require_once('cappesquisa.php'); 


	

	//tabela



require_once('captabela.php'); 



}

?>


