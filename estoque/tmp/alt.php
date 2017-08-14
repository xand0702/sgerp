<?php
	
require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();







$id = @$_POST["id"];








	$nota = @$_POST['nota'];
	
			






	$pedido = @$_POST['pedido'];
	
			






	$cont_fisco = @$_POST['cont_fisco'];
	
			






	$serie = @$_POST['serie'];
	
			






	$pagina = @$_POST['pagina'];
	
			






	$nt_op = @$_POST['nt_op'];
	
			






	$nfe = @$_POST['nfe'];
	
			






	$dt_emi = @$_POST['dt_emi'];
	
			






	$dt_sai = @$_POST['dt_sai'];
	
			






	$hr_sai = @$_POST['hr_sai'];
	
			




$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];

 if($nota == '' || $pedido == '' || $cont_fisco == '' || $serie == '' || $pagina == '' || $nt_op == '' || $nfe == '' || $dt_emi == '' || $dt_sai == '' || $hr_sai == '' )
		{
			echo '++++++'.$vend.'++++++'.$venc.'++++++'.$limite;
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=est&bot=tes3</script>';	
		
	}


else
	{

  
  
$sqlalt = "
UPDATE `entradamc`
SET

  `MCA_NOTA` = '".$nota."',

  `MCA_PEDIDO` = '".$pedido."',

  `MCA_CONT_FISCO` = '".$cont_fisco."',

  `MCA_SERIE` = '".$serie."',

  `MCA_PAGINA` = '".$pagina."',

  `MCA_NAT_OP` = '".$nt_op."',

  `MCA_CH_NFE` = '".$nfe."',

  `MCA_DT_EMISSAO` = '".$dt_emi."',

  `MCA_DT_SAIDA` = '".$dt_sai."',

  `MCA_HR_SAIDA` = '".$hr_sai."',

  `MCA_OBSERVACAO` = '".$obs."',

  `MCA_DATA_ALTTERACAO` = '".$dataalteracao."',
  `MCA_HORA_ALTERACAO` = '".$horaalteracao."',
  `MCA_SESSION_ALTER` = '".$session."',
  `MCA_IP_ALTERACAO` = '".$ip_alteracao."',
  `MCA_ID_ALTER` = ".$usuario."

WHERE MCA_CODIGO = ".$id."";

$conn->exec($sqlalt);


		unset($_SESSION['mca']);

		
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes3"</script>';	
		
		
	}
	?>
		