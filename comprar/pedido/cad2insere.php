<?php


require_once('../../raiz/arq/conecta2.php'); 

require_once('../../raiz/arq/funcoes.php'); 

$cod_prod = $_POST['codigop'];
$cod_for = $_POST['codigof'];
$quant_sai = $_POST['quant_sai'];
$vl_compra = $_POST['vl_compra'];
$dt_ent = $_POST['dt_ent'];
$nomefor = $_POST['nomefor'];
$docm = $_POST['docm'];
$codf = $_POST['codf'];
$id = $_POST['id'];
$idd = $_POST['idd'];
$cod = $_POST['cod'];
$icms = $_POST['icms'];
$ipi = $_POST['ipi'];
$fab = $_POST['fab'];
$nome = $_POST['nome'];

if($cod_prod == '' || $quant_sai == '' || $vl_compra == ''
 || $dt_ent == '' || $cod_for == '')
{
	ok('Campos obrigatórios não preenchido');
	
	echo '<script>window.location="../../index.php?mod=com&bot=tes1&cad=2"</script>';
	

}
else
{




session_start();
$conta = count(@$_SESSION['itens']);




@$_SESSION['itens'][$conta][0] = $conta;
@$_SESSION['itens'][$conta][1] = $cod_prod;
@$_SESSION['itens'][$conta][2] = $cod_for;
@$_SESSION['itens'][$conta][3] = $quant_sai;
@$_SESSION['itens'][$conta][4] = $vl_compra;
@$_SESSION['itens'][$conta][5] = $dt_ent;
@$_SESSION['itens'][$conta][6] = $nomefor;
@$_SESSION['itens'][$conta][7] = $docm;
@$_SESSION['itens'][$conta][8] = $codf;
@$_SESSION['itens'][$conta][9] = @$id;
@$_SESSION['itens'][$conta][10] = @$idd;
@$_SESSION['itens'][$conta][11] = @$cod;
@$_SESSION['itens'][$conta][12] = @$icms;
@$_SESSION['itens'][$conta][13] = @$ipi;
@$_SESSION['itens'][$conta][14] = @$fab;
@$_SESSION['itens'][$conta][15] = @$nome;
@$_SESSION['itens'][$conta][16] = @$_SESSION['pedido']['mat'];

	echo '<script>window.location="../../index.php?mod=com&bot=tes1&cad=2"</script>';
	
}



?>