<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 





$ven_id = $_SESSION['vendas']['ven_id'][0];



$isp_id = $_SESSION['vendas']['isp_id'][0];



$prod_id = $_SESSION['vendas']['prod_id'][0];



$quantidade = $_SESSION['vendas']['quantidade'][0];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venitens` 
(
  


`VNI_VEN_ID`,



`VNI_ID_ISP`,



`VNI_ID_PROD`,



`VNI_QUANTIDADE`,

  
  
  `VNI_DATA_CADASTRO`,
  `VNI_HORA_CADASTRO`,
  `VNI_SESSION_CAD`,
  `VNI_IP_CADASTRO`,
  `VNI_DATA_ALTTERACAO`,
  `VNI_HORA_ALTERACAO`,
  `VNI_SESSION_ALTER`,
  `VNI_IP_ALTERACAO`,
  `VNI_ID_ALTER`,
  `VNI_ID_CAD`
)
VALUES (


'$ven_id',



'$isp_id',



'$prod_id',



'$quantidade',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

$ven_id = $_SESSION['vendas']['ven_id'][1];



$isp_id = $_SESSION['vendas']['isp_id'][1];



$prod_id = $_SESSION['vendas']['prod_id'][1];



$quantidade = $_SESSION['vendas']['quantidade'][1];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venitens` 
(
  


`VNI_VEN_ID`,



`VNI_ID_ISP`,



`VNI_ID_PROD`,



`VNI_QUANTIDADE`,

  
  
  `VNI_DATA_CADASTRO`,
  `VNI_HORA_CADASTRO`,
  `VNI_SESSION_CAD`,
  `VNI_IP_CADASTRO`,
  `VNI_DATA_ALTTERACAO`,
  `VNI_HORA_ALTERACAO`,
  `VNI_SESSION_ALTER`,
  `VNI_IP_ALTERACAO`,
  `VNI_ID_ALTER`,
  `VNI_ID_CAD`
)
VALUES (


'$ven_id',



'$isp_id',



'$prod_id',



'$quantidade',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

	

$id = @$_SESSION['itens'][0][1];
$quant_saida = @$_SESSION['itens'][0][9];
$quantidade = @$_SESSION['itens'][0][5];
$quantidade = $quantidade - $quant_saida;






$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];



  
$sqlalt = "
UPDATE `saidaitenspa`
SET


  `ISP_QUANTIDADE` = '".$quantidade."',
  `ISP_DATA_ALTTERACAO` = '".$dataalteracao."',
  `ISP_HORA_ALTERACAO` = '".$horaalteracao."',
  `ISP_SESSION_ALTER` = '".$session."',
  `ISP_IP_ALTERACAO` = '".$ip_alteracao."',
  `ISP_ID_ALTER` = ".$usuario."

WHERE ISP_id = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }





	

$id = @$_SESSION['itens'][1][1];
$quant_saida = @$_SESSION['itens'][1][9];
$quantidade = @$_SESSION['itens'][1][5];
$quantidade = $quantidade - $quant_saida;






$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];



  
$sqlalt = "
UPDATE `saidaitenspa`
SET


  `ISP_QUANTIDADE` = '".$quantidade."',
  `ISP_DATA_ALTTERACAO` = '".$dataalteracao."',
  `ISP_HORA_ALTERACAO` = '".$horaalteracao."',
  `ISP_SESSION_ALTER` = '".$session."',
  `ISP_IP_ALTERACAO` = '".$ip_alteracao."',
  `ISP_ID_ALTER` = ".$usuario."

WHERE ISP_id = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }






		echo '<script>window.location="vendascadastroitensf.php"</script>';	

