<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

$id = $_SESSION['produtoacabado']['cod_cli'];






















if(@$_FILES["file"]["name"] != "")
{


function imgauto()
{

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 3000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
   // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 //   echo "Type: " . $_FILES["file"]["type"] . "<br>";
 //   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("estoque/produtoacabado/img/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "estoque/produtoacabado/img/" . $_FILES["file"]["name"]);
     // echo "Stored in: " . "estoque/produtoacabado/img/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  //echo "Invalid file";
  }
}



imgauto();

}



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
 

@$_SESSION['produtoacabado']['codigoe'] == ''
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



$codigoe = @$_POST['codigoe'];



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
	
		
	$_SESSION['produtoacabado']['codigoe'] = $codigoe;
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
	
	

$codigoe = $_SESSION['produtoacabado']['codigoe'];
	
	}
	
if(@$_POST['obs'] != '')
{
$obs = @$_POST['obs'];

$_SESSION['produtoacabado']['obs'] = $obs;
}
else
{
$obs = $_SESSION['produtoacabado']['obs'];

}
if( @$_FILES["file"]["name"] != '')
{
@$img = @$_FILES["file"]["name"];

$_SESSION['produtoacabado']['img'] = $img;
}
else
{
	@$img = $_SESSION['produtoacabado']['img'];
}
	
	

if($nota == '' || 



$pedido == '' || 
	
	$codigoe == ''
	)
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="index.php?mod=est&bot=tes2&cad=3"</script>';
	
}	
	

?>


	
	
	


	<?php




	
	function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}	
	
?>
<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation" class="active"><a href="#">Passo 3</a></li>
    <li role="presentation"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name='codigop']").blur(function(){
			var nome = $("input[name='nome']");
			var id = $("input[name='id']");
			var cod = $("input[name='cod']");
			var icms = $("input[name='icms']");
			var ipi = $("input[name='ipi']");
			var fab = $("input[name='fab']");

			
			
 
			$( nome ).val('Carregando...');
			$( fab ).val('Carregando...');

			
 
				$.getJSON(
					"estoque/produtoacabado/ch_produto.php",
					{ codigo: $( this ).val() },
					function( json )
					{
						$( nome ).val( json.nome );
						$( id ).val( json.id );
						$( cod ).val( json.cod );
						$( icms ).val( json.icms );
						$( ipi ).val( json.ipi );
						$( fab ).val( json.fab );
						
					}
				);
		});
	});
	</script>




<form name="form1" action="estoque/produtoacabado/cad3insere.php" method="post">		


	



		<input type="hidden" id="codigo" name="img" value"$img">
		<input type="hidden" id="codigo" name="id" >
		<input type="hidden" id="codigo" name="cod" >
		<input type="hidden" id="codigo" name="icms" >
		<input type="hidden" id="codigo" name="ipi" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Insira o código do produto: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigo" name="codigop" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=est&bot=tes1">Consulta</a>
			</td>
		</tr>
		</table>
<hr>
<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" id="nome" name="nome" class="form-control" >
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Fabricante: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="fab" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>
	<hr>


<div> 
<table border=0 valign=top width=100%>
<tr>
		<td align=center colspan=2>
		<label>Dados da nota</label>
		</td>
			
	</tr>
<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
	
	<tr>
		<td width=50% align=right>
		<label>NCMSH: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="ncmsh" class="form-control">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label>CST: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="cst" class="form-control">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label>CFPO: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="cfpo" class="form-control">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label>Quantidade: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="quant" class="form-control" placeholder="Preenchimento Obrigatório">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label>UN: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="un" class="form-control" placeholder="Preenchimento Obrigatório">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label>Valor por UN: </label>
		</td>
		<td align=left>
		<div class="col-xs-8">
		<input type="text" name="vl_un" class="form-control" placeholder="Preenchimento Obrigatório">
		</div>
		</td>
			
	</tr>
	<tr>
		<td width=50% align=right>
		<label></label>
		</td>
		<td align=left>
		
      <div class="modal-footer">
        <button type="submit" value="form1 onClick="document.form1.submit()" class="btn btn-default">Inserir</button>
      </div>
			
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>

</form>

<hr>


<div> 
<table border=0 valign=top width=100%>
	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
	<tr>
		<td align=center colspan=2>
		
<div  class="label5" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Código</b></td>
			<td><b>Produto</b></td>
			<td><b>UN</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Preço/UN</b></td>
			<td><b>Total</b></td>
			<td><b>ICMS</b></td>
			<td><b>IPI</b></td>
		
		</tr>	
<?php

$conta = count(@$_SESSION['itens']);

//print_r(@$_SESSION['itens'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 $total = @$_SESSION['itens'][$i][11] * @$_SESSION['itens'][$i][9];
	 $icms = (@$_SESSION['itens'][$i][3]/100) * $total;
	 $ipi = (@$_SESSION['itens'][$i][4]/100) * $total;
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION['itens'][$i][2]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][12]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][10]; ?></td>
			<td><?php echo @$_SESSION['itens'][$i][9]; ?></td>
			<td><?php echo moeda(@$_SESSION['itens'][$i][11]); ?></td>
			<td><?php echo moeda(@$total); ?></td>
			<td><?php echo moeda(@$icms); ?></td>
			<td><?php echo moeda(@$ipi); ?></td>
		
		</tr>	
<?php

 }
?>		
	</table>
	
<a href="estoque/".$subdir."/limpa.php">LIMPA</a>
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>




<hr>


<form enctype="multipart/form-data" name="form2" action="index.php?mod=est&bot=tes2&cad=4" method="post">

<div class="fomrat007"> 
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Pedido</h4>
			</td>
			
		</tr>

		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>	
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>			


		
		<tr>
			<td width=50%>
			<label>Nota: </label>
			</td>

			<td align=left>
			<?php echo " ".$nota; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Pedido: </label>
			</td>

			<td align=left>
			<?php echo " ".$pedido; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Data Emissão: </label>
			</td>

			<td align=left>
			<?php print databr($dt_emissao); ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Data Saída: </label>
			</td>

			<td align=left>
			<?php print databr($dt_saida); ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Hora da saída: </label>
			</td>

			<td align=left>
			<?php echo " ".$hr_saida; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Controle Fisco (Código de barras): </label>
			</td>

			<td align=left>
			<?php echo " ".$cfcb; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Série: </label>
			</td>

			<td align=left>
			<?php echo " ".$serie; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Página: </label>
			</td>

			<td align=left>
			<?php echo " ".$pagina; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Natureza da Operação: </label>
			</td>

			<td align=left>
			<?php echo " ".$nt_op; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>NFE: </label>
			</td>

			<td align=left>
			<?php echo " ".$nfe; ?>
			</td>
		</tr>




		
		<tr>
			<td width=50%>
			<label>Código do Funcionário que recebeu: </label>
			</td>

			<td align=left>
			<?php echo " ".$codigoe; ?>
			</td>
		</tr>








		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo " ".$obs; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			
			<td width=50% class=tabinfo3>
			<a href="index.php?mod=est&bot=tes2&cad=2">Alterar</a>
			
			</td>
		</tr>		
		</table>



	

</div>
		<<hr>
		
		
	
	
	