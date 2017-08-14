<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(f.FOR_CODIGO) codigo
FROM fornecedor f

" ;


$query = $conn->prepare($sql);

$query->execute();

$codigo = $query->fetch(PDO::FETCH_OBJ);

$codigo = $codigo->codigo;

if($codigo == '')
{
	$codigo = 0;
}

$codigo++;







$id = $_SESSION['fornecedor']['cod_cli'];
$pessoa = $_SESSION['fornecedor']['pessoa'];






$vendedor = $_SESSION['fornecedor']['vendedor'];



$vencimento = $_SESSION['fornecedor']['vencimento'];



$limite = $_SESSION['fornecedor']['limite'];



$gerente = $_SESSION['fornecedor']['gerente'];




$obs = $_SESSION['fornecedor']['obs'];




$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `fornecedor` 
(
  `FOR_CODIGO`,
  `FOR_COD_PESSOA`,
  `FOR_PESSOA`,
  


`FOR_VENDEDOR`,



`FOR_VENCIMENTO`,



`FOR_LIMITE`,



`FOR_GERENTE`,

  
  
  `FOR_OBSERVACAO`,
  `FOR_DATA_CADASTRO`,
  `FOR_HORA_CADASTRO`,
  `FOR_SESSION_CAD`,
  `FOR_IP_CADASTRO`,
  `FOR_DATA_ALTTERACAO`,
  `FOR_HORA_ALTERACAO`,
  `FOR_SESSION_ALTER`,
  `FOR_IP_ALTERACAO`,
  `FOR_ID_ALTER`,
  `FOR_ID_CAD`
)
VALUES (
$codigo,
$id,
'$pessoa',

'$vendedor',



'$vencimento',



'$limite',



'$gerente',



'$obs',
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



		unset($_SESSION['fornecedor']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes5"</script>';	
