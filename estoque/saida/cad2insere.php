<?php
session_start();

require_once('../../raiz/arq/conecta2.php'); 

require_once('../../raiz/arq/funcoes.php'); 

$cod_prod = $_POST['codigop'];
$id = $_POST['id'];
$idd = $_POST['idd'];
$cod = $_POST['cod'];
$icms = $_POST['icms'];
$ipi = $_POST['ipi'];
$fab = $_POST['fab'];
$nome = $_POST['nome'];
@$vl_venda = @$_POST['vl_venda'];
$quant_sai = $_POST['quant_sai'];

if($cod_prod == '' || $quant_sai == '' )
{
	ok('Campos obrigatórios não preenchido');
	
	echo '<script>window.location="../../index.php?mod=est&bot=tes4&cad=2"</script>';
	

}
else
{
	
if(@$_SESSION['saida']['mat'] == 'P.A.')
{	
	$sql = "	
	
SELECT ip.IPA_QUANTIDADE quant
FROM itenspa ip
WHERE ip.IPA_ID = ".$idd


;



$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$quant = $query->quant;		
	

try 	
	{
		$conn->exec($sql);
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	
}	
elseif(@$_SESSION['saida']['mat'] == 'M.C.')
{
	$sql = "	
	
SELECT ip.IMC_QUANTIDADE quant
FROM itensmc ip
WHERE ip.IMC_ID = ".$idd


;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$quant = $query->quant;		



try 	
	{
		$conn->exec($sql);
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	




}


// echo "++++++++++$quant++++++++++++$quant_sai++++++++++$idd+++++++++";
// print_r($_SESSION['saida']['mat']);
if($quant < $quant_sai)
{
	ok('Estoque Insuficiente');
	echo '<script>window.location="../../index.php?mod=est&bot=tes4&cad=2"</script>';	
}
else
{	

$conta = count(@$_SESSION['itens']);




@$_SESSION['itens'][$conta][0] = $conta;
@$_SESSION['itens'][$conta][1] = $id;
@$_SESSION['itens'][$conta][2] = $cod;
@$_SESSION['itens'][$conta][3] = $icms;
@$_SESSION['itens'][$conta][4] = $ipi;
@$_SESSION['itens'][$conta][5] = $fab;
@$_SESSION['itens'][$conta][6] = $cod_prod;
@$_SESSION['itens'][$conta][7] = $quant_sai;
@$_SESSION['itens'][$conta][8] = $nome;
@$_SESSION['itens'][$conta][9] = @$vl_venda;
@$_SESSION['itens'][$conta][10] = @$idd;
@$_SESSION['itens'][$conta][11] = @$_SESSION['saida']['mat'];

	echo '<script>window.location="../../index.php?mod=est&bot=tes4&cad=2"</script>';
}	
}



?>