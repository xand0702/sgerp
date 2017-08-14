<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();

require('caddf.php'); 

if(@$_SESSION['vendas']['pgmto'] == 'avista')
{
	echo '<script>window.location="finalcad.php"</script>';	
}
else
{
$sqll[0] = "VEN_ID";
$sqll[1] = "N_PAR";
$sqll[2] = "VL_PAR";
$sqll[3] = "PAGO";
$sqll[4] = "TX";
$sqll[5] = "DT_PGMT";
$sqll[6] = "T_PARC";



$variavelp[0] = "ven_id";
$variavelp[1] = "num_p";
$variavelp[2] = "vl_par";
$variavelp[3] = "pago";
$variavelp[4] = "txj";
$variavelp[5] = "dt_ven";
$variavelp[6] = "t_parc";



$sql = "

SELECT MAX(f.VEN_ID) codigo
FROM vendas f

" ;

try 	
	{
		@$query = $conn->prepare($sql);

		@$query->execute();

		@$codigo = $query->fetch(PDO::FETCH_OBJ);

		@$codigo = $codigo->codigo;
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }


	
	
	


$hoje = date('Y-m-d');
	

		function datapar($data)
		{
			if($data == null)
			{
				echo "";
			}
			else
			{
			$dt = explode("-", $data);
				if($dt[1] == 12)
				{
					$dt[1] = 01;
					$dt[0]++;
				}
				else
				{
					$dt[1]++;
				}
			$dtimp =  $dt[0]."-".$dt[1]."-".$dt[2];
			return $dtimp;
			}
		}	
		
		
$parcelas = @$_SESSION[vendas]['n_p']; 
$parcelas++;		
for($i=1; $i < $parcelas; $i++)
{
	$hoje = datapar($hoje);

$_SESSION['vendas']['ven_id'][$i] = $codigo ;
$_SESSION['vendas']['num_p'][$i] = $i;
$_SESSION['vendas']['vl_par'][$i] = @$_SESSION[vendas][parcela] ;
$_SESSION['vendas']['pago'][$i] = "NÃO";
$_SESSION['vendas']['txj'][$i] = @$_SESSION[vendas][txj] ;
$_SESSION['vendas']['dt_ven'][$i] = $hoje;
$_SESSION['vendas']['t_parc'][$i] = $parcelas - 1;


}

$tvendasef = new classcaddf();
$tvendasef->caddf('VNG_', 'ven', 'vendas','tes1','vendas', 'venpgmt', $variavelp, $sqll);


require('../../vendas/vendas/tmp/caddf.php'); 
}
?>