<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


$sql = "

SELECT MAX(ps.PRO_CODIGO) codigo
FROM produto ps

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




$desc = @$_POST["desc"];
$a_desc =  @$_POST["a_desc"];
$uni =  @$_POST["uni"];
$barra =  @$_POST["barra"];
$est_min =  @$_POST["est_min"];
$est_crit =  @$_POST["est_crit"];
$est_max =  @$_POST["est_max"];
$fabricante =  @$_POST["fabricante"];
$marca =  @$_POST["marca"];
$modelo =  @$_POST["modelo"];
$categoria =  @$_POST["categoria"];
$peso_b =  @$_POST["peso_b"];						//date
$peso_l =  @$_POST["peso_l"];
$comprimento =  @$_POST["comprimento"];
$largura =  @$_POST["largura"];					//int
$altura =  @$_POST["altura"];
$grade =  @$_POST["grade"];
$agrup =  @$_POST["agrup"];              //int
$dia_gar =  @$_POST["dia_gar"];				//int
$st_trib =  @$_POST["st_trib"];					//int
$sb_trib =  @$_POST["sb_trib"];		//int
$clas_fiscal =  @$_POST["clas_fiscal"];		//int
$cofins =  @$_POST["cofins"];					//int
$irpj =  @$_POST["irpj"];
$icms =  @$_POST["icms"];              //int
$ipi =  @$_POST["ipi"];				//int


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

	if($desc == '' || $a_desc == '' || $uni == '' || $est_max == '' 
	|| $ipi || $icms || $barra == '' || $est_min == '' || $est_crit == '')
	{
		ok(utf8_encode('Prenchimento obrigatorio não registrado'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes1"</script>';
		
	}
	else
	{
		


$sqlcad = "INSERT INTO `produto` 
(
`PRO_CODIGO`,

`PRO_DESCRICAO`,
`PRO_AB_DESCRICAO`,
`PRO_UNIDADE`,
`PRO_COD_BARRA`,
`PRO_EST_MIN`,
`PRO_EST_CRIT`,
`PRO_EST_MAX`,
`PRO_FABRICANTE`,
`PRO_MARCA`,
`PRO_MODELO`,
`PRO_CATEGORIA`,
`PRO_PESO_BRUTO`,
`PRO_PESO_LIQ`,
`PRO_COMPRIMENTO`,
`PRO_LARGURA`,
`PRO_ALTURA`,
`PRO_GRADE`,
`PRO_AGRUPAMENTO`,
`PRO_DIAS_GARANT`,
`PRO_SIT_TRIB`,
`PRO_SUB_TRIB`,
`PRO_CLASS_TRIB`,
`PRO_COFINS`,
`PRO_IRPJ`,
`PRO_ICMS`,
`PRO_IPI`,

`PRO_IMAGEM`,
`PRO_DATA_CADASTRO`,
`PRO_HORA_CADASTRO`,
`PRO_DATA_ALTTERACAO`,
`PRO_HORA_ALTERACAO`,
`PRO_ID_CAD`,
`PRO_SESSION_CAD`,
`PRO_IP_CADASTRO`,
`PRO_IP_ALTERACAO`,
`PRO_OBSERVACAO`,
`PRO_SESSION_ALTER`,
`PRO_ID_ALTER`
)
VALUES (
$codigo,

'$desc',
'$a_desc',
'$uni',
'$barra',
'$est_min',
'$est_crit',
'$est_max',
'$fabricante',
'$marca',
'$modelo',
'$categoria',
'$peso_b',
'$peso_l',
'$comprimento',
'$largura',
'$altura',
'$grade',
'$agrup',
'$dia_gar',
'$st_trib',
'$sb_trib',
'$clas_fiscal',
'$cofins',
'$irpj',
'$icms',
'$ipi',

'$img',
'$datacadastro',
'$horacadastro',
'$dataalteracao',
'$horaalteracao',
$usuario,
'$session',
'$ip_cadastro',
'$ip_cadastro',
'$historico',
'$session',
$usuario
)
";


$conn->exec($sqlcad);



		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes1"</script>';		 
		 
		 
	}

?>