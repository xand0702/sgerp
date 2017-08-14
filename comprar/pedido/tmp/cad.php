<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 


$sql = "

SELECT MAX(f.PED_CODIGO) codigo
FROM pedido f

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







$id = $_SESSION['pedido']['cod_cli'];






$mat = $_SESSION['pedido']['mat'];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `pedido` 
(
  `PED_CODIGO`,
  `PED_COD_FUN`,
  
  


`PED_TIPO`,

  
  
  `PED_ATENDIDO`,
  `PED_DATA_CADASTRO`,
  `PED_HORA_CADASTRO`,
  `PED_SESSION_CAD`,
  `PED_IP_CADASTRO`,
  `PED_DATA_ALTTERACAO`,
  `PED_HORA_ALTERACAO`,
  `PED_SESSION_ALTER`,
  `PED_IP_ALTERACAO`,
  `PED_ID_ALTER`,
  `PED_ID_CAD`
)
VALUES (
$codigo,
$id,

'$mat',



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
		echo '<script>window.location="pedidocadastroitens.php"</script>';	
		}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }






