<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
$sql = "

SELECT MAX(ps.PEJ_CODIGO) codigo
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


$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];
$historico = @$_POST['historico'];

/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";


echo "**********".$usuario."************";
*/


	if($razaos == '' || $ie == '' || $cnpj == '')
	{
		ok(utf8_encode('vc nao registrou o Razão Social ou CNPJ ou Inscrição Estadual'));
		echo '<script>window.location="../index.php?mod=gdp&bot=tes2"</script>';
		
	}
	else
	{
		


$sqlalt = "
UPDATE `pessoa_juridica`
SET
`PEJ_RAZAO_SOCIAL`='".$razaos."',
`PEJ_CNPJ`='".$cnpj."',
`PEJ_INS_ESTATUAL`='".$ie."',
`PEJ_NOME_FANTASIA`='".$nfantasia."',
`PEJ_TELEFONE1`='".$tel1."',
`PEJ_CONTATO1`='".$cont1."',
`PEJ_TELEFONE2`='".$tel2."',
`PEJ_CONTATO2`='".$cont2."',
`PEJ_TELEFONE3`='".$tel3."',
`PEJ_CONTATO3`='".$cont3."',
`PEJ_EMAIL`='".$email."',
`PEJ_SITE`='".$site."',
`PEJ_DATA_FUNDACAO`='".$dt_fun."',
`PEJ_FUNDADOR`='".$fundador."',
`PEJ_PRESIDENTE`='".$presidente."',
`PEJ_ATIVIDADE`='".$atividade."',
`PEJ_SEGMENTO`=".$segmento.",
`PEJ_PORTE`=".$porte.",
`PEJ_TIPO`=".$tip_emp.",

`PEJ_CEP`='".$cep."',
`PEJ_ENDERECO`='".$endereco."',
`PEJ_NUMERO`='".$numero."',
`PEJ_BAIRRO`='".$bairro."',
`PEJ_COMPLEMENTO`='".$complemento."',
`PEJ_CIDADE`='".$cidade."',
`PEJ_ESTADO`='".$estado."',
`PEJ_PAIS`='".$pais."',


`PEJ_DATA_ALTERACAO`='".$dataalteracao."',
`PEJ_HORA_ALTERACAO`='".$horaalteracao."',
`PEJ_ID_ALTER`=".$usuario.",
`PEJ_SESSION_ALTER`='".$session."',
`PEJ_IP_ALTERACAO`='".$ip_alteracao."',
`PEJ_MOTIVO`='".$historico."'

WHERE PEJ_ID = ".$id;


$conn->exec($sqlalt);



		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes2"</script>';		 
		 
		 
	}

?>