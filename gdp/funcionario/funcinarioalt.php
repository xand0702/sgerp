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

$situacao =  @$_POST["situacao"];
$setor =  @$_POST["setor"];
$cargo =  @$_POST["cargo"];
$funcao =  @$_POST["funcao"];
$ct =  @$_POST["ct"];
$seriect =  @$_POST["seriect"];
$pis =  @$_POST["pis"];
$sal_car =  @$_POST["sal_car"];
$cbo =  @$_POST["cbo"];
$desc_cbo =  @$_POST["desc_cbo"];
$fgts =  @$_POST["fgts"];
$ex_med =  @$_POST["ex_med"];
$ex_med_prox =  @$_POST["ex_med_prox"];
$ex_aud =  @$_POST["ex_aud"];
$ex_aud_prox =  @$_POST["ex_aud_prox"];
$ex_epi =  @$_POST["ex_epi"];
$revogacao =  @$_POST["revogacao"];

$ex_adm =  @$_POST["ex_adm"];
$v_p_e =  @$_POST["v_p_e"];
$v_s_e =  @$_POST["v_s_e"];
$comissao =  @$_POST["comissao"];     
$v_hora =  @$_POST["v_hora"];     
$sal_fam =  @$_POST["sal_fam"];			

$complemento =  @$_POST["complemento"];					
$b_fer =  @$_POST["b_fer"];					
$b_13 =  @$_POST["b_13"];					
$entrada =  @$_POST["entrada"];					
$h_alm =  @$_POST["h_alm"];					
$h_alm_v =  @$_POST["h_alm_v"];					
$saida =  @$_POST["saida"];	

				
$carg_dia =  @$_POST["carg_dia"];					
$carg_sem =  @$_POST["carg_sem"];					
$dia_rep =  @$_POST["dia_rep"];					
$hr_vaga =  @$_POST["hr_vaga"];					
$sh_cat =  @$_POST["sh_cat"];					
$cnh =  @$_POST["cnh"];					
$cnh_venc =  @$_POST["cnh_venc"];					
$cnh_cat =  @$_POST["cnh_cat"];		

			
$tit =  @$_POST["tit"];					
$tit_zona =  @$_POST["tit_zona"];					
$tit_secao =  @$_POST["tit_secao"];					
$conjuge =  @$_POST["conjuge"];					
$ct_cas =  @$_POST["ct_cas"];					
$filhos =  @$_POST["filhos"];					
$escolaridade =  @$_POST["escolaridade"];					
$apos =  @$_POST["apos"];					
$def =  @$_POST["def"];					
$def_desc =  @$_POST["def_desc"];					
$n_camisa =  @$_POST["n_camisa"];					
$n_calca =  @$_POST["n_calca"];					
$n_calcado =  @$_POST["n_calcado"];					
$dt_aviso =  @$_POST["dt_aviso"];					
$dt_dem =  @$_POST["dt_dem"];					
$razao =  @$_POST["razao"];					
$obs =  @$_POST["obs"];					


$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario = @$_SESSION['cf'];
$ip_alteracao = @$_SERVER['REMOTE_ADDR'];

/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";


echo "**********".$usuario."************";
*/


	if($setor == '' || $cargo == '' || $funcao == '' || $ct == '' || $seriect == '' || $pis == '' || $sal_car == '' || $cbo == ''  )
	{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
		
	}
	else
	{

  
  
$sqlalt = "
UPDATE `funcinario`
SET
  `FUN_SITUACAO` = '".$situacao."',
  `FUN_SETOR` = '".$setor."',
  `FUN_CARGO` = '".$cargo."',
  `FUN_FUNCAO` = '".$funcao."',
  `FUN_CARTEIRA_TRAB` = '".$ct."',
  `FUN_SERIE_CT` = '".$seriect."',
  `FUN_FGTS` = '".$fgts."',
  `FUN_PIS` = '".$pis."',
  `FUN_CBO` = '".$cbo."',
  `FUN_DESC_CBO` = '".$desc_cbo."',
  `FUN_CNH` = '".$cnh."',
  `FUN_CNH_VENC` = '".$cnh_venc."',
  `FUN_CATEGORIA` = '".$cnh_cat."',
  `FUN_TITULO_ELEITOR` = '".$tit."',
  `FUN_ZONA` = '".$tit_zona."',
  `FUN_SECAO` = '".$tit_secao."',
  `FUN_CONJUGE` = '".$conjuge."',
  `FUN_CERT_CASAMENTO` = '".$ct_cas."',
  `FUN_FILHOS` = '".$filhos."',
  `FUN_EXAME_MEDICO` = '".$ex_med."',
  `FUN_PROX_EXAME_MED` = '".$ex_med_prox."',
  `FUN_EXAME_AUDIOMETRIA` = '".$ex_aud."',
  `FUN_PROX_EXAME_AUD` = '".$ex_aud_prox."',
  `FUN_EXAME_EPI` = '".$ex_epi."',
  `FUN_REVOGACAO` = '".$revogacao."',
  `FUN_EXAME_ADMICAO` = '".$ex_adm."',
  `FUN_VENC1_EXP` = '".$v_p_e."',
  `FUN_VENC2_EXP` = '".$v_s_e."',
  `FUN_SALARIO_CARTEIRA` = '".$sal_car."',
  `FUN_COMISSAO` = '".$comissao."',
  `FUN_VALOR_HORA` = '".$v_hora."',
  `FUN_SALARIO_FAMILIA` = '".$sal_fam."',
  `FUN_COMP_SAL` = '".$complemento."',
  `FUN_BASE_FERIAS` = '".$b_fer."',
  `FUN_BASE_13` = '".$b_13."',
  `FUN_ESCOLARIDADE` = '".$escolaridade."',
  `FUN_ENTRADA` = '".$entrada."',
  `FUN_ALMOCO` = '".$h_alm."',
  `FUN_ALMOCO_VOLT` = '".$h_alm_v."',
  `FUN_SAIDA` = '".$saida."',
  `FUN_CARG_HOR_DIA` = '".$carg_dia."',
  `FUN_CARG_HOR_SEM` = '".$carg_sem."',
  `FUN_DIA_REPOUSO` = '".$dia_rep."',
  `FUN_HOR_VAG` = '".$hr_vaga."',
  `FUN_SENHA_CAT` = '".$sh_cat."',
  `FUN_APOSENTADO` = '".$apos."',
  `FUN_DEFICIENTE` = '".$def."',
  `FUN_DEFICIENTE_DESC` = '".$def_desc."',
  `FUN_N_CAMISA` = '".$n_camisa."',
  `FUN_N_CALCA` = '".$n_calca."',
  `FUN_N_CALCADO` = '".$n_calcado."',
  `FUN_DATA_AVISO` = '".$dt_aviso."',
  `FUN_DATA_DEM` = '".$dt_dem."',
  `FUN_RAZAO` = '".$razao."',
  `FUN_OBSERVACAO` = '".$obs."',

  `FUN_DATA_ALTTERACAO` = '".$dataalteracao."',
  `FUN_HORA_ALTERACAO` = '".$horaalteracao."',
  `FUN_SESSION_ALTER` = '".$session."',
  `FUN_IP_ALTERACAO` = '".$ip_alteracao."',
  `FUN_ID_ALTER` = ".$usuario."

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