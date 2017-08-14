		<?php 



require_once('comprar/pedido/classinfo.php'); 
require_once('comprar/pedido/classinfotable.php'); 

$id = $_REQUEST['info'];


$colunainfo[0][0] = 'Pedido'; //label
$colunainfo[0][1] = 'PED_CODIGO'; //sql
$colunainfo[0][2] = ''; //tipo


$colunainfo[1][0] = 'Data Pedido'; //label
$colunainfo[1][1] = 'PED_DATA_CADASTRO'; //sql
$colunainfo[1][2] = 'data'; //tipo


$colunainfo[2][0] = 'Tipo de Pedido'; //label
$colunainfo[2][1] = 'PED_TIPO'; //sql
$colunainfo[2][2] = 't'; //tipo


$colunainfo[3][0] = 'Cod. Fun'; //label
$colunainfo[3][1] = 'PED_COD_FUN'; //sql
$colunainfo[3][2] = ''; //tipo

$colunainfo[4][0] = 'Nome Funcionário'; //label
$colunainfo[4][1] = 'PEF_NOME'; //sql
$colunainfo[4][2] = ''; //tipo



$info = new classinfo();
$info->info( 'com','comprar' ,'tes1', 'pedido' , 'Pedido' ,$colunainfo);
		


$sql = "

SELECT *
FROM pedido p
WHERE  p.PED_ID = ".$id."


";


	try 	
	{
		$query = $conn->prepare($sql);

		$query->execute();

		$query = $query->fetch(PDO::FETCH_OBJ);

		$tipo = $query->PED_TIPO;	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

if($tipo == 'sv')
{
	
$sqlt = "

SELECT * 
FROM pedido p, pedidoitens pit, tercerizados t
WHERE p.PED_ID = pit.PDI_PED_ID
AND pit.PDI_FOR_TER = t.TER_CODIGO
AND p.PED_TIPO = 'sv'
AND p.PED_ID = ".$id."
GROUP BY pit.PDI_ID


";


	try 	
	{
		$query = $conn->prepare($sqlt);

		$query->execute();

		$query = $query->fetch(PDO::FETCH_OBJ);

		$tipot = $query->TER_PESSOA;	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
if($tipot = 'pf')
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'PDI_PROD_DESC'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}	
elseif($tipot = 'pj')	
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'PDI_PROD_DESC'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}		
}
elseif($tipo == 'P.A.')
{
	
$sqlp = "

SELECT *
FROM pedido p, pedidoitens pit, fornecedor f
WHERE p.PED_ID = pit.PDI_PED_ID
AND pit.PDI_FOR_TER = f.FOR_CODIGO
AND p.PED_TIPO = 'P.A.'
AND p.PED_ID = ".$id."
GROUP BY pit.PDI_ID


";


	try 	
	{
		$query = $conn->prepare($sqlp);

		$query->execute();

		$query = $query->fetch(PDO::FETCH_OBJ);

		$tipop = $query->FOR_PESSOA;	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
if($tipop = 'pf')
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'des'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}	
elseif($tipop = 'pj')	
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'des'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}		
}
elseif($tipo == 'M.C.')
{
	
$sqlm = "



SELECT *
FROM pedido p, pedidoitens pit, fornecedor f
WHERE p.PED_ID = pit.PDI_PED_ID
AND pit.PDI_FOR_TER = f.FOR_CODIGO
AND p.PED_TIPO = 'P.A.'
AND p.PED_ID = ".$id."
GROUP BY pit.PDI_ID


";


	try 	
	{
		$query = $conn->prepare($sqlm);

		$query->execute();

		$query = $query->fetch(PDO::FETCH_OBJ);

		$tipom = @$query->FOR_PESSOA;	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
if($tipom = 'pf')
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'des'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}	
elseif($tipom = 'pj')	
{
$colunainfot[0] = 'PDI_TIPO'; //sql
$colunainfot[1] = 'PDI_FOR_TER'; //sql
$colunainfot[2] = 'nome'; //sql
$colunainfot[3] = 'des'; //sql
$colunainfot[4] = 'PDI_QUANT_TEMP'; //sql
$colunainfot[5] = 'PDI_VALOR'; //sql
}		
}


$titulo[0] = 'Tipo'; //titulo
$titulo[1] = 'Cód. For./Ter.'; //titulo
$titulo[2] = 'Nome For./Ter.'; //titulo
$titulo[3] = 'Prod/Ter.'; //titulo
$titulo[4] = 'Quant./Tempo'; //titulo
$titulo[5] = 'Valor'; //titulo
		
		
$info = new classinfotable();
$info->infotable( 'com','comprar' ,'tes1', 'pedido' , $titulo ,$colunainfot);

		
		
		
		
		
		
		
		
		
		
		
require('comprar/pedido/tmp/info.php'); 		



?>
