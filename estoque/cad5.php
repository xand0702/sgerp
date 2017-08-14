<?php


class classcad5



{
	
	

function cad5($dir, $tes, $subdir, $codigo, $coluna)
{


$fp = fopen("estoque/tmp/cad5.php", "w+");



$escrever = "<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

\$id = \$_SESSION['".$subdir."']['".$codigo."'];

";

if($coluna[0][0] == '')
{
	echo "";
}
else
{
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
\$obs = @\$_POST['obs'];

\$_SESSION['".$subdir."']['obs'] = \$obs;

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





class classcad51



{
	
	
			
function cad51($dir, $tes, $subdir, $tit, $dados)
{
	
	//
		//"'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php"
	
	$fp = fopen("estoque/tmp/cad5.php", "a+");

	$escrever = 	'
	<?php
	
	function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
		
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
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
    <li role="presentation" class="active"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		
				


		<fieldset>
	



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

$conta = count(@$_SESSION[\'itens\']);

//print_r(@$_SESSION[\'itens\'][0]);
 for($i=0;$i < $conta; $i++)
 {
	 
	 $total = @$_SESSION[\'itens\'][$i][11] * @$_SESSION[\'itens\'][$i][9];
	 $icms = (@$_SESSION[\'itens\'][$i][3]/100) * $total;
	 $ipi = (@$_SESSION[\'itens\'][$i][4]/100) * $total;
	 
?>	 
		<tr>
		
			<td><?php echo @$_SESSION[\'itens\'][$i][2]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][12]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][10]; ?></td>
			<td><?php echo @$_SESSION[\'itens\'][$i][9]; ?></td>
			<td><?php echo moeda(@$_SESSION[\'itens\'][$i][11]); ?></td>
			<td><?php echo moeda(@$total); ?></td>
			<td><?php echo moeda(@$icms); ?></td>
			<td><?php echo moeda(@$ipi); ?></td>
		
		</tr>	
<?php

 }
?>		
	</table>
	
</div>	
		</td>
			
	</tr>	<tr>
		<td align=center colspan=2>
		&nbsp
		</td>
			
	</tr>
</table></div>




<hr>


<form enctype="multipart/form-data" name="form2" action="estoque/'.$subdir.'/'.$subdir.'cadastro.php" method="post">

<div class="fomrat007"> 
<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do '.$tit.'</h4>
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
$cont = count($dados[0]);
$cont = $cont - 1;

for($i = 0; $i < $conta; $i++)
{
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $dados[$i][$x];
	}	
	$y = 0;
	
$escrever .= '
		
		<tr>
			<td width=50%>
			<label>'.$cadt[$y].': </label>
			</td>
';
$y++;

if($dados[$i][($cont)] == 'data')
{
$escrever .= '
			<td align=left>
			<?php print databr($'.$cadt[$y].'); ?>
			</td>
		</tr>



';	
}
elseif($dados[$i][$cont] == 'moeda')
{
$escrever .= '
			<td align=left>
			<?php print moeda($'.$cadt[$y].'); ?>
			</td>
		</tr>



';	
}
else
{	
$escrever .= '
			<td align=left>
			<?php echo " ".$'.$cadt[$y].'; ?>
			</td>
		</tr>



';
}

} //fim for



$escrever .= '


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
			<a href="index.php?mod='.$dir.'&bot='.$tes.'&cad=2">Alterar</a>
			
			</td>
		</tr>		
		</table>



	

</div>
		<<hr>
		
		
	
	
	';
	
	
	
$escreve = fwrite($fp, $escrever);
fclose($fp);
}	//fim função cad41		
			
			
			
} //fim class
?>			

		
