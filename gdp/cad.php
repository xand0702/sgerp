<?php





class classcad



{
	
	

function cad($sig, $dir, $tes, $subdir, $coluna, $col_sql)
{


$fp = fopen("../../gdp/tmp/cad.php", "w+");



$escrever = "<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 
session_start();


\$sql = \"

SELECT MAX(f.".$sig."CODIGO) codigo
FROM ".$subdir." f

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
\$pessoa = \$_SESSION['".$subdir."']['pessoa'];




";


$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

\$".$coluna[$i]." = \$_SESSION['".$subdir."']['".$coluna[$i]."'];

";

}



$escrever .= "


\$obs = \$_SESSION['".$subdir."']['obs'];




\$datacadastro =  date('Y-m-d');
\$horacadastro =  date('h:i:s');
\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario_cad = @\$_SESSION['cf'];
\$ip_cadastro = @\$_SERVER['REMOTE_ADDR'];


";






$escrever .= "


\$sqlcad = \"INSERT INTO `".$subdir."` 
(
  `".$sig."CODIGO`,
  `".$sig."COD_PESSOA`,
  `".$sig."PESSOA`,
  
";


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

`".$sig.$col_sql[$i]."`,

";
}



$escrever .= "  
  
  `".$sig."OBSERVACAO`,
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
\$id,
'\$pessoa',";

for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

'\$".$coluna[$i]."',

";

}

$escrever .= "

'\$obs',
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

\$conn->exec(\$sqlcad);



		unset(\$_SESSION['".$subdir."']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location=\"../../index.php?mod=".$dir."&bot=".$tes."\"</script>';	
";

	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>

