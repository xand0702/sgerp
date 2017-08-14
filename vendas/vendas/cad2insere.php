<?php


require_once('../../raiz/arq/conecta2.php'); 

require_once('../../raiz/arq/funcoes.php'); 

$cod_prod = $_POST['codigop'];
$quant = $_POST['quant'];
$vlr = $_POST['vlr'];
$id = $_POST['id'];
$idpro = $_POST['idpro'];
$codpro = $_POST['codpro'];
$icms = $_POST['icms'];
$ipi = $_POST['ipi'];
$nome = $_POST['nome'];
$quant_sai = $_POST['quant_sai'];


if($cod_prod == '' || $quant_sai == '')
{
	ok('Campos obrigatórios não preenchido');
	
	echo '<script>window.location="../../index.php?mod=com&bot=tes1&cad=2"</script>';
	

}
else
{




session_start();
$conta = count(@$_SESSION['itens']);

$total = $quant_sai*$vlr;
$tudo = @$_SESSION['vendas']['total'] + $total;



@$_SESSION['itens'][$conta][0] = $cod_prod;
@$_SESSION['itens'][$conta][1] = $id;
@$_SESSION['itens'][$conta][2] = $idpro;
@$_SESSION['itens'][$conta][3] = $codpro;
@$_SESSION['itens'][$conta][4] = $nome;
@$_SESSION['itens'][$conta][5] = $quant;
@$_SESSION['itens'][$conta][6] = $vlr;
@$_SESSION['itens'][$conta][7] = $icms;
@$_SESSION['itens'][$conta][8] = $ipi;
@$_SESSION['itens'][$conta][9] = $quant_sai;
@$_SESSION['itens'][$conta][10] = $total;
@$_SESSION['vendas']['total'] = $tudo;


	echo '<script>window.location="../../index.php?mod=ven&bot=tes1&cad=2"</script>';
	
}



?>