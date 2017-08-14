<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();



$id = @$_POST["id"];


$pago = @$_POST["pago"];
$vlpago =  @$_POST["vlpago"];
$dtpago =  @$_POST["dtpago"];


$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$obs = @$_POST['obs'];

/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";


echo "**********".$usuario."************";
*/


	if($pago == '' || $vlpago == '' || $dtpago == '')
	{
		ok(utf8_encode('Campos Obrigatórios não preenchidos'));
		echo '<script>window.location="../../index.php?mod=fin&bot=tes2"</script>';
		
	}
	else
	{
		


$sqlalt = "


UPDATE `contap`
SET

`CAP_PAGO`='".$pago."',
`CAP_VL_PAGO`='".$vlpago."',
`CAP_DT_PAGO`='".$dtpago."',


`CAP_DATA_ALTTERACAO`='".$dataalteracao."',
`CAP_HORA_ALTERACAO`='".$horaalteracao."',
`CAP_IP_ALTERACAO`='".$ip_alteracao."',
`CAP_OBSERVACAO`='".$obs."',
`CAP_SESSION_ALTER`='".$session."',
`CAP_ID_ALTER`=".$usuario."

WHERE CAP_ID = ".$id;


$conn->exec($sqlalt);



		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=fin&bot=tes2"</script>';		 
		 
		 
	}

?>