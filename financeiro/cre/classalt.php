<?php





class classalt



{
	
	

function alt($sig, $dir, $tes, $subdir, $tabela, $colunaaltsql)
{
	
	$fp = fopen("../../financeiro/cre/tmp/alt.php", "w+");

	

$escrever = "<?php
	
require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();







\$id = @\$_POST[\"id\"];



";


$conta = count($colunaaltsql);

for($i = 0; $i < $conta; $i++)
{
	
	$cont = count($colunaaltsql[0]);
	
		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunaaltsql[$i][$x];
	}
	$y=0;

$escrever .= "




	$$cadt[$y] = @\$_POST['$cadt[$y]'];
	
			

";
}


$escrever .= "


\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario = @\$_SESSION['cf'];
\$ip_alteracao = @\$_SERVER['REMOTE_ADDR'];
\$obs = @\$_POST['obs'];


if('x' == 'y')
{
	\$nada = 'nadaxnada';
}

";





for($i = 0; $i < $conta; $i++)
{
	
		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunaaltsql[$i][$x];
	}
	$y = 1;

if($cadt[$y] == 'obg')
{
$y = $y - 1;	
if($i == 0)	
{
$escrever .= " if($$cadt[$y] == '' ||";
}
elseif($i == $conta - 1)	
{
$escrever .= " $$cadt[$y] == '' )
		{
			echo '++++++'.\$vend.'++++++'.\$venc.'++++++'.\$limite;
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location=\"../../index.php?mod=fin&bot=$tes</script>';	
		
	}

";
}
else
{
$escrever .= " $$cadt[$y] == '' ||";
}
	
	
}// fim if
}// fim for






$escrever .= "
else
	{

  
  
\$sqlalt = \"
UPDATE `$tabela`
SET
";


for($i = 0; $i < $conta; $i++)
{
	
		for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunaaltsql[$i][$x];
	}
	$y = 2;

$escrever .= "
  `$sig$cadt[$y]` = '\".$".$cadt[0] .".\"',
";
}
$escrever .= "
  `".$sig."OBSERVACAO` = '\".\$obs.\"',

  `".$sig."DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `".$sig."HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `".$sig."SESSION_ALTER` = '\".\$session.\"',
  `".$sig."IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `".$sig."ID_ALTER` = \".\$usuario.\"

WHERE ".$sig."ID = \".\$id.\"\";

\$conn->exec(\$sqlalt);


		
		ok(utf8_encode('Alterado com sucesso'));
		echo '<script>window.location=\"../../index.php?mod=fin&bot=".$tes."\"</script>';	
		
		
	}
	?>
		";

$escrever = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>