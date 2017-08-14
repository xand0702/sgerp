<?php
	
require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();







$id = @$_POST["id"];







	$vend = @$_POST['vend'];
	
			






	$limite = @$_POST['limite'];
	
			






	$gerente = @$_POST['gerente'];
	
			






	$venc = @$_POST['venc'];
	
			




$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];

 if($vend == '' || $limite == '' || $venc == '' )
		{
			echo '++++++'.$vend.'++++++'.$venc.'++++++'.$limite;
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes5</script>';	
		
	}


else
	{

  
  
$sqlalt = "
UPDATE `fornecedor`
SET

  `FOR_VENDEDOR` = '".$vend."',

  `FOR_LIMITE` = '".$limite."',

  `FOR_GERENTE` = '".$gerente."',

  `FOR_VENCIMENTO` = '".$venc."',

  `FOR_OBSERVACAO` = '".$obs."',

  `FOR_DATA_ALTTERACAO` = '".$dataalteracao."',
  `FOR_HORA_ALTERACAO` = '".$horaalteracao."',
  `FOR_SESSION_ALTER` = '".$session."',
  `FOR_IP_ALTERACAO` = '".$ip_alteracao."',
  `FOR_ID_ALTER` = ".$usuario."

WHERE FOR_ID = ".$id."";

$conn->exec($sqlalt);


		unset($_SESSION['fornecedor']);

		
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes5"</script>';	
		
		
	}
	?>
		