<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(f.TER_CODIGO) codigo
FROM tercerizados f

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






$id = $_SESSION['tercerizados']['cod_cli'];
$pessoa = $_SESSION['tercerizados']['pessoa'];

$fina = $_SESSION['tercerizados']['fina'];
$custo = $_SESSION['tercerizados']['custo'];
$dt_venc = $_SESSION['tercerizados']['dt_venc'];
$tempo = $_SESSION['tercerizados']['tempo'];
$n_p = $_SESSION['tercerizados']['n_p'];
$dt_ini = $_SESSION['tercerizados']['dt_ini'];
$dt_fim = $_SESSION['tercerizados']['dt_fim'];


$obs = $_SESSION['tercerizados']['obs'];




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


		


$sqlcad = "INSERT INTO `tercerizados` 
(
  `TER_CODIGO`,
  `TER_COD_PESSOA`,
  `TER_PESSOA`,
  
  `TER_FINALIDADE`,
  `TER_CUSTO`,
  `TER_DATA_VENC`,
  `TER_TEMPO`,
  `TER_N_PESSOAS`,
  `TER_DATA_INI`,
  `TER_DATA_FIM`,
  
  
  `TER_OBSERVACAO`,
  `TER_DATA_CADASTRO`,
  `TER_HORA_CADASTRO`,
  `TER_SESSION_CAD`,
  `TER_IP_CADASTRO`,
  `TER_DATA_ALTTERACAO`,
  `TER_HORA_ALTERACAO`,
  `TER_SESSION_ALTER`,
  `TER_IP_ALTERACAO`,
  `TER_ID_ALTER`,
  `TER_ID_CAD`
)
VALUES (
$codigo,
$id,
'$pessoa',

'$fina',
'$custo',
'$dt_venc',
'$tempo',
'$n_p',
'$dt_ini',
'$dt_fim',

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



		unset($_SESSION['tercerizados']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes6"</script>';	

/*
	try 	
	{
		$conn->exec($sqlcad);
		unset($_SESSION['tercerizados']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

*/
		

		
		 
		 
	

?>