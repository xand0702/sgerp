<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 


$sql = "

SELECT MAX(f.SPA_CODIGO) codigo
FROM saidapa f

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







$id = $_SESSION['saida']['cod_cli'];






$cod_fun = $_SESSION['saida']['cod_cli'];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `saidapa` 
(
  `SPA_CODIGO`,
  


`SPA_COD_FUN`,

  
  
  `SPA_DATA_CADASTRO`,
  `SPA_HORA_CADASTRO`,
  `SPA_SESSION_CAD`,
  `SPA_IP_CADASTRO`,
  `SPA_DATA_ALTTERACAO`,
  `SPA_HORA_ALTERACAO`,
  `SPA_SESSION_ALTER`,
  `SPA_IP_ALTERACAO`,
  `SPA_ID_ALTER`,
  `SPA_ID_CAD`
)
VALUES (
$codigo,

'$cod_fun',



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
		echo '<script>window.location="saidacadastroitens.php"</script>';	
		}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }






