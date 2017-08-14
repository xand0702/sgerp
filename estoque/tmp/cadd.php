<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 





$entrada = $_SESSION['mca']['entrada'][0];



$produto = $_SESSION['mca']['produto'][0];



$quantidade = $_SESSION['mca']['quantidade'][0];



$precoun = $_SESSION['mca']['precoun'][0];



$un = $_SESSION['mca']['un'][0];



$cst = $_SESSION['mca']['cst'][0];



$cfop = $_SESSION['mca']['cfop'][0];



$ncmsh = $_SESSION['mca']['ncmsh'][0];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `itensmc` 
(
  


`IMC_ENTRADAPA`,



`IMC_PRODUTO`,



`IMC_QUANTIDADE`,



`IMC_PRECOUN`,



`IMC_UN`,



`IMC_CST`,



`IMC_CFOP`,



`IMC_NCMSH`,

  
  
  `IMC_SITUACAO`,
  `IMC_DATA_CADASTRO`,
  `IMC_HORA_CADASTRO`,
  `IMC_SESSION_CAD`,
  `IMC_IP_CADASTRO`,
  `IMC_DATA_ALTTERACAO`,
  `IMC_HORA_ALTERACAO`,
  `IMC_SESSION_ALTER`,
  `IMC_IP_ALTERACAO`,
  `IMC_ID_ALTER`,
  `IMC_ID_CAD`
)
VALUES (


'$entrada',



'$produto',



'$quantidade',



'$precoun',



'$un',



'$cst',



'$cfop',



'$ncmsh',



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







$conn->exec($sqlcad);


		unset($_SESSION['mca']);
		unset($_SESSION['itens']);

		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes3"</script>';	
