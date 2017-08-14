<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

/*
$sql = "

SELECT MAX(ps.PRO_CODIGO) codigo
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


	if($desc == '' || $a_desc == '' || $uni == '' || $ipi || $icms ||
	$barra == '' || $est_crit == '' || $est_max == '' || $est_min == '')
	{
		ok(utf8_encode('Campos Obrigatórios não preenchidos'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes1"</script>';
		
	}
	else
	{
		


$sqlalt = "


UPDATE `produto`
SET

`PRO_DESCRICAO`='".$desc."',
`PRO_AB_DESCRICAO`='".$a_desc."',
`PRO_UNIDADE`='".$uni."',
`PRO_COD_BARRA`='".$barra."',
`PRO_EST_MIN`='".$est_min."',
`PRO_EST_CRIT`='".$est_crit."',
`PRO_EST_MAX`='".$est_max."',
`PRO_FABRICANTE`='".$fabricante."',
`PRO_MARCA`='".$marca."',
`PRO_MODELO`='".$modelo."',
`PRO_CATEGORIA`='".$categoria."',
`PRO_PESO_BRUTO`='".$peso_b."',
`PRO_PESO_LIQ`='".$peso_l."',
`PRO_COMPRIMENTO`='".$comprimento."',
`PRO_LARGURA`='".$largura."',
`PRO_ALTURA`='".$altura."',
`PRO_GRADE`='".$grade."',
`PRO_AGRUPAMENTO`='".$agrup."',
`PRO_DIAS_GARANT`='".$dia_gar."',
`PRO_SIT_TRIB`='".$st_trib."',
`PRO_SUB_TRIB`='".$sb_trib."',
`PRO_CLASS_TRIB`='".$clas_fiscal."',
`PRO_COFINS`='".$cofins."',
`PRO_IRPJ`='".$irpj."',
`PRO_ICMS`='".$icms."',
`PRO_IPI`='".$ipi."',


`PRO_DATA_ALTTERACAO`='".$dataalteracao."',
`PRO_HORA_ALTERACAO`='".$horaalteracao."',
`PRO_IP_ALTERACAO`='".$ip_alteracao."',
`PRO_OBSERVACAO`='".$historico."',
`PRO_SESSION_ALTER`='".$session."',
`PRO_ID_ALTER`=".$usuario."

WHERE PRO_ID = ".$id;


$conn->exec($sqlalt);



		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location="../../index.php?mod=est&bot=tes1"</script>';		 
		 
		 
	}

?>