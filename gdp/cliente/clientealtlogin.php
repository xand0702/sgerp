<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
$sql = "

SELECT MAX(f.FUN_CODIGO) codigo
FROM funcinario f

" ;


$query = $conn->prepare($sql);

$query->execute();

$codigo = $query->fetch(PDO::FETCH_OBJ);

$codigo = $codigo->codigo;

if($codigo == '')
{
	$codigo = $codigo + 1;
}

$codigo++;

*/






$id = @$_POST["id"];

$usuario =  @$_POST["usuario"];
$senha =  @$_POST["pass"];
$nivel =  @$_POST["n_acess"];




	if($usuario == '' || $senha == '' )
	{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
		
	}
	else
	{

  
  
$sqlalt = "
UPDATE `funcinario`
SET
  `FUN_USUARIO` = '".$usuario."',
  `FUN_SENHA` = '".$senha."',
  `FUN_NIVEL` = '".$nivel."'

WHERE FUN_ID = ".$id;





try 	
	{
		$conn->exec($sqlalt);
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

		 
	}

?>