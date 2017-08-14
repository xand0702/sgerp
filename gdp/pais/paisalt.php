<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
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

*/


$id = @$_POST["id"];
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
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$historico = @$_POST['historico'];
$img = @$_FILES["file"]["name"];

/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";


echo "**********".$usuario."************";
*/


	if($nome == '' || $tel == '' || $cpf == '')
	{
		ok(utf8_encode('vc nao registrou o nome ou cpf ou telefone'));
		echo '<script>window.location="../index.php?mod=gdp&bot=tes1"</script>';
		
	}
	else
	{
		


$sqlalt = "


UPDATE `pessoa_fisica`
SET
`PEF_CIDADE`=".$cidade.",
`PEF_ESTADO`=".$estado.",
`PEF_SEXO`=".$sexo.",
`PEF_NATURALIDADE`=".$naturalidade.",
`PEF_NACIONALIDADE`=".$nacionalidade.",
`PEF_ESTADO_CIVIL`=".$ecivil.",
`PEF_PAIS`=".$pais.",
`PEF_NOME`='".$nome."',
`PEF_TELEFONE`='".$tel."',
`PEF_CELULAR`='".$cel."',
`PEF_CPF`='".$cpf."',
`PEF_RG`='".$rg."',
`PEF_ORGEX`='".$oe."',
`PEF_PAI`='".$npai."',
`PEF_MAE`='".$nmae."',
`PEF_CEP`='".$cep."',
`PEF_BAIRRO`='".$bairro."',
`PEF_ENDERECO`='".$endereco."',
`PEF_EMAIL`='".$email."',
`PEF_DATA_ALTERACAO`='".$dataalteracao."',
`PEF_HORA_ALTERACAO`='".$horaalteracao."',
`PEF_DATA_NASCIMENTO`='".$dn."',
`PEF_ID_USUARIO_ALTER`=".$usuario.",
`PEF_SESSION_ALTER`='".$session."',
`PEF_IP_ALTERACAO`='".$ip_alteracao."',
`PEF_MOTIVO`='".$historico."',
`PEF_COMPLEMENTO`='".$complemento."',
`PEF_NUMERO`='".$numero."',
`PEF_DATA_EXPEDICAO`='".$dt_exp."'
WHERE PEF_ID = ".$id;


$conn->exec($sqlalt);



		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes1"</script>';		 
		 
		 
	}

?>