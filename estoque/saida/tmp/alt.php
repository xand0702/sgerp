<?php
	
require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();







$id = @$_POST["id"];








	$quant = @$_POST['quant'];
	
			






	$valor = @$_POST['valor'];
	
			






	$un = @$_POST['un'];
	
			






	$cst = @$_POST['cst'];
	
			






	$cfop = @$_POST['cfop'];
	
			






	$ncmsh = @$_POST['ncmsh'];
	
			




$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];

 if($quant == '' || $valor == '' || $un == '' || $cst == '' || $cfop == '' || $ncmsh == '' )
		{
			echo '++++++'.$vend.'++++++'.$venc.'++++++'.$limite;
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=est&bot=tes4</script>';	
		
	}


else
	{

  
  
$sqlalt = "
UPDATE `itenspa`
SET

  `IPA_QUANTIDADE` = '".$quant."',

  `IPA_PRECOUN` = '".$valor."',

  `IPA_UN` = '".$un."',

  `IPA_CST` = '".$cst."',

  `IPA_CFOP` = '".$cfop."',

  `IPA_NCMSH` = '".$ncmsh."',

  `IPA_OBSERVACAO` = '".$obs."',

  `IPA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `IPA_HORA_ALTERACAO` = '".$horaalteracao."',
  `IPA_SESSION_ALTER` = '".$session."',
  `IPA_IP_ALTERACAO` = '".$ip_alteracao."',
  `IPA_ID_ALTER` = ".$usuario."

WHERE IPA_id = ".$id."";

$conn->exec($sqlalt);


		
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes4"</script>';	
		
		
	}
	?>
		