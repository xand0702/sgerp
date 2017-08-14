		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

require_once('vendas/vendas/classcad5.php'); 

require_once('vendas/vendas/classcad5_1.php'); 

require_once('vendas/vendas/classcad2pp.php'); 


function decimal($data)
{
	
			$data = explode(",", $data);
		
		if(is_numeric($data[0]))
		{
			$caralho = '';
		}
		else
		{
			ok('Digite apenas Numeros');
			echo '<script>window.location="index.php?mod=ven&bot=tes1&cad=4"</script>';

		}
		
		
		
		if(@$data[1] == '')
		{
				return 	$data[0];
		}
		elseif($data[1] != '')
		{
			$data = @$data[0].".".@$data[1];			
				return 	$data;
		}
		
}



$pag = $_SESSION['vendas']['pgmto'];
$cli = $_SESSION['vendas']['cod_cli'];

	

if($pag == 'avista')
{
	

if(@$_SESSION['vendas']['pagav'] == '' ||
@$_SESSION['vendas']['desc'] == '' ||
@$_SESSION['vendas']['m_desc'] == '')
{

	$pagav = @$_POST['pagav'];	
	$_SESSION['vendas']['pagav'] = $pagav;

	$desc = decimal(@$_POST['desc']);
	$_SESSION['vendas']['desc'] = $desc;

	$m_desc = @$_POST['m_desc'];
	$_SESSION['vendas']['m_desc'] = $m_desc;

	
}
else
{
	$pagav = $_SESSION['vendas']['pagav'];
	$m_desc = $_SESSION['vendas']['m_desc'];
	$desc = $_SESSION['vendas']['desc'];
	
	
}	


if($pagav == '' ||
$desc == '' ||
$m_desc == '')
{
		ok('Insira campos obrigatorios AVISTA');
		echo '<script>window.location="index.php?mod=ven&bot=tes1&cad=4"</script>';
	
}
	
}
elseif($pag == 'parcelado')
{

if(@$_SESSION['vendas']['entrada'] == '' ||
@$_SESSION['vendas']['n_p'] == '' ||
@$_SESSION['vendas']['txj'] == '' ||
@$_SESSION['vendas']['desc'] == '' ||
@$_SESSION['vendas']['m_desc'] == '' ||
@$_SESSION['vendas']['pagav'] == '')
{
	
	$entrada = decimal(@$_POST['entrada']);
	$_SESSION['vendas']['entrada'] = $entrada;
	
	$n_p = @$_POST['n_p'];
	$_SESSION['vendas']['n_p'] = $n_p;
	
	$txj = decimal(@$_POST['txj']);
	$_SESSION['vendas']['txj'] = $txj;
	
	$desc = decimal(@$_POST['desc']);
	$_SESSION['vendas']['desc'] = $desc;
	
	$m_desc = @$_POST['m_desc'];
	$_SESSION['vendas']['m_desc'] = $m_desc;
	
	$pagav = @$_POST['pagav'];
	$_SESSION['vendas']['pagav'] = $pagav;
	
	
}
else
{
	$entrada = $_SESSION['vendas']['entrada'];
	$n_p = $_SESSION['vendas']['n_p'];
	$txj = $_SESSION['vendas']['txj'];
	$desc = $_SESSION['vendas']['desc'];
	$m_desc = $_SESSION['vendas']['m_desc'];
	$pagav = $_SESSION['vendas']['pagav'];
	
	
}	


if($entrada == '' ||
$n_p == '' ||
$txj == '' ||
$desc == '' ||
$m_desc == '' ||
$pagav == ''
)
{
		ok('Insira campos obrigatorios APRAZO');
		echo '<script>window.location="index.php?mod=ven&bot=tes1&cad=4"</script>';
	
}

}

?>


<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
	<li role="presentation"><a href="#">Passo 4</a></li>
	<li role="presentation" class="active"><a href="#">Passo 5</a></li>
	
</ul>		
		
      </div>		
				

<form enctype="multipart/form-data" action="vendas/vendas/vendascadastro.php" method="post">
		<fieldset>


<?php




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




$vendas = new classcad5();
$vendas->cad5('vendas','vendas');


$valor = @$_SESSION['vendas']['total'];

$v_desc =  $valor - $desc;

$v_liquido = $v_desc - @$entrada;
$_SESSION['vendas']['v_liquido'] = $v_liquido;



if(@$txj == '')
{
	$nada = "nadaxnada";
$_SESSION['vendas']['v_liquido'] = $v_desc;
$_SESSION['vendas']['vl_bruto'] = $v_desc;
// varivel valor liquido recebe o valor com desconto do pagamento a vista
	}
else
{
if(@$txj == 0)
{
	$parcela = $v_liquido/@$n_p;
	$vl_bruto = $v_liquido;
$_SESSION['vendas']['vl_bruto'] = $vl_bruto;
$_SESSION['vendas']['parcela'] = $parcela;

	
	}
else
{

$juro = $txj/100;

$j_form = (-1*$n_p);
$j_juro = (1+$juro);
$j_exp = pow($j_juro, $j_form);
$parcela = $v_liquido/((1-($j_exp))/$juro);

$parcela = number_format($parcela,2);

$vl_bruto = $parcela * $n_p;

$_SESSION['vendas']['vl_bruto'] = $vl_bruto;
$_SESSION['vendas']['parcela'] = $parcela;

}
}

if($pag == 'avista')
{
	

if($pagav == 'dinheiro')
	$pagav = 'Dinheiro';
else
	$pagav = 'Débito';
	
	
$ddpg[0][0] = 'Forma de Pagamento'; //label
$ddpg[0][1] = 'À Vista'; //dado
$ddpg[0][2] = ''; //tipo

$ddpg[1][0] = 'Modo'; //label
$ddpg[1][1] = $pagav; //dado
$ddpg[1][2] = ''; //tipo

$ddpg[2][0] = 'Valor'; //label
$ddpg[2][1] = $valor; //dado
$ddpg[2][2] = 'moeda'; //tipo

$ddpg[3][0] = 'Desconto'; //label
$ddpg[3][1] = $desc; //dado
$ddpg[3][2] = ''; //tipo

$ddpg[4][0] = 'Motivo do Desconto'; //label
$ddpg[4][1] = $m_desc; //dado
$ddpg[4][2] = ''; //tipo

$ddpg[5][0] = 'Valor com Desconto'; //label
$ddpg[5][1] = $v_desc; //dado
$ddpg[5][2] = 'moeda'; //tipo
	
	
$venda = new classcad51();
$venda->cad51('vendas','vendas', $ddpg);
	
require('vendas/vendas/tmp/cad5.php'); 		
	
	
	
}	
elseif($pag == 'parcelado')
{
	

if($pagav == 'boleto')
	$pagav = 'Boleto';
elseif($pagav == 'cc')
	$pagav = 'Cartão de Crédito';
elseif($pagav == 'cheque')	
	$pagav = 'Cheque';
	
	
	
$ddpg[0][0] = 'Forma de Pagamento'; //label
$ddpg[0][1] = 'Parcelado'; //dado
$ddpg[0][2] = ''; //tipo

$ddpg[1][0] = 'Modo'; //label
$ddpg[1][1] = $pagav; //dado
$ddpg[1][2] = ''; //tipo

$ddpg[2][0] = 'Entrada'; //label
$ddpg[2][1] = $entrada; //dado
$ddpg[2][2] = 'moeda'; //tipo

$ddpg[3][0] = 'Nº de Parcelas'; //label
$ddpg[3][1] = $n_p; //dado
$ddpg[3][2] = ''; //tipo

$ddpg[4][0] = 'Taxa de Juros'; //label
$ddpg[4][1] = $txj; //dado
$ddpg[4][2] = ''; //tipo

$ddpg[5][0] = 'Desconto'; //label
$ddpg[5][1] = $desc; //dado
$ddpg[5][2] = 'moeda'; //tipo

$ddpg[6][0] = 'Motivo do Desconto'; //label
$ddpg[6][1] = $m_desc; //dado
$ddpg[6][2] = ''; //tipo


$ddpg[7][0] = 'Valor Gasto'; //label
$ddpg[7][1] = $valor; //dado
$ddpg[7][2] = 'moeda'; //tipo


$ddpg[8][0] = 'Valor com Desconto'; //label
$ddpg[8][1] = $v_desc; //dado
$ddpg[8][2] = 'moeda'; //tipo

$ddpg[8][0] = 'Valor Parcelado'; //label
$ddpg[8][1] = $v_liquido; //dado
$ddpg[8][2] = 'moeda'; //tipo

$ddpg[9][0] = 'Valor da Parcela'; //label
$ddpg[9][1] = $parcela; //dado
$ddpg[9][2] = 'moeda'; //tipo

$ddpg[10][0] = 'Valor Bruto'; //label
$ddpg[10][1] = $vl_bruto; //dado
$ddpg[10][2] = 'moeda'; //tipo






	
$venda = new classcad51();
$venda->cad51('vendas','vendas', $ddpg);
	
require('vendas/vendas/tmp/cad5.php'); 		
	
		
}



?>




		</fieldset>
		
		
		 <div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
      </div>
	  	</form>	
		
		
		

</article>

		