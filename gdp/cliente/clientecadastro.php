<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(f.CLI_CODIGO) codigo
FROM cliente f

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






$id = $_SESSION['cliente']['cod_cli'];
$pessoa = $_SESSION['cliente']['pessoa'];

$comp_aut = $_SESSION['cliente']['comp_aut'];
$emprego = $_SESSION['cliente']['emprego'];
$renda = $_SESSION['cliente']['renda'];
$limite = $_SESSION['cliente']['limite'];
$tel1 = $_SESSION['cliente']['tel1'];
$tel2 = $_SESSION['cliente']['tel2'];
$tel3 = $_SESSION['cliente']['tel3'];

$cont1 = $_SESSION['cliente']['cont1'];
$cont2 = $_SESSION['cliente']['cont2'];
$cont3 = $_SESSION['cliente']['cont3'];

$obs = $_SESSION['cliente']['obs'];




$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];








/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";




*/


		


$sqlcad = "INSERT INTO `cliente` 
(
  `CLI_CODIGO`,
  `CLI_COD_PESSOA`,
  `CLI_PESSOA`,
  `CLI_COMPRADOR`,
  `CLI_EMPREGO`,
  `CLI_RENDA`,
  `CLI_LIMITE`,
  `CLI_CONTATO1`,
  `CLI_TEL_CONFIRMACAO1`,
  `CLI_CONTATO2`,
  `CLI_TEL_CONFIRMACAO2`,
  `CLI_CONTATO3`,
  `CLI_TEL_CONFIRMACAO3`,
  
  `CLI_OBSERVACAO`,
  `CLI_DATA_CADASTRO`,
  `CLI_HORA_CADASTRO`,
  `CLI_SESSION_CAD`,
  `CLI_IP_CADASTRO`,
  `CLI_DATA_ALTTERACAO`,
  `CLI_HORA_ALTERACAO`,
  `CLI_SESSION_ALTER`,
  `CLI_IP_ALTERACAO`,
  `CLI_ID_ALTER`,
  `CLI_ID_CAD`
)
VALUES (
$codigo,
$id,
'$pessoa',
'$comp_aut',
'$emprego',
'$renda',
'$limite',
'$cont1',
'$tel1',
'$cont2',
'$tel2',
'$cont3',
'$tel3',

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



		unset($_SESSION['cliente']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes4"</script>';	

/*
	try 	
	{
		$conn->exec($sqlcad);
		unset($_SESSION['cliente']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

*/
		

		
		 
		 
	

?>