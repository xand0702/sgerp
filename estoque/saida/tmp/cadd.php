<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 





$entrada = $_SESSION['saida']['entrada'][0];



$produto = $_SESSION['saida']['produto'][0];



$quant = $_SESSION['saida']['quant'][0];



$vl_venda = $_SESSION['saida']['vl_venda'][0];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `saidaitenspa` 
(
  


`ISP_SAIDAPA`,



`ISP_PRODUTO`,



`ISP_QUANTIDADE`,



`ISP_VL_VENDA`,

  
  
  `ISP_DATA_CADASTRO`,
  `ISP_HORA_CADASTRO`,
  `ISP_SESSION_CAD`,
  `ISP_IP_CADASTRO`,
  `ISP_DATA_ALTTERACAO`,
  `ISP_HORA_ALTERACAO`,
  `ISP_SESSION_ALTER`,
  `ISP_IP_ALTERACAO`,
  `ISP_ID_ALTER`,
  `ISP_ID_CAD`
)
VALUES (


'$entrada',



'$produto',



'$quant',



'$vl_venda',



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
	

$entrada = $_SESSION['saida']['entrada'][1];



$produto = $_SESSION['saida']['produto'][1];



$quant = $_SESSION['saida']['quant'][1];



$vl_venda = $_SESSION['saida']['vl_venda'][1];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `saidaitenspa` 
(
  


`ISP_SAIDAPA`,



`ISP_PRODUTO`,



`ISP_QUANTIDADE`,



`ISP_VL_VENDA`,

  
  
  `ISP_DATA_CADASTRO`,
  `ISP_HORA_CADASTRO`,
  `ISP_SESSION_CAD`,
  `ISP_IP_CADASTRO`,
  `ISP_DATA_ALTTERACAO`,
  `ISP_HORA_ALTERACAO`,
  `ISP_SESSION_ALTER`,
  `ISP_IP_ALTERACAO`,
  `ISP_ID_ALTER`,
  `ISP_ID_CAD`
)
VALUES (


'$entrada',



'$produto',



'$quant',



'$vl_venda',



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
	

$id = @$_SESSION['itens'][0][6];
@$quant_saida = @$_SESSION['itens'][0][7];
$quantidade = @$_SESSION['itens'][0][5];
$quantidade = $quantidade - $quant_saida;



$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];


if($quantidade == 0)
{
 
  
$sqlalt = "
UPDATE `itenspa`
SET


  `IPA_SITUACAO` = 'NÃO',
  `IPA_QUANTIDADE` = '".$quantidade."',
  `IPA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `IPA_HORA_ALTERACAO` = '".$horaalteracao."',
  `IPA_SESSION_ALTER` = '".$session."',
  `IPA_IP_ALTERACAO` = '".$ip_alteracao."',
  `IPA_ID_ALTER` = ".$usuario."

WHERE IPA_ID = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


}

if($quantidade != 0)
{
 
  
$sqlalt = "
UPDATE `itenspa`
SET


  `IPA_QUANTIDADE` = '".$quantidade."',
  `IPA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `IPA_HORA_ALTERACAO` = '".$horaalteracao."',
  `IPA_SESSION_ALTER` = '".$session."',
  `IPA_IP_ALTERACAO` = '".$ip_alteracao."',
  `IPA_ID_ALTER` = ".$usuario."

WHERE IPA_ID = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


}


$id = @$_SESSION['itens'][1][6];
@$quant_saida = @$_SESSION['itens'][1][7];
$quantidade = @$_SESSION['itens'][1][5];
$quantidade = $quantidade - $quant_saida;



$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];


if($quantidade == 0)
{
 
  
$sqlalt = "
UPDATE `itenspa`
SET


  `IPA_SITUACAO` = 'NÃO',
  `IPA_QUANTIDADE` = '".$quantidade."',
  `IPA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `IPA_HORA_ALTERACAO` = '".$horaalteracao."',
  `IPA_SESSION_ALTER` = '".$session."',
  `IPA_IP_ALTERACAO` = '".$ip_alteracao."',
  `IPA_ID_ALTER` = ".$usuario."

WHERE IPA_ID = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


}

if($quantidade != 0)
{
 
  
$sqlalt = "
UPDATE `itenspa`
SET


  `IPA_QUANTIDADE` = '".$quantidade."',
  `IPA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `IPA_HORA_ALTERACAO` = '".$horaalteracao."',
  `IPA_SESSION_ALTER` = '".$session."',
  `IPA_IP_ALTERACAO` = '".$ip_alteracao."',
  `IPA_ID_ALTER` = ".$usuario."

WHERE IPA_ID = ".$id."";

	
try 	
	{
		$conn->exec($sqlalt);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


}



		unset($_SESSION['saida']);
		unset($_SESSION['itens']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes4"</script>';	

