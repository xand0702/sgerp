<?php
class classtabela

{


		function databr($data)
		{
			if($data == null)
			{
				echo "";
			}
			else
			{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			echo $dtimp;
			}
		}
		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		echo $md;
		}

function tabela( $sig, $mod, $dir, $tes, $subdir, $coluna, $request, $sql, $titulo)
{
	$fp = fopen("".$dir."/".$subdir."/tmp/tabela.php", "w+");

	
$escrever =  '


	<?php

require_once(\'raiz/arq/conecta2.php\'); 


';

$conta = count($request);


for($i = 0; $i < $conta; $i++)
{

$escrever .=  '$'.$request[$i].' = @$_REQUEST[\''.$request[$i].'\'];

';

}




$escrever .=  "










if($$request[0] == '' && $$request[1] == '' && $$request[2] == '' )
{
	\$tab = \" $sql[0]
	\"
	
			;
}
elseif($$request[0] == '' && $$request[1] == '')
{
	\$tab = \"
	
$sql[1]
\"
;
	
}
elseif($$request[0] == '' && $$request[2] == '')
{
	\$tab = 
\"	
	$sql[2]
	\"
	
;
	
}
elseif( $$request[1] == '' && $$request[2] == '')
{

\$tab = 
\"
$sql[3]
\"
;

}


?>

	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
";

$conta = count($titulo);


for($i = 0; $i < $conta; $i++)
{

$escrever .=  '<td><b>'.$titulo[$i].'</b></td>

';

}

$escrever .=  '	
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo classtabela::databr(@$row[\'PED_DATA_CADASTRO\']);?> </td>
	<td><a href="index.php?mod='.$mod.'&bot='.$tes.'&info=<?php echo @$row[\'PED_ID\']; ?>&pro=<?php echo @$row[\'PED_TIPO\']; ?>"><?php echo @$row[\'PED_CODIGO\'];?></a></td>
	
	
';

$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
$escrever .=  "
<?php
	if(@\$row['PED_TIPO'] == 'sv')
		\$tipo = 'Serviço';
	elseif(@\$row['PED_TIPO'] == 'P.A.')	
		\$tipo = 'Produto Acabado';
	elseif(@\$row['PED_TIPO'] == 'M.C.')	
		\$tipo = 'Material de Consumo';
		
?>


<td><?php echo \$tipo;?></td>

";
}

$escrever .=  '		
	

	<td><?php echo @$row[\'FUN_CODIGO\'];?> </td>
	<td><?php echo @$row[\'PEF_NOME\'];?></a></td>
	
	
	
	
	
	 
	 
	 
	 
	<td><a href="index.php?mod='.$mod.'&bot='.$tes.'&del=<?php echo @$row[\'PED_ID\']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>	
  
	
	
	
	
	

	
	
	
<?php

	}
?>
	
	

	
	

	</div>
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	


';	
	
	$escreve = fwrite($fp, $escrever);
fclose($fp);
	
	
}//fim função
}//fim class
?>