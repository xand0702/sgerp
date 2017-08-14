<?php
class classtabela

{

function tabela($sig, $dir, $tes, $subdir, $coluna, $request, $sql, $titulo)
{
	$fp = fopen("gdp/tmp/tabela.php", "w+");

	
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




		function moeda(\$moeda)
		{
		\$md = @number_format(\$moeda, 2, ',', ' ');
		\$md = \"R$ \".\$md;
		return \$md;
		}








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
	<td>&nbsp </td>
	
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
		
	if(@$row[\''.$sig.'PESSOA\'] == \'pf\')
		$pessoa = "Física";
	elseif(@$row[\''.$sig.'PESSOA\'] == \'pj\')	
		$pessoa = "Jurídica";

?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row[\'codigo\'];?> </td>
	<td><a href="index.php?mod='.$dir.'&bot='.$tes.'&tpess=<?php echo @$row[\''.$sig.'PESSOA\']; ?>&codpess=<?php 
	echo @$row[\'cod_p\']; ?>&info=<?php echo @$row[\'id\']; ?>"><?php echo @$row[\'nome\'];?></a></td>
	
	
';

$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{

$escrever .=  '<td><?php echo @$row[\''.$sig.$coluna[$i].'\'];?></td>

';

}

$escrever .=  '		
	<td><?php echo @$pessoa;?></td>
	
	
	
	
	
	<td><a data-toggle="modal" data-target="#'.$subdir.'alt<?php echo @$row[\'id\']; ?>">

  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
<?php


require(\''.$dir.'/'.$subdir.'/'.$subdir.'formalt.php\');


?>	
	
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod='.$dir.'&bot='.$tes.'&del=<?php echo @$row[\'id\']; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>



';	
	
	$escreve = fwrite($fp, $escrever);
fclose($fp);
	
	
}//fim função
}//fim class
?>