<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];





$sql = "

SELECT p.PRO_IMAGEM img
FROM produto p
WHERE p.PRO_ID = ".$del."

" ;


$query = $conn->prepare($sql);

$query->execute();

$img = $query->fetch(PDO::FETCH_OBJ);

$img = $img->img;



if($img == '')
{
	
}
else
{
$img = "estoque/produto/img/".$img;

//echo $img;


unlink(@$img);
}


$sql = '

DELETE FROM `produto` WHERE `PRO_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=est&bot=tes1"</script>';	

?>