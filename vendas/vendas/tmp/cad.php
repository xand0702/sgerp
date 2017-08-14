<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 

$sql = "

SELECT MAX(f.VEN_CODIGO) codigo
FROM vendas f

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


//VENDEDOR

$idfun = $_SESSION['vendas']['cod_ven'];

$sqlv = "

SELECT f.fun_id idfun
FROM funcinario f
WHERE f.FUN_CODIGO = ".$idfun."
" ;

try 	
	{
		$query = $conn->prepare($sqlv);

		$query->execute();

		$idfun = $query->fetch(PDO::FETCH_OBJ);

		$idfun = $idfun->idfun;
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }



	
//CLIENTE
	
$idcli = $_SESSION['vendas']['cod_cli'];

$sqlc = "
SELECT c.CLI_ID idcli
FROM cliente c
WHERE c.CLI_CODIGO =  ".$idcli."
" ;

try 	
	{
		$query = $conn->prepare($sqlc);

		$query->execute();

		$idcli = $query->fetch(PDO::FETCH_OBJ);

		$idcli = $idcli->idcli;
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


//forma de pagamento
	
$f_pgmt = 	$_SESSION['vendas']['pgmto'];

if($f_pgmt == 'avista')
	$f_pgmt = 'À Vista';
else
	$f_pgmt = 'À Prazo';

//modo de pagamento

$m_pgmt = 	$_SESSION['vendas']['pagav'];

if($m_pgmt == 'dinheiro')
	$m_pgmt = 'Dinheiro';
elseif($m_pgmt == 'debito')
	$m_pgmt = 'Débito';
elseif($m_pgmt == 'cc')
	$m_pgmt = 'Cartão de Crédito';
elseif($m_pgmt == 'cheque')
	$m_pgmt = 'Cheque';
elseif($m_pgmt == 'boleto')
	$m_pgmt = 'Boleto';

//transporte
	
$transp = 	$_SESSION['vendas']['trans'];

if($transp == 'cliente')
	$transp = 'Retirado pelo Cliente';
else
	$transp = 'O Mesmo';


//FINANCEIRO

$entrada = @$_SESSION['vendas']['entrada'];
$desc = $_SESSION['vendas']['desc'];
$m_desc = $_SESSION['vendas']['m_desc'];








$total = $_SESSION['vendas']['total'];



$v_liquido = $_SESSION['vendas']['v_liquido'];



$vl_bruto = $_SESSION['vendas']['vl_bruto'];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `vendas` 
(
  `VEN_CODIGO`,
  `VEN_ID_VEN_FUN`,
  `VEN_ID_CLI`,
  `VEN_F_PGMT`,
  `VEN_M_PGMT`,
  `VEN_TRANSP`,
  `VEN_ENTRADA`,
  `VEN_DESCONTO`,
  `VEN_M_DESC`,
  
  
  
  


`VEN_VL_GASTO`,



`VEN_VL_PARCELADO`,



`VEN_VL_BRUTO`,

  
  
  `VEN_DATA_CADASTRO`,
  `VEN_HORA_CADASTRO`,
  `VEN_SESSION_CAD`,
  `VEN_IP_CADASTRO`,
  `VEN_DATA_ALTTERACAO`,
  `VEN_HORA_ALTERACAO`,
  `VEN_SESSION_ALTER`,
  `VEN_IP_ALTERACAO`,
  `VEN_ID_ALTER`,
  `VEN_ID_CAD`
)
VALUES (
$codigo,
$idfun,
$idcli,
'$f_pgmt',
'$m_pgmt',
'$transp',
'$entrada',
'$desc',
'$m_desc',



'$total',



'$v_liquido',



'$vl_bruto',



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
		echo '<script>window.location="vendascadastroitens.php"</script>';	
		}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }






