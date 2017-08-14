<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(ps.PEF_CODIGO) codigo
FROM pessoa_fisica ps

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




$nome = @$_POST["nome"];
$cpf =  @$_POST["cpf"];
$numero =  @$_POST["numero"];
$complemento =  @$_POST["complemento"];


$dt_exp =  @$_POST["dt_exp"];
$tel =  @$_POST["telefone"];
$cel =  @$_POST["celular"];
$cep =  @$_POST["cep"];
$email =  @$_POST["email"];
$rg =  @$_POST["rg"];
$oe =  @$_POST["oe"];
$dn =  @$_POST["dn"];						//date
$nmae =  @$_POST["nmae"];
$npai =  @$_POST["npai"];
$sexo =  @$_POST["sexo"];					//int
$endereco =  @$_POST["endereco"];
$bairro =  @$_POST["bairro"];
$cidade =  @$_POST["cidade"];              //int
$estado =  @$_POST["estado"];				//int
$pais =  @$_POST["pais"];					//int
$naturalidade =  @$_POST["naturalidade"];		//int
$nacionalidade =  @$_POST["nacionalidade"];		//int
$ecivil =  @$_POST["ecivil"];					//int
$imagem =  @$_POST["imagem"];
$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];
$historico = @$_POST['historico'];
$img = @$_FILES["file"]["name"];




//echo "**********".$_SESSION['cf']."************";






//echo "**********".$_FILES["file"]["size"].$img."************";








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















/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";




*/

	if($nome == '' || $tel == '' || $cpf == '')
	{
		ok(utf8_encode('vc nao registrou o nome ou cpf ou telefone'));
		echo '<script>window.location="../index.php?mod=gdp&bot=tes1"</script>';
		
	}
	else
	{
		


$sqlcad = "INSERT INTO `pessoa_fisica` 
(
`PEF_CODIGO`,
`PEF_CIDADE`,
`PEF_ESTADO`,
`PEF_SEXO`,
`PEF_NATURALIDADE`,
`PEF_NACIONALIDADE`,
`PEF_ESTADO_CIVIL`,
`PEF_PAIS`,
`PEF_NOME`,
`PEF_TELEFONE`,
`PEF_CELULAR`,
`PEF_CPF`,
`PEF_RG`,
`PEF_ORGEX`,
`PEF_PAI`,
`PEF_MAE`,
`PEF_IMAGEM`,
`PEF_CEP`,
`PEF_BAIRRO`,
`PEF_ENDERECO`,
`PEF_EMAIL`,
`PEF_DATA_CADASTRO`,
`PEF_HORA_CADASTRO`,
`PEF_DATA_ALTERACAO`,
`PEF_HORA_ALTERACAO`,
`PEF_DATA_NASCIMENTO`,
`PEF_ID_USUARIO`,
`PEF_SESSION`,
`PEF_IP_CADASTRO`,
`PEF_IP_ALTERACAO`,
`PEF_MOTIVO`,
`PEF_COMPLEMENTO`,
`PEF_NUMERO`,
`PEF_SESSION_ALTER`,
`PEF_ID_USUARIO_ALTER`,
`PEF_DATA_EXPEDICAO`
)
VALUES (
$codigo,
$cidade,
$estado,
$sexo,
$naturalidade,
$nacionalidade,
$ecivil,
$pais,
'$nome',
'$tel',
'$cel',
'$cpf',
'$rg',
'$oe',
'$npai',
'$nmae',
'$img',
'$cep',
'$bairro',
'$endereco',
'$email',
'$datacadastro',
'$horacadastro',
'$dataalteracao',
'$horaalteracao',
'$dn',
$usuario,
'$session',
'$ip_cadastro',
'$ip_cadastro',
'$historico',
'$complemento',
'$numero',
'$session',
$usuario,
'$dt_exp'
)
";


$conn->exec($sqlcad);



		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes1"</script>';		 
		 
		 
	}

?>