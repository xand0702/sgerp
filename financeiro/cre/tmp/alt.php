<?php
	
require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();







$id = @$_POST["id"];








	$pago = @$_POST['pago'];
	
			






	$dtpago = @$_POST['dtpago'];
	
			






	$vlpago = @$_POST['vlpago'];
	
			




$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];


if('x' == 'y')
{
	$nada = 'nadaxnada';
}


else
	{

  
  
$sqlalt = "
UPDATE `venpgmt`
SET

  `VNG_PAGO` = '".$pago."',

  `VNG_DT_PAGO` = '".$dtpago."',

  `VNG_VL_PAGO` = '".$vlpago."',

  `VNG_OBSERVACAO` = '".$obs."',

  `VNG_DATA_ALTTERACAO` = '".$dataalteracao."',
  `VNG_HORA_ALTERACAO` = '".$horaalteracao."',
  `VNG_SESSION_ALTER` = '".$session."',
  `VNG_IP_ALTERACAO` = '".$ip_alteracao."',
  `VNG_ID_ALTER` = ".$usuario."

WHERE VNG_ID = ".$id."";

$conn->exec($sqlalt);


		
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=fin&bot=tes1"</script>';	
		
		
	}
	?>
		