<?php





class classcad4



{
	
	

function cad4($dir, $tes, $subdir, $codigo, $opcao, $op_res, $coluna)
{


$fp = fopen("gdp/tmp/cad4.php", "w+");



$escrever = "<?php 


require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 

";

$escrever .= "

if(@\$_SESSION['".$subdir."']['".$opcao."'] == '".$op_res[1]."')
{
	\$id = \$_SESSION['".$subdir."']['".$codigo."'];
}
elseif(@\$_SESSION['".$subdir."']['".$opcao."'] == '".$op_res[2]."')
{
	\$id = \$_SESSION['".$subdir."']['".$codigo."'];
}


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


$escrever .= "

?>

";	



$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>



<?php





class classcad41



{
	
	
			
function cad41($dir, $tes, $subdir, $tit, $dados)
{
	
	
	
	$fp = fopen("gdp/tmp/cad4.php", "a+");

	$escrever = 	'
	
	
	
	<?php
function moeda($moeda)
		{
		$md = @number_format($moeda, 2, \',\', \' \');
		$md = "R$ ".$md;
		return $md;
		}



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
				
		
<form enctype="multipart/form-data" name="proxmo" action="'.$dir.'/'.$subdir.'/'.$subdir.'cadastro.php" method="post">



		<fieldset>

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
			<a href="index.php?mod='.$dir.'&bot='.$tes.'&cad=3">Alterar</a>
			
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

		
