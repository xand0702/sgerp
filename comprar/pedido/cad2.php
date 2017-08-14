<?php


class classcad2



{
	
	

function cad2($dir, $tes, $subdir, $codigo, $coluna)
{


$fp = fopen("comprar/tmp/cad2.php", "w+");



$escrever = "<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

\$id = \$_SESSION['".$subdir."']['".$codigo."'];

";













$conta = count($coluna);




$cont = count($coluna[0]);
$cont = $cont - 1;

for($i = 0; $i < $conta; $i++)
{
$cont = count($coluna[0]);
$cont = $cont - 1;
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $coluna[$i][$x];
		



if($i == 0)
{
$escrever .= "
if(\$_SESSION['".$subdir."']['".$codigo."'] == '' ||
";
$escrever .= "
@\$_SESSION['".$subdir."']['".$cadt[$x]."'] == '' ||

";
}
elseif($i == ($conta - 1))
{
$escrever .= "

@\$_SESSION['".$subdir."']['".$cadt[$x]."'] == ''
)
";
}

else
{
$escrever .= "
@\$_SESSION['".$subdir."']['".$cadt[$x]."'] == '' || 
 ";
}

}
}


for($i=0; $i < $conta; $i++)
{
$cont = count($coluna[0]);
$cont = $cont - 1;
	
		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $coluna[$i][$x];
	

if($i == 0)
{	
$escrever .= "
{
\$id = \$_SESSION['".$subdir."']['".$codigo."'];\n
		";
		$escrever .= "
@$".$cadt[$x]." = @\$_POST['".$cadt[$x]."'];\n

";
}
elseif($i == ($conta - 1))
{
$escrever .= "
$".$cadt[$x]." = @\$_POST['".$cadt[$x]."'];\n

";
}
else
{
$escrever .= "

$".$cadt[$x]." = @\$_POST['".$cadt[$x]."'];\n

";
}
	
	}
	
	}	

	

	
for($i=0; $i < $conta; $i++)
{	
$cont = count($coluna[0]);
$cont = $cont - 1;

	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $coluna[$i][$x];
	

if($i == 0)
{
$escrever .= "
	\$id = \$_SESSION['".$subdir."']['".$codigo."'];
	";	
	$escrever .= "
\$_SESSION['".$subdir."']['".$cadt[$x]."'] = $".$cadt[$x].";

";
}
elseif($i == ($conta - 1))
{	
$escrever .= "	
	\$_SESSION['".$subdir."']['".$cadt[$x]."'] = $".$cadt[$x].";
}
	";
}	
else
{
$escrever .= "	
	\$_SESSION['".$subdir."']['".$cadt[$x]."'] = $".$cadt[$x].";
	
	";
}

}

}

for($i=0; $i < $conta; $i++)
{
$cont = count($coluna[0]);
$cont = $cont - 1;

		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $coluna[$i][$x];
	
	
if($i == 0)
{	
$escrever .= "

else
	{
	\$id = \$_SESSION['".$subdir."']['".$codigo."'];	
	
	
	";
	$escrever .= "
$".$cadt[$x]." = \$_SESSION['".$subdir."']['".$cadt[$x]."'];

";
}
elseif($i == ($conta - 1))
{	
	
$escrever .= "

$".$cadt[$x]." = \$_SESSION['".$subdir."']['".$cadt[$x]."'];
	
	}
	";
}
else
{
$escrever .= "

$".$cadt[$x]." = \$_SESSION['".$subdir."']['".$cadt[$x]."'];
	
	";
}	

}}


$escrever .= "
if(@\$_POST['obs'] != '')
{
\$obs = @\$_POST['obs'];

\$_SESSION['".$subdir."']['obs'] = \$obs;
}
else
{
\$obs = \$_SESSION['".$subdir."']['obs'];

}
if( @\$_FILES[\"file\"][\"name\"] != '')
{
@\$img = @\$_FILES[\"file\"][\"name\"];

\$_SESSION['".$subdir."']['img'] = \$img;
}
else
{
	@\$img = \$_SESSION['".$subdir."']['img'];
}
	
	";



for($i=0; $i < $conta; $i++)
{
$cont = count($coluna[0]);
$cont = $cont - 1;

		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $coluna[$i][$x];
	


if($coluna[$i][$cont] == "obg")
{
	

	

if($i == 0)
{
$escrever .= "

if($".$cadt[$x]." == '' || 

";
}
elseif($i == ($conta - 1))
{
$escrever .= "
	$".$cadt[$x]." == ''
	)
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location=\"index.php?mod=".$dir."&bot=".$tes."&cad=3\"</script>';
	
}	
	";
}
else
{
$escrever .= "

$".$cadt[$x]." == '' || 
	";
}

} //fim if

}

}


$escrever .= "

?>

";	



$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>



<?php




















class classcad21



{
	
	
	
	
	
		function databr($data)
		{
			if($data == null)
			{
				return " - ";
			}
			else
			{
				$dt = explode("-", $data);
				$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
				return $dtimp;
			}
		}
	
	
			
function cad21($dir, $tes, $subdir, $tit, $dados)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("comprar/pedido/tmp/cad2.php", "w+");

	$escrever = 	'
	
	
	


	<?php


		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, \',\', \' \');
		$md = "R$ ".$md;
		return $md;
		}	
		
		
		
		
		


?>


<article style="padding-bottom: 200%">	     







     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation" class="active"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	

		
<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name=\'codigop\']").blur(function(){
			var nome = $("input[name=\'nome\']");
			var id = $("input[name=\'id\']");
			var cod = $("input[name=\'cod\']");
			var icms = $("input[name=\'icms\']");
			var ipi = $("input[name=\'ipi\']");
			var fab = $("input[name=\'fab\']");
			var idd = $("input[name=\'idd\']");
			
			
			
			
 
			$( nome ).val(\'Carregando...\');
			$( fab ).val(\'Carregando...\');
			
			

			
 
				$.getJSON(
					"comprar/'.$subdir.'/ch_produtopa.php",
					{ codigo: $( this ).val() },
					
					function( json )
					{
						$( nome ).val( json.nome );
						$( id ).val( json.id );
						$( cod ).val( json.cod );
						$( icms ).val( json.icms );
						$( ipi ).val( json.ipi );
						$( fab ).val( json.fab );
						$( idd ).val( json.idd );
						
						
					}
				);
		});
	});
	</script>

	
	

<form name="form1" action="comprar/'.$subdir.'/cad2insere.php" method="post">		
	

';

$escrever .= '
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados do '.$tit.'</h4>
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
		';
		
		
		$conta = count($dados);
		
		for($i=0; $i < $conta; $i++)
		{
			$cont = count($dados[0]);
			for($x=0; $x < $cont; $x++)
			{
				$cadt[$x] = $dados[$i][$x];
			}
			
		$y = 0;
		$escrever .= '
		<tr>
			<td align=right>
			<label>'.$cadt[$y].': </label>
			</td>
		';
		$y++;
		$escrever .= '
			<td align=left>
			<input type="'.$cadt[$y].'"
		';
		$y++;
		$escrever .= '
		name="'.$cadt[$y].'" 
		';
		$y++;
		$escrever .= '
		class="form-control" '.$cadt[$y].'>
			</td>
		</tr>
		';
			
		}
		
		
		$escrever .= '

		
		</table>
		
		
	
	';

$escrever .= '

	



		<input type="hidden" id="codigo" name="id" >
		<input type="hidden" id="codigo" name="cod" >
		<input type="hidden" id="codigo" name="icms" >
		<input type="hidden" id="codigo" name="ipi" >
		<input type="hidden" id="codigo" name="idd" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Insira o ID Item: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigop" name="codigop" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=est&bot=tes1">Consulta</a>
			</td>
		</tr>
		</table>
<hr>
<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Descrição: </label>
			</td>
			<td align=left>
			<input type="text" id="nome" name="nome" class="form-control" >
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Estoque: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="fab" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>
<hr>















<?php 
//fornecedor
?>





















<script type="text/javascript" src="jquery.min.js"></script>	
	<script type="text/javascript">
	$(function(){
		$("input[name=\'codigof\']").blur(function(){
			var nomefor = $("input[name=\'nomefor\']");
			var codf = $("input[name=\'codf\']");
			var docm = $("input[name=\'docm\']");
			
			
			
			
 
			$( nomefor ).val(\'Carregando...\');
			$( docm ).val(\'Carregando...\');
			
			

			
 
				$.getJSON(
					"comprar/'.$subdir.'/ch_fornecedor.php",
					{ codigof: $( this ).val() },
					
					function( json )
					{
						$( nomefor ).val( json.nomefor );
						$( docm ).val( json.docm );
						$( codf ).val( json.codf );
						
						
					}
				);
		});
	});
	</script>

	
	
		<input type="hidden" id="codigo" name="codf" >
		
		
		<table align=center border=0 cellspacing=5 cellpadding=5>

		<tr>
			<td align=right>
			<label>Código do Fornecedor: </label>
			</td>
			<td align=left>
			<div class="col-xs-8">
			<input type="text" id="codigof" name="codigof" class="form-control" placeholder="Preenchimento Obrigatório">
			</div>
			<a href="index.php?mod=gdp&bot=tes5">Consulta</a>
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
			<input type="text" id="nome" name="nomefor" class="form-control" >
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Documento: </label>
			</td>
			<td align=left>
			<input type="text" id="telefone" name="docm" class="form-control" >
			</td>
		</tr>
		

	</table>
	<br>























<div> 
<table border=0 valign=top width=100%>

	<tr>
		<td align=left colspan=2>
		
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
		
<div  class="label6" align=center>
	<table border=1 width=100%>
		
		<tr>
		
			<td><b>Cód. For.</b></td>
			<td><b>Fornecedor</b></td>
			<td><b>Cód. Prod.</b></td>
			<td><b>Produto</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Valor/UN</b></td>
			<td><b>Data Entrega*</b></td>
			
		
		</tr>	
<?php

$conta = count(@$_SESSION[\'itens\']);

//print_r(@$_SESSION[\'itens\'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION[\'itens\'][$i][2]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][6]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][11]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][15]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][3]; ?></td>
			<td><?php echo moeda(@$_SESSION[\'itens\'][$i][4]); ?></td>
			<td><?php echo classcad21::databr(@$_SESSION[\'itens\'][$i][5]); ?></td>
			
			
		</tr>	
<?php

 }
?>		
	</table>
	
<a href="comprar/'.$subdir.'/limpa.php">LIMPA</a>
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table>

</div>




<hr>


		
		
		
		
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad21		
			
			
			
} //fim class
?>			

		
