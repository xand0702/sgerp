		<?php 



require_once('vendas/vendas/classinfo.php'); 
require_once('vendas/vendas/classinfotable.php'); 
require_once('vendas/vendas/classinfotablef.php'); 
require_once('vendas/vendas/classfechainfo.php'); 



require_once('vendas/vendas/classcad2pp.php'); 


$id = $_REQUEST['info'];


$colunainfo[0][0] = 'NOTA'; //label
$colunainfo[0][1] = 'VEN_CODIGO'; //sql
$colunainfo[0][2] = ''; //tipo


$colunainfo[1][0] = 'Data Emissão'; //label
$colunainfo[1][1] = 'VEN_DATA_CADASTRO'; //sql
$colunainfo[1][2] = 'data'; //tipo


$colunainfo[2][0] = 'Pagamento'; //label
$colunainfo[2][1] = 'VEN_F_PGMT'; //sql
$colunainfo[2][2] = ''; //tipo


$colunainfo[3][0] = 'Forma de Pagamento'; //label
$colunainfo[3][1] = 'VEN_M_PGMT'; //sql
$colunainfo[3][2] = ''; //tipo

$colunainfo[4][0] = 'Valor da NOTA'; //label
$colunainfo[4][1] = 'VEN_VL_GASTO'; //sql
$colunainfo[4][2] = 'moeda'; //tipo

$colunainfo[5][0] = 'Valor Desconto'; //label
$colunainfo[5][1] = 'VEN_DESCONTO'; //sql
$colunainfo[5][2] = 'moeda'; //tipo

$colunainfo[6][0] = 'Motivo do Desconto'; //label
$colunainfo[6][1] = 'VEN_M_DESC'; //sql
$colunainfo[6][2] = ''; //tipo

$colunainfo[7][0] = 'Entrada(se parcelado)'; //label
$colunainfo[7][1] = 'VEN_ENTRADA'; //sql
$colunainfo[7][2] = 'moeda'; //tipo

$colunainfo[8][0] = 'Valor à Pagar'; //label
$colunainfo[8][1] = 'VEN_VL_PARCELADO'; //sql
$colunainfo[8][2] = 'moeda'; //tipo

$colunainfo[9][0] = 'Valor à Receber'; //label
$colunainfo[9][1] = 'VEN_VL_BRUTO'; //sql
$colunainfo[9][2] = 'moeda'; //tipo




$info = new classinfo();
$info->info( 'ven','vendas' ,'tes1', 'vendas' , 'Pedido' ,$colunainfo);


require('vendas/vendas/tmp/info.php'); 		








//dados do cliente


$sqlp = "


SELECT *
FROM vendas v, cliente c
WHERE c.CLI_ID = v.VEN_ID_CLI
AND v.VEN_ID = ".$id."

";



try 	
	{
$query = $conn->prepare($sqlp);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$pessoa = $query->CLI_PESSOA;	

$cli = 	$query->CLI_CODIGO;
	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }





if($pessoa == 'pf')
{
$pessoafisica[0][0] = 'Código'; //label
$pessoafisica[0][1] = 'codigo'; //sql
$pessoafisica[0][2] = ''; //tipo

$pessoafisica[1][0] = 'Nome'; //label
$pessoafisica[1][1] = 'nome'; //sql
$pessoafisica[1][2] = ''; //tipo

$pessoafisica[2][0] = 'CPF'; //label
$pessoafisica[2][1] = 'doc'; //sql
$pessoafisica[2][2] = ''; //tipo

$pessoafisica[3][0] = 'Comprador Autorizado'; //label
$pessoafisica[3][1] = 'CLI_COMPRADOR'; //sql
$pessoafisica[3][2] = ''; //tipo

$pessoafisica[4][0] = 'Emprego'; //label
$pessoafisica[4][1] = 'CLI_EMPREGO'; //sql
$pessoafisica[4][2] = ''; //tipo

$pessoafisica[5][0] = 'Renda'; //label
$pessoafisica[5][1] = 'CLI_RENDA'; //sql
$pessoafisica[5][2] = 'moeda'; //tipo

$pessoafisica[6][0] = 'Limite'; //label
$pessoafisica[6][1] = 'CLI_LIMITE'; //sql
$pessoafisica[6][2] = 'moeda'; //tipo

$pessoafisica[7][0] = 'Tel. 01'; //label
$pessoafisica[7][1] = 'CLI_TEL_CONFIRMACAO1'; //sql
$pessoafisica[7][2] = ''; //tipo

$pessoafisica[8][0] = 'Contato 01'; //label
$pessoafisica[8][1] = 'CLI_CONTATO1'; //sql
$pessoafisica[8][2] = ''; //tipo

$pessoafisica[9][0] = 'Tel. 02'; //label
$pessoafisica[9][1] = 'CLI_TEL_CONFIRMACAO2'; //sql
$pessoafisica[9][2] = ''; //tipo

$pessoafisica[10][0] = 'Contato 02'; //label
$pessoafisica[10][1] = 'CLI_CONTATO2'; //sql
$pessoafisica[10][2] = ''; //tipo

$pessoafisica[11][0] = 'Tel. 03'; //label
$pessoafisica[11][1] = 'CLI_TEL_CONFIRMACAO3'; //sql
$pessoafisica[11][2] = ''; //tipo

$pessoafisica[12][0] = 'Contato 03'; //label
$pessoafisica[12][1] = 'CLI_CONTATO3'; //sql
$pessoafisica[12][2] = ''; //tipo


$pessoafisica[13][0] = 'Observação'; //label
$pessoafisica[13][1] = 'CLI_OBSERVACAO'; //sql
$pessoafisica[13][2] = ''; //tipo




$cad2ppc = new classcad2pc();
$cad2ppc->cad2pc($cli, 'CLI_', 'vendas', 'tes1', 'vendas', 'cliente', 'Cliente', $pessoafisica);

	
}
elseif($pessoa == 'pj')
{
	
$pessoajuridica[0][0] = 'Código'; //label
$pessoajuridica[0][1] = 'codigo'; //sql
$pessoajuridica[0][2] = ''; //tipo

$pessoajuridica[1][0] = 'Nome'; //label
$pessoajuridica[1][1] = 'nome'; //sql
$pessoajuridica[1][2] = ''; //tipo

$pessoajuridica[2][0] = 'CNPJ'; //label
$pessoajuridica[2][1] = 'doc'; //sql
$pessoajuridica[2][2] = ''; //tipo

$pessoajuridica[3][0] = 'Comprador Autorizado'; //label
$pessoajuridica[3][1] = 'CLI_COMPRADOR'; //sql
$pessoajuridica[3][2] = ''; //tipo

$pessoajuridica[4][0] = 'Emprego'; //label
$pessoajuridica[4][1] = 'CLI_EMPREGO'; //sql
$pessoajuridica[4][2] = ''; //tipo

$pessoajuridica[5][0] = 'Renda'; //label
$pessoajuridica[5][1] = 'CLI_RENDA'; //sql
$pessoajuridica[5][2] = 'moeda'; //tipo

$pessoajuridica[6][0] = 'Limite'; //label
$pessoajuridica[6][1] = 'CLI_LIMITE'; //sql
$pessoajuridica[6][2] = 'moeda'; //tipo

$pessoajuridica[7][0] = 'Tel. 01'; //label
$pessoajuridica[7][1] = 'CLI_TEL_CONFIRMACAO1'; //sql
$pessoajuridica[7][2] = ''; //tipo

$pessoajuridica[8][0] = 'Contato 01'; //label
$pessoajuridica[8][1] = 'CLI_CONTATO1'; //sql
$pessoajuridica[8][2] = ''; //tipo

$pessoajuridica[9][0] = 'Tel. 02'; //label
$pessoajuridica[9][1] = 'CLI_TEL_CONFIRMACAO2'; //sql
$pessoajuridica[9][2] = ''; //tipo

$pessoajuridica[10][0] = 'Contato 02'; //label
$pessoajuridica[10][1] = 'CLI_CONTATO2'; //sql
$pessoajuridica[10][2] = ''; //tipo

$pessoajuridica[11][0] = 'Tel. 03'; //label
$pessoajuridica[11][1] = 'CLI_TEL_CONFIRMACAO3'; //sql
$pessoajuridica[11][2] = ''; //tipo

$pessoajuridica[12][0] = 'Contato 03'; //label
$pessoajuridica[12][1] = 'CLI_CONTATO3'; //sql
$pessoajuridica[12][2] = ''; //tipo


$pessoajuridica[13][0] = 'Observação'; //label
$pessoajuridica[13][1] = 'CLI_OBSERVACAO'; //sql
$pessoajuridica[13][2] = ''; //tipo




$cad2ppc = new classcad2pc();
$cad2ppc->cad2pc($cli, 'CLI_', 'vendas', 'tes1', 'vendas', 'cliente', 'Cliente', $pessoajuridica);
}


require('vendas/vendas/tmp/cad2pc.php'); 		
	



//tabela produtos
	
$sqlp = "
SELECT *
FROM vendas v, venitens vi
WHERE v.VEN_ID = vi.VNI_VEN_ID
AND v.VEN_ID = ".$id."

";


$colunainfot[0] = 'PRO_CODIGO'; //sql
$colunainfot[1] = 'PRO_AB_DESCRICAO'; //sql
$colunainfot[2] = 'VNI_QUANTIDADE'; //sql
$colunainfot[3] = 'ISP_VL_VENDA'; //sql
$colunainfot[4] = 'PRO_ICMS'; //sql
$colunainfot[5] = 'PRO_IPI'; //sql		
		
		
$titulof[0] = 'Cód. Prod.'; //titulo
$titulof[1] = 'Descrição'; //titulo
$titulof[2] = 'Quantidade'; //titulo
$titulof[3] = 'Valor/UN'; //titulo
$titulof[4] = 'ICMS'; //titulo
$titulof[5] = 'IPI'; //titulo
$titulof[6] = 'Total'; //titulo


		

$infod = new classinfotabled();
$infod->infotabled($id, 'ven','vendas' ,'tes1', 'vendas' , $titulof ,$colunainfot);

require('vendas/vendas/tmp/infod.php'); 		

		
//tabela pagamento		



$sqlf = "

SELECT *
FROM vendas v
WHERE v.VEN_ID = ".$id."


";


	try 	
	{
		$query = $conn->prepare($sqlf);

		$query->execute();

		$query = $query->fetch(PDO::FETCH_OBJ);

		$tipo = $query->VEN_F_PGMT;	
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }



if($tipo == 'À Vista')
{
	$nada = "nadaxnada";
}
elseif($tipo == 'À Prazo')
{



$colunainfot[0] = 'VNG_N_PAR'; //sql
$colunainfot[1] = 'VNG_VL_PAR'; //sql
$colunainfot[2] = 'VNG_DT_PGMT'; //sql
$colunainfot[3] = 'VNG_PAGO'; //sql
$colunainfot[4] = 'VNG_DT_PAGO'; //sql
$colunainfot[5] = 'VNG_VL_PAGO'; //sql



$titulo[0] = 'Parcela Nº'; //titulo
$titulo[1] = 'Valor'; //titulo
$titulo[2] = 'Vencimento'; //titulo
$titulo[3] = 'PAGO'; //titulo
$titulo[4] = 'Data PAGO'; //titulo
$titulo[5] = 'Valor Pago'; //titulo
		
		
$infof = new classinfotablef();
$infof->infotablef($id, 'ven','vendas' ,'tes1', 'vendas' , $titulo ,$colunainfot);


require('vendas/vendas/tmp/infof.php'); 		


}
		
		
$fecha = new classfechainfo();
// $fecha->classfechainfo();

		
		
		
		



?>
