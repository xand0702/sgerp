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

function tabela( $dir, $tes, $subdir, $coluna, $request, $sql, $titulo)
{
	$fp = fopen("estoque/saida/tmp/tabela.php", "w+");

	
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
	
	<td><?php echo @$row[\''.$coluna[0].'\'];?> </td>
	<td><a href="index.php?mod='.$dir.'&bot='.$tes.'&info=<?php echo @$row[\''.$coluna[1].'\']; ?>&pro=<?php echo @$row[\''.$coluna[0].'\']; ?>"><?php echo @$row[\''.$coluna[2].'\'];?></a></td>
	
	
';

$conta = count($coluna);


for($i = 3; $i < $conta; $i++)
{
if($coluna[$i] == 'datac')
{
	$escrever .=  '<td><?php classtabela::databr(@$row[\''.$coluna[$i].'\']);?></td>

';

}
elseif($coluna[$i] == 'valor')
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
	
<?php
if($row[\''.$coluna[0].'\'] == "P.A.")
{	?>
	<td><a data-toggle="modal" data-target="#'.$subdir.'altpa<?php echo @$row[\''.$coluna[1].'\']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
<?php
}
else	
{

?>	<td><a data-toggle="modal" data-target="#'.$subdir.'altmc<?php echo @$row[\''.$coluna[1].'\']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
<?php

}	
?>	
	
	
	
	
	
	
<?php

if($row[\''.$coluna[0].'\'] == "P.A.")
require(\'estoque/'.$subdir.'/'.$subdir.'formaltpa.php\');
else
require(\'estoque/'.$subdir.'/'.$subdir.'formaltmc.php\');

?>	
	
	</td>
	 
	
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