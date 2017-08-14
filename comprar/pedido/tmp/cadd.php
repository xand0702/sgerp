<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 





$ped_id = $_SESSION['pedido']['ped_id'][0];



$valor = $_SESSION['pedido']['valor'][0];



$quant_temp = $_SESSION['pedido']['quant_temp'][0];



$dt_ent_ini = $_SESSION['pedido']['dt_ent_ini'][0];



$prod_desc = $_SESSION['pedido']['prod_desc'][0];



$for_ter = $_SESSION['pedido']['for_ter'][0];



$tipo = $_SESSION['pedido']['tipo'][0];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `pedidoitens` 
(
  


`PDI_PED_ID`,



`PDI_VALOR`,



`PDI_QUANT_TEMP`,



`PDI_DT_ENT_INI`,



`PDI_PROD_DESC`,



`PDI_FOR_TER`,



`PDI_TIPO`,

  
  
  `PDI_ATENDIDO`,
  `PDI_DATA_CADASTRO`,
  `PDI_HORA_CADASTRO`,
  `PDI_SESSION_CAD`,
  `PDI_IP_CADASTRO`,
  `PDI_DATA_ALTTERACAO`,
  `PDI_HORA_ALTERACAO`,
  `PDI_SESSION_ALTER`,
  `PDI_IP_ALTERACAO`,
  `PDI_ID_ALTER`,
  `PDI_ID_CAD`
)
VALUES (


'$ped_id',



'$valor',



'$quant_temp',



'$dt_ent_ini',



'$prod_desc',



'$for_ter',



'$tipo',



'SIM',
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
	


		unset($_SESSION['pedido']);
		unset($_SESSION['itens']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=com&bot=tes1"</script>';	

