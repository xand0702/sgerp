<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


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
	$codigo = 0;
}

$codigo++;






$usuario = $_SESSION['funcionario']['usuario'];
$pass = $_SESSION['funcionario']['pass'];
$n_acess = $_SESSION['funcionario']['n_acess'];
$id = $_SESSION['funcionario']['cod_pf'];
	
$setor = $_SESSION['funcionario']['setor'];
$cargo = $_SESSION['funcionario']['cargo'];
$funcao = $_SESSION['funcionario']['funcao'];
$ct = $_SESSION['funcionario']['ct'];
$seriect = $_SESSION['funcionario']['seriect'];
$pis = $_SESSION['funcionario']['pis'];
$sal_car = $_SESSION['funcionario']['sal_car'];
$cbo = $_SESSION['funcionario']['cbo'];

$desc_cbo = $_SESSION['funcionario']['desc_cbo'];
$fgts = $_SESSION['funcionario']['fgts'];
$ex_med = $_SESSION['funcionario']['ex_med'];
$ex_aud = $_SESSION['funcionario']['ex_aud'];
$ex_epi = $_SESSION['funcionario']['ex_epi'];
$ex_adm = $_SESSION['funcionario']['ex_adm'];
$v_p_e = $_SESSION['funcionario']['v_p_e'];
$comissao = $_SESSION['funcionario']['comissao'];
$v_hora = $_SESSION['funcionario']['v_hora'];
$sal_fam = $_SESSION['funcionario']['sal_fam'];

$complemento = $_SESSION['funcionario']['complemento'];
$b_fer = $_SESSION['funcionario']['b_fer'];
$b_13 = $_SESSION['funcionario']['b_13'];
$entrada = $_SESSION['funcionario']['entrada'];
$h_alm = $_SESSION['funcionario']['h_alm'];
$h_alm_v = $_SESSION['funcionario']['h_alm_v'];
$saida = $_SESSION['funcionario']['saida'];
$carg_dia = $_SESSION['funcionario']['carg_dia'];
$carg_sem = $_SESSION['funcionario']['carg_sem'];
$dia_rep = $_SESSION['funcionario']['dia_rep'];

$hr_vaga = $_SESSION['funcionario']['hr_vaga'];
$sh_cat = $_SESSION['funcionario']['sh_cat'];
$cnh = $_SESSION['funcionario']['cnh'];
$cnh_venc = $_SESSION['funcionario']['cnh_venc'];
$cnh_cat = $_SESSION['funcionario']['cnh_cat'];
$tit = $_SESSION['funcionario']['tit'];
$tit_zona = $_SESSION['funcionario']['tit_zona'];
$tit_secao = $_SESSION['funcionario']['tit_secao'];
$conjuge = $_SESSION['funcionario']['conjuge'];
$ct_cas = $_SESSION['funcionario']['ct_cas'];

$filhos = $_SESSION['funcionario']['filhos'];
$escolaridade = $_SESSION['funcionario']['escolaridade'];
$apos = $_SESSION['funcionario']['apos'];
$def = $_SESSION['funcionario']['def'];
$def_desc = $_SESSION['funcionario']['def_desc'];
$n_camisa = $_SESSION['funcionario']['n_camisa'];
$n_calca = $_SESSION['funcionario']['n_calca'];
$n_calcado = $_SESSION['funcionario']['n_calcado'];
$obs = $_SESSION['funcionario']['obs'];
$situacao = 1;




$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];








/*
echo "**********".$codigo."************";
echo "**********".$datacadastro."************";
echo "**********".$horacadastro."************";
echo "**********".$dataalteracao."************";
echo "**********".$horaalteracao."************";




*/


		


$sqlcad = "INSERT INTO `funcinario` 
(
  `FUN_CODIGO`,
  `FUN_COD_PEF`,
  `FUN_SITUACAO`,
  `FUN_SETOR`,
  `FUN_CARGO`,
  `FUN_FUNCAO`,
  `FUN_CARTEIRA_TRAB`,
  `FUN_SERIE_CT`,
  `FUN_FGTS`,
  `FUN_PIS`,
  `FUN_CBO`,
  `FUN_DESC_CBO`,
  `FUN_CNH`,
  `FUN_CNH_VENC`,
  `FUN_CATEGORIA`,
  `FUN_TITULO_ELEITOR`,
  `FUN_ZONA`,
  `FUN_SECAO`,
  `FUN_CONJUGE`,
  `FUN_CERT_CASAMENTO`,
  `FUN_FILHOS`,
  `FUN_EXAME_MEDICO`,
  `FUN_EXAME_AUDIOMETRIA`,
  `FUN_EXAME_EPI`,
  `FUN_EXAME_ADMICAO`,
  `FUN_VENC1_EXP`,
  `FUN_SALARIO_CARTEIRA`,
  `FUN_COMISSAO`,
  `FUN_VALOR_HORA`,
  `FUN_SALARIO_FAMILIA`,
  `FUN_COMP_SAL`,
  `FUN_BASE_FERIAS`,
  `FUN_BASE_13`,
  `FUN_ESCOLARIDADE`,
  `FUN_ENTRADA`,
  `FUN_ALMOCO`,
  `FUN_ALMOCO_VOLT`,
  `FUN_SAIDA`,
  `FUN_CARG_HOR_DIA`,
  `FUN_CARG_HOR_SEM`,
  `FUN_DIA_REPOUSO`,
  `FUN_HOR_VAG`,
  `FUN_SENHA_CAT`,
  `FUN_APOSENTADO`,
  `FUN_DEFICIENTE`,
  `FUN_DEFICIENTE_DESC`,
  `FUN_N_CAMISA`,
  `FUN_N_CALCA`,
  `FUN_N_CALCADO`,
  `FUN_OBSERVACAO`,
  `FUN_DATA_CADASTRO`,
  `FUN_HORA_CADASTRO`,
  `FUN_SESSION_CAD`,
  `FUN_IP_CADASTRO`,
  `FUN_DATA_ALTTERACAO`,
  `FUN_HORA_ALTERACAO`,
  `FUN_SESSION_ALTER`,
  `FUN_IP_ALTERACAO`,
  `FUN_ID_ALTER`,
  `FUN_ID_CAD`,
  `FUN_USUARIO`,
  `FUN_SENHA`,
  `FUN_NIVEL`
)
VALUES (
$codigo,
$id,
'$situacao',
'$setor',
'$cargo',
'$funcao',
'$ct',
'$seriect',
'$fgts',
'$pis',
'$cbo',
'$desc_cbo',
'$cnh',
'$cnh_venc',
'$cnh_cat',
'$tit',
'$tit_zona',
'$tit_secao',
'$conjuge',
'$ct_cas',
'$filhos',
'$ex_med',
'$ex_aud',
'$ex_epi',
'$ex_adm',
'$v_p_e',
'$sal_car',
'$comissao',
'$v_hora',
'$sal_fam',
'$complemento',
'$b_fer',
'$b_13',
'$escolaridade',
'$entrada',
'$h_alm',
'$h_alm_v',
'$saida',
'$carg_dia',
'$carg_sem',
'$dia_rep',
'$hr_vaga',
'$sh_cat',
'$apos',
'$def',
'$def_desc',
'$n_camisa',
'$n_calca',
'$n_calcado',
'$obs',
'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad,
'$usuario',
'$pass',
'$n_acess'

)
";

$conn->exec($sqlcad);



		unset($_SESSION['funcionario']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	

/*
	try 	
	{
		$conn->exec($sqlcad);
		unset($_SESSION['funcionario']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location="../../index.php?mod=gdp&bot=tes3"</script>';	
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }

*/
		

		
		 
		 
	

?>