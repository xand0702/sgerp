<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
$sql = "

SELECT MAX(f.TER_CODIGO) codigo
FROM funcinario f

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

*/






$id = @$_POST["id"];

	$fina = @$_POST['fina'];
	$custo = @$_POST['custo'];
	$dt_venc = @$_POST['dt_venc'];
	$tempo = @$_POST['tempo'];
	$n_p = @$_POST['n_p'];
	$dt_ini = @$_POST['dt_ini'];
	$dt_fim = @$_POST['dt_fim'];
	$obs = @$_POST['obs'];
			


$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];

/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";


echo "**********".$usuario."************";
*/


	if($fina == '' || $custo == '' || $dt_venc == '' || $tempo == '' || $n_p == '' || $dt_ini == '' || $dt_fim == '' )
		{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes4"</script>';	
		
	}
	else
	{

  
  
$sqlalt = "
UPDATE `tercerizados`
SET
  `TER_FINALIDADE` = '".$fina ."',
  `TER_CUSTO` = '".$custo."',
  `TER_DATA_VENC` = '".$dt_venc."',
  `TER_TEMPO` = '".$tempo."',
  `TER_N_PESSOAS` = '".$n_p."',
  `TER_DATA_INI` = '".$dt_ini."',
  `TER_DATA_FIM` = '".$dt_fim."',

  `TER_OBSERVACAO` = '".$obs."',

  `TER_DATA_ALTTERACAO` = '".$dataalteracao."',
  `TER_HORA_ALTERACAO` = '".$horaalteracao."',
  `TER_SESSION_ALTER` = '".$session."',
  `TER_IP_ALTERACAO` = '".$ip_alteracao."',
  `TER_ID_ALTER` = ".$usuario."

WHERE TER_ID = ".$id;





try 	
	{
		$conn->exec($sqlalt);
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes6"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

		 
	}

?>