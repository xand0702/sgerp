<?php 

require_once('raiz/arq/funcoes.php'); 
require_once('raiz/arq/conecta2.php'); 



$del = @$_REQUEST["del"];





$sql = "

SELECT j.PEJ_IMAGEM img
FROM pessoa_juridica j
WHERE j.PEJ_ID = ".$del."

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
$img = "gdp/pessoajuridica/img/".$img;

//echo $img;


unlink(@$img);
}


$sql = '

DELETE FROM `pessoa_juridica` WHERE `PEJ_ID`='.$del.';

';





$conn->exec($sql);










		ok(utf8_encode('Deletado com sucesso'));
		echo '<script>window.location="index.php?mod=gdp&bot=tes2"</script>';	

?>