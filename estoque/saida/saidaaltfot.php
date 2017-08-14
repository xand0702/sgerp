<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();





$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$id =  @$_POST["idfoto"];
$img = @$_FILES["file"]["name"];



$sqlfoto = "

SELECT p.SAI_IMAGEM img, p.SAI_CODIGO codigo
FROM saida p
WHERE p.SAI_ID = ".$id."


";

$query = $conn->prepare($sqlfoto);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$foto = $query->img;

$codigo = $query->codigo;


if($foto == '')
{
	
}
else
{	
$foto = "img/".$foto;
unlink(@$foto);
}















function imgauto()
{

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 3000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
   // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 //   echo "Type: " . $_FILES["file"]["type"] . "<br>";
 //   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("img/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
     // echo "Stored in: " . "img/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  //echo "Invalid file";
  }
}



imgauto();






		


$sqlalt = "


UPDATE `saida`
SET
`SAI_DATA_ALTTERACAO`='".$dataalteracao."',
`SAI_HORA_ALTERACAO`='".$horaalteracao."',
`SAI_ID_ALTER`=".$usuario.",
`SAI_SESSION_ALTER`='".$session."',
`SAI_IP_ALTERACAO`='".$ip_alteracao."',
`SAI_IMAGEM`='".$img."'
WHERE SAI_ID = ".$id;







try 	
	{
		$conn->exec($sqlalt);
		ok(utf8_encode('Foto alterada com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes4&info='.$codigo.'"</script>';		 
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }







		 
		 


?>