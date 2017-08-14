<?php


require_once('../../raiz/arq/conecta2.php'); 

require_once('../../raiz/arq/funcoes.php'); 

$codigot = $_POST['codigot'];
$nome = $_POST['nome'];
$cod = $_POST['cod'];
$fab = $_POST['fab'];
$tempo = $_POST['tempo'];
$preco = $_POST['preco'];
$dt_ini = $_POST['dt_ini'];
$desc = $_POST['desc'];



if($codigot == '' || $tempo == '' || $preco == ''
 || $dt_ini == '')
{
	ok('Campos obrigatórios não preenchido');
	
	echo '<script>window.location="../../index.php?mod=com&bot=tes1&cad=2"</script>';
	

}
else
{




session_start();
$conta = count(@$_SESSION['itens']);




@$_SESSION['itens'][$conta][0] = $conta;
@$_SESSION['itens'][$conta][1] = $codigot;
@$_SESSION['itens'][$conta][2] = $nome;
@$_SESSION['itens'][$conta][3] = $cod;
@$_SESSION['itens'][$conta][4] = $fab;
@$_SESSION['itens'][$conta][5] = $tempo;
@$_SESSION['itens'][$conta][6] = $preco;
@$_SESSION['itens'][$conta][7] = $dt_ini;
@$_SESSION['itens'][$conta][8] = @$_SESSION['pedido']['mat'];
@$_SESSION['itens'][$conta][9] = $desc;




	echo '<script>window.location="../../index.php?mod=com&bot=tes1&cad=2"</script>';
	
}



?>