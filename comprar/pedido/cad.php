<?php





class classcad



{
	
	

function cad($sig, $mod, $dir, $tes, $subdir, $tabela, $coluna, $col_sql)
{


$fp = fopen("../../".$dir."/".$subdir."/tmp/cad.php", "w+");



$escrever = "<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 


\$sql = \"

SELECT MAX(f.".$sig."CODIGO) codigo
FROM ".$tabela." f

\" ;


\$query = \$conn->prepare(\$sql);

\$query->execute();

\$codigo = \$query->fetch(PDO::FETCH_OBJ);

\$codigo = \$codigo->codigo;

if(\$codigo == '')
{
	\$codigo = 0;
}

\$codigo++;


";

$escrever .= "




\$id = \$_SESSION['".$subdir."']['cod_cli'];




";


$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

\$".$coluna[$i]." = \$_SESSION['".$subdir."']['".$coluna[$i]."'];

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
  `".$sig."CODIGO`,
  `".$sig."COD_FUN`,
  
  
";


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

`".$sig.$col_sql[$i]."`,

";
}



$escrever .= "  
  
  `".$sig."ATENDIDO`,
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
\$codigo,
\$id,";

for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

'\$".$coluna[$i]."',

";

}

$escrever .= "

'SIM',
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
		echo '<script>window.location=\"".$subdir."cadastroitens.php\"</script>';	
		}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }






";

	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>

