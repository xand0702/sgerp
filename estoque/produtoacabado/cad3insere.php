<?php

require_once('../../raiz/arq/funcoes.php'); 

$cod_prod = $_POST['codigop'];
$id = $_POST['id'];
$cod = $_POST['cod'];
$icms = $_POST['icms'];
$ipi = $_POST['ipi'];
$fab = $_POST['fab'];
$nome = $_POST['nome'];
$ncmsh = $_POST['ncmsh'];
$cst = $_POST['cst'];
$cfpo = $_POST['cfpo'];
$quant = $_POST['quant'];
$un = $_POST['un'];
$vl_un = $_POST['vl_un'];


if($cod_prod == '' || $quant == '' || $un == '' || $vl_un == '')
{
	ok('Campos obrigatórios não preenchido');
	
	echo '<script>window.location="../../index.php?mod=est&bot=tes2&cad=3"</script>';
	

}
else
{

session_start();
$conta = count(@$_SESSION['itens']);




@$_SESSION['itens'][$conta][0] = $conta;
@$_SESSION['itens'][$conta][1] = $id;
@$_SESSION['itens'][$conta][2] = $cod;
@$_SESSION['itens'][$conta][3] = $icms;
@$_SESSION['itens'][$conta][4] = $ipi;
@$_SESSION['itens'][$conta][5] = $fab;
@$_SESSION['itens'][$conta][6] = $cod_prod;
@$_SESSION['itens'][$conta][7] = $cst;
@$_SESSION['itens'][$conta][8] = $cfpo;
@$_SESSION['itens'][$conta][9] = $quant;
@$_SESSION['itens'][$conta][10] = $un;
@$_SESSION['itens'][$conta][11] = $vl_un;
@$_SESSION['itens'][$conta][12] = $nome;
@$_SESSION['itens'][$conta][13] = $ncmsh;


	echo '<script>window.location="../../index.php?mod=est&bot=tes2&cad=3"</script>';
	
}



?>