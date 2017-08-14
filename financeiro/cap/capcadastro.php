<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(ps.CAP_CODIGO) codigo
FROM contap ps

" ;


$query = $conn->prepare($sql);

$query->execute();

$codigo = $query->fetch(PDO::FETCH_OBJ);

$codigo = $codigo->codigo;

if($codigo == '')
{
	$codigo = $codigo + 1;
}

$codigo++;




$desc = @$_POST["desc"];
$credor =  @$_POST["credor"];
$doc =  @$_POST["doc"];
$dt_ven =  @$_POST["dt_ven"];
$valor =  @$_POST["valor"];
$n_p =  @$_POST["n_p"];
$obs =  @$_POST["obs"];				//int


$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];




//echo "**********".$_SESSION['cf']."************";






//echo "**********".$_FILES["file"]["size"].$img."************";




















/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";




*/

	if($desc == '' || $credor == '' || $doc == '' ||
	$dt_ven == '' || $valor == '' || $n_p == '')
	{
		ok(utf8_encode('Prenchimento obrigatorio não registrado'));
		echo '<script>window.location="../../index.php?mod=fin&bot=tes2"</script>';
		
	}
	else
	{















$hoje = $dt_ven;
	

		function datapar($data)
		{
			if($data == null)
			{
				echo "";
			}
			else
			{
			$dt = explode("-", $data);
				if($dt[1] == 12)
				{
					$dt[1] = 01;
					$dt[0]++;
				}
				else
				{
					$dt[1]++;
				}
			$dtimp =  $dt[0]."-".$dt[1]."-".$dt[2];
			return $dtimp;
			}
		}	
		








		
		
$conta = $n_p;		
$conta++;
for($i=1; $i < $conta; $i++)
{
	if($n_p == 1)
	{
		$hoje = $hoje;
	}
	else
	{
		$hoje = datapar($hoje);
	}



$sqlcad = "INSERT INTO `contap` 
(
`CAP_CODIGO`,

`CAP_DESCRICAO`,
`CAP_CREDOR`,
`CAP_DOCUMENTO`,
`CAP_DT_VEN`,
`CAP_VALOR`,
`CAP_T_P`,
`CAP_OBSERVACAO`,
`CAP_N_P`,
`CAP_PAGO`,

`CAP_DATA_CADASTRO`,
`CAP_HORA_CADASTRO`,
`CAP_DATA_ALTTERACAO`,
`CAP_HORA_ALTERACAO`,
`CAP_ID_CAD`,
`CAP_SESSION_CAD`,
`CAP_IP_CADASTRO`,
`CAP_IP_ALTERACAO`,
`CAP_SESSION_ALTER`,
`CAP_ID_ALTER`
)
VALUES (
$codigo,

'$desc',
'$credor',
'$doc',
'$hoje',
'$valor',
'$n_p',
'$obs',
'$i',
'NÃO',

'$datacadastro',
'$horacadastro',
'$dataalteracao',
'$horaalteracao',
$usuario,
'$session',
'$ip_cadastro',
'$ip_cadastro',
'$session',
$usuario
)
";


$conn->exec($sqlcad);

}

		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=fin&bot=tes2"</script>';		 
		 
		 
	}

?>