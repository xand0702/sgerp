		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

require_once('vendas/vendas/cad2.php'); 
require_once('vendas/vendas/cad20.php'); 
require_once('vendas/vendas/classcad2p.php'); 
require_once('vendas/vendas/classcad2pp.php'); 






require_once('vendas/vendas/classtabela.php'); 
require_once('vendas/vendas/classpesquisa.php'); 


if(@$_SESSION['vendas']['cod_ven'] == '' || @$_SESSION['vendas']['trans'] == '' || 
@$_SESSION['vendas']['cod_cli'] == '')
{
	$id = @$_POST['codigof'];
	$_SESSION['vendas']['cod_ven'] = $id;
	
	
	$cli = @$_POST['codigoc'];
	$_SESSION['vendas']['cod_cli'] = $cli; 
	

	$trans = @$_POST['trans'];
	$_SESSION['vendas']['trans'] = $trans;
	
}
else
{
	$trans = $_SESSION['vendas']['trans'];
	$id = $_SESSION['vendas']['cod_ven'];
	$cli = $_SESSION['vendas']['cod_cli'];
	
}	

	



		function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
		}
		
	
if($id == '' || $trans == '' || $cli == '')
{
		ok('Insira campos obrigatorios');
		echo '<script>window.location="index.php?mod=ven&bot=tes1&cad=1"</script>';
	
}	





// $fornec[0][0] 	= 'Quantidade Pedido';										//label
// $fornec[0][1] 	= 'number';										//type
// $fornec[0][2] 	= 'quant_sai';										//name
// $fornec[0][3] 	= 'placeholder="Preenchimento Obrigatório"';	//placeholder="Preenchimento Obrigatório"






$vendas = new classcad21();
$vendas->cad21('ven' ,'vendas','tes1','vendas' ,'Venda');




$vendas = new classcad20();
$vendas->cad20('vendas','vendas');


require_once('vendas/vendas/tmp/cad2.php'); 		

echo "<br>";
echo "<br>";
echo "<br>";
	
require_once('vendas/vendas/vendaspesquisavnd.php'); 		


echo "<br>";
echo "<br>";
echo "<br>";
	



require_once('vendas/vendas/vendastabelavnd.php'); 		


echo "<br>";
echo "<br>";
echo "<br>";
	





?>

<form enctype="multipart/form-data" name="form2" action="index.php?mod=ven&bot=tes1&cad=3" method="post">



<?php


$funcionario[0][0] = 'Código'; //label
$funcionario[0][1] = 'FUN_CODIGO'; //sql
$funcionario[0][2] = ''; //tipo

$funcionario[1][0] = 'Nome'; //label
$funcionario[1][1] = 'PEF_NOME'; //sql
$funcionario[1][2] = ''; //tipo

$funcionario[2][0] = 'CPF'; //label
$funcionario[2][1] = 'PEF_CPF'; //sql
$funcionario[2][2] = ''; //tipo




$cad2pp = new classcad2p();
$cad2pp->cad2p($id, 'FUN_', 'vendas', 'tes1', 'vendas', 'funcinario', 'Vendedor', $funcionario);


require('vendas/vendas/tmp/cad2p.php'); 		





$sqlp = "


SELECT c.CLI_PESSOA pessoa
FROM cliente c
WHERE c.CLI_CODIGO = ".$cli."

";



try 	
	{
$query = $conn->prepare($sqlp);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$pessoa = $query->pessoa;		
	
		
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


require('vendas/vendas/tmp/cad2pc.php'); 		
	
	
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


require('vendas/vendas/tmp/cad2pc.php'); 		
	
	
	
	
}


?>




      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
	
	  	</form>	

</fieldset>		
		
</article>	
