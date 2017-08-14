<?php





class classcaddf



{
	
	

function caddf($sig, $mod, $dir, $tes, $subdir, $tabela, $coluna, $col_sql)
{


$fp = fopen("../../".$dir."/".$subdir."/tmp/caddf.php", "w+");



$escrever = "<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 



";

$col = @$_SESSION[vendas]['n_p']; 
$col++;

for($y = 1; $y < $col; $y++)
{



$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

@\$".$coluna[$i]." = @\$_SESSION['".$subdir."']['".$coluna[$i]."'][$y];

";

}



$escrever .= "





\$datacadastro =  date('Y-m-d');
\$horacadastro =  date('h:i:s');
\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario_cad = @\$_SESSION['cf'];
\$ip_cadastro = @\$_SERVER['REMOTE_ADDR'];


";






$escrever .= "


\$sqlcad = \"INSERT INTO `".$tabela."` 
(
  
";


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

`".$sig.$col_sql[$i]."`,

";
}



$escrever .= "  
  
  `".$sig."DATA_CADASTRO`,
  `".$sig."HORA_CADASTRO`,
  `".$sig."SESSION_CAD`,
  `".$sig."IP_CADASTRO`,
  `".$sig."DATA_ALTTERACAO`,
  `".$sig."HORA_ALTERACAO`,
  `".$sig."SESSION_ALTER`,
  `".$sig."IP_ALTERACAO`,
  `".$sig."ID_ALTER`,
  `".$sig."ID_CAD`
)
VALUES (
";

for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

'\$".$coluna[$i]."',

";

}

$escrever .= "

'\$datacadastro',
'\$horacadastro',
'\$session',
'\$ip_cadastro',
'\$dataalteracao',
'\$horaalteracao',
'\$session',
'\$ip_cadastro',
\$usuario_cad,
\$usuario_cad

)
\";


try 	
	{
		\$conn->exec(\$sqlcad);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }
	";
}



$escrever .= "


		echo '<script>window.location=\"finalcad.php\"</script>';	

";


	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>

