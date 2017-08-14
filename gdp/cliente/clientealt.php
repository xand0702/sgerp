<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
$sql = "

SELECT MAX(f.CLI_CODIGO) codigo
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

	$comp_aut = @$_POST['comp_aut'];
	$emprego = @$_POST['emprego'];
	$renda = @$_POST['renda'];
	$limite = @$_POST['limite'];
	$tel1 = @$_POST['tel1'];
	$tel2 = @$_POST['tel2'];
	$tel3 = @$_POST['tel3'];
	$cont1 = @$_POST['cont1'];
	$cont2 = @$_POST['cont2'];
	$cont3 = @$_POST['cont3'];
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


	if($comp_aut == '' || $emprego == '' || $renda == '' || $limite == '' || $tel1 == '' || $tel2 == '' || $tel3 == '' || $cont1 == ''  || $cont2 == ''  || $cont3 == ''  )
		{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes4"</script>';	
		
	}
	else
	{

  
  
$sqlalt = "
UPDATE `cliente`
SET
  `CLI_COMPRADOR` = '".$comp_aut ."',
  `CLI_EMPREGO` = '".$emprego."',
  `CLI_RENDA` = '".$renda."',
  `CLI_LIMITE` = '".$limite."',
  `CLI_TEL_CONFIRMACAO1` = '".$tel1."',
  `CLI_TEL_CONFIRMACAO2` = '".$tel2."',
  `CLI_TEL_CONFIRMACAO3` = '".$tel3."',
  `CLI_CONTATO1` = '".$cont1."',
  `CLI_CONTATO2` = '".$cont2."',
  `CLI_CONTATO3` = '".$cont3."',

  `CLI_OBSERVACAO` = '".$obs."',

  `CLI_DATA_ALTTERACAO` = '".$dataalteracao."',
  `CLI_HORA_ALTERACAO` = '".$horaalteracao."',
  `CLI_SESSION_ALTER` = '".$session."',
  `CLI_IP_ALTERACAO` = '".$ip_alteracao."',
  `CLI_ID_ALTER` = ".$usuario."

WHERE CLI_ID = ".$id;





try 	
	{
		$conn->exec($sqlalt);
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes4"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

		 
	}

?>