<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(pj.PEJ_CODIGO) codigo
FROM pessoa_juridica pj

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




$razaos =  @$_POST["razaos"];
$cnpj =  @$_POST["cnpj"];
$ie =  @$_POST["ie"];
$nfantasia =  @$_POST["nfantasia"];
$tel1 =  @$_POST["tel1"];
$cont1 =  @$_POST["cont1"];
$tel2 =  @$_POST["tel2"];
$cont2 =  @$_POST["cont2"];
$tel3 =  @$_POST["tel3"];
$cont3 =  @$_POST["cont3"];
$email =  @$_POST["email"];
$site =  @$_POST["site"];
$dt_fun =  @$_POST["dt_fun"];
$fundador =  @$_POST["fundador"];
$presidente =  @$_POST["presidente"];
$segmento =  @$_POST["segmento"];
$porte =  @$_POST["porte"];
$tip_emp =  @$_POST["tip_emp"];
$atividade =  @$_POST["atividade"];

$cep =  @$_POST["cep"];
$endereco =  @$_POST["endereco"];
$numero =  @$_POST["numero"];
$bairro =  @$_POST["bairro"];
$complemento =  @$_POST["complemento"];
$cidade =  @$_POST["cidade"];              //int
$estado =  @$_POST["estado"];				//int
$pais =  @$_POST["pais"];					//int
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

	if($razaos == '' || $cnpj == '' || $ie == '')
	{
		ok(utf8_encode('vc nao registrou o Razão Social ou CNPJ ou Inscrição Estadual'));
		echo '<script>window.location="../index.php?mod=gdp&bot=tes1"</script>';
		
	}
	else
	{
		


$sqlcad = "INSERT INTO `pessoa_juridica` 
(
`PEJ_CODIGO`,
`PEJ_PORTE`,
`PEJ_SEGMENTO`,
`PEJ_TIPO`,
`PEJ_ID_ALTER`,
`PEJ_ID_CAD`,
`PEJ_RAZAO_SOCIAL`,
`PEJ_CNPJ`,
`PEJ_INS_ESTATUAL`,
`PEJ_NOME_FANTASIA`,
`PEJ_TELEFONE1`,
`PEJ_CONTATO1`,
`PEJ_TELEFONE2`,
`PEJ_CONTATO2`,
`PEJ_TELEFONE3`,
`PEJ_CONTATO3`,
`PEJ_EMAIL`,
`PEJ_DATA_FUNDACAO`,
`PEJ_SITE`,
`PEJ_FUNDADOR`,
`PEJ_PRESIDENTE`,
`PEJ_ATIVIDADE`,
`PEJ_IMAGEM`,
`PEJ_CEP`,
`PEJ_ENDERECO`,
`PEJ_NUMERO`,
`PEJ_COMPLEMENTO`,
`PEJ_BAIRRO`,
`PEJ_CIDADE`,
`PEJ_ESTADO`,
`PEJ_PAIS`,
`PEJ_DATA_CADASTRO`,
`PEJ_HORA_CADASTRO`,
`PEJ_DATA_ALTERACAO`,
`PEJ_HORA_ALTERACAO`,
`PEJ_SESSION`,
`PEJ_IP_CADASTRO`,
`PEJ_IP_ALTERACAO`,
`PEJ_MOTIVO`,
`PEJ_SESSION_ALTER`
)
VALUES (
$codigo,
$porte,
$segmento,
$tip_emp,
$usuario,
$usuario,
'$razaos',
'$cnpj',
'$ie',
'$nfantasia',
'$tel1',
'$cont1',
'$tel2',
'$cont2',
'$tel3',
'$cont3',
'$email',
'$dt_fun',
'$site',
'$fundador',
'$presidente',
'$atividade',
'$img',
'$cep',
'$endereco',
'$numero',
'$complemento',
'$bairro',
'$cidade',
'$estado',
'$pais',
'$datacadastro',
'$horacadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
'$ip_cadastro',
'$historico',
'$session'
)
";


$conn->exec($sqlcad);



		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes2"</script>';		 
		 
		 
	}

?>