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
			if($moeda == null)
			{
				echo " - ";
			}
			else
			{
				$md = @number_format($moeda, 2, ',', ' ');
				$md = "R$ ".$md;
				echo $md;
			}
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
	
	<td><?php echo classtabela::databr(@$row[\'dtems\']);?> </td>
	<td><a href="index.php?mod='.$mod.'&bot='.$tes.'&info=<?php echo @$row[\'id\']; ?>&pro=<?php echo @$row[\'pessoa\']; ?>"><?php echo @$row[\'nota\'];?></a></td>
	
	
';

$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
if($coluna[$i] == 'vlnota')
{
	$escrever .=  '<td><?php classtabela::moeda(@$row[\''.$coluna[$i].'\']);?></td>

';

}
elseif($coluna[$i] == 'vlpagar')
{
	$escrever .=  '<td><?php classtabela::moeda(@$row[\''.$coluna[$i].'\']);?></td>

';

}
elseif($coluna[$i] == 'vlpago')
{
	$escrever .=  '<td><?php classtabela::moeda(@$row[\''.$coluna[$i].'\']);?></td>

';

}
else
{
$escrever .=  '<td><?php echo @$row[\''.$coluna[$i].'\'];?></td>

';
}
}

$escrever .=  '		
	
	
</td>
	 
	<td><a href="index.php?mod=ven&bot='.$tes.'&del=<?php echo @$row[\'id\']; ?>">
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