<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

$id = $_SESSION['produtoacabado']['cod_cli'];


if($_SESSION['produtoacabado']['cod_cli'] == '' ||

@$_SESSION['produtoacabado']['nota'] == '' ||


@$_SESSION['produtoacabado']['pedido'] == '' || 
 
@$_SESSION['produtoacabado']['dt_emissao'] == '' || 
 
@$_SESSION['produtoacabado']['dt_saida'] == '' || 
 
@$_SESSION['produtoacabado']['hr_saida'] == '' || 
 
@$_SESSION['produtoacabado']['cfcb'] == '' || 
 
@$_SESSION['produtoacabado']['serie'] == '' || 
 
@$_SESSION['produtoacabado']['pagina'] == '' || 
 
@$_SESSION['produtoacabado']['nt_op'] == '' || 
 
@$_SESSION['produtoacabado']['nfe'] == '' || 
 

@$_SESSION['produtoacabado']['codigo'] == ''
)

{
$id = $_SESSION['produtoacabado']['cod_cli'];

		
@$nota = @$_POST['nota'];




$pedido = @$_POST['pedido'];




$dt_emissao = @$_POST['dt_emissao'];




$dt_saida = @$_POST['dt_saida'];




$hr_saida = @$_POST['hr_saida'];




$cfcb = @$_POST['cfcb'];




$serie = @$_POST['serie'];




$pagina = @$_POST['pagina'];




$nt_op = @$_POST['nt_op'];




$nfe = @$_POST['nfe'];



$codigo = @$_POST['codigo'];



	$id = $_SESSION['produtoacabado']['cod_cli'];
	
$_SESSION['produtoacabado']['nota'] = $nota;

	
	$_SESSION['produtoacabado']['pedido'] = $pedido;
	
		
	$_SESSION['produtoacabado']['dt_emissao'] = $dt_emissao;
	
		
	$_SESSION['produtoacabado']['dt_saida'] = $dt_saida;
	
		
	$_SESSION['produtoacabado']['hr_saida'] = $hr_saida;
	
		
	$_SESSION['produtoacabado']['cfcb'] = $cfcb;
	
		
	$_SESSION['produtoacabado']['serie'] = $serie;
	
		
	$_SESSION['produtoacabado']['pagina'] = $pagina;
	
		
	$_SESSION['produtoacabado']['nt_op'] = $nt_op;
	
		
	$_SESSION['produtoacabado']['nfe'] = $nfe;
	
		
	$_SESSION['produtoacabado']['codigo'] = $codigo;
}
	

else
	{
	$id = $_SESSION['produtoacabado']['cod_cli'];	
	
	
	
$nota = $_SESSION['produtoacabado']['nota'];



$pedido = $_SESSION['produtoacabado']['pedido'];
	
	

$dt_emissao = $_SESSION['produtoacabado']['dt_emissao'];
	
	

$dt_saida = $_SESSION['produtoacabado']['dt_saida'];
	
	

$hr_saida = $_SESSION['produtoacabado']['hr_saida'];
	
	

$cfcb = $_SESSION['produtoacabado']['cfcb'];
	
	

$serie = $_SESSION['produtoacabado']['serie'];
	
	

$pagina = $_SESSION['produtoacabado']['pagina'];
	
	

$nt_op = $_SESSION['produtoacabado']['nt_op'];
	
	

$nfe = $_SESSION['produtoacabado']['nfe'];
	
	

$codigo = $_SESSION['produtoacabado']['codigo'];
	
	}
	
$obs = @$_POST['obs'];

$_SESSION['produtoacabado']['obs'] = $obs;



if($nota == '' || 



$pedido == '' || 
	

$dt_emissao == '' || 
	

$dt_saida == '' || 
	

$hr_saida == '' || 
	

$cfcb == '' || 
	

$serie == '' || 
	

$pagina == '' || 
	

$nt_op == '' || 
	

$nfe == '' || 
	
	$codigo == ''
	)
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="index.php?mod=est&bot=tes2&cad=3"</script>';
	
}	
	

?>

