<?php





class classcadd



{
	
	

function cadd($sig, $mod, $dir, $tes, $subdir, $tabela, $coluna, $col_sql)
{


$fp = fopen("../../".$dir."/".$subdir."/tmp/cadd.php", "w+");



$escrever = "<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 



";

$col = count($_SESSION['itens']);


for($y = 0; $y < $col; $y++)
{



$conta = count($coluna);


for($i = 0; $i < $conta; $i++)
{
	$escrever .= "

\$".$coluna[$i]." = \$_SESSION['".$subdir."']['".$coluna[$i]."'][$y];

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



$conta = count(@$_SESSION['itens']);

for($i=0; $i < $conta; $i++)
{
	
$escrever .= "

	

\$id = @\$_SESSION['itens'][$i][1];
\$quant_saida = @\$_SESSION['itens'][$i][9];
\$quantidade = @\$_SESSION['itens'][$i][5];
\$quantidade = \$quantidade - \$quant_saida;






\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario = @\$_SESSION['cf'];
\$ip_alteracao = @\$_SERVER['REMOTE_ADDR'];

";


	
$escrever .= "

  
\$sqlalt = \"
UPDATE `saidaitenspa`
SET
";


$escrever .= "

  `ISP_QUANTIDADE` = '\".\$quantidade.\"',
  `ISP_DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `ISP_HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `ISP_SESSION_ALTER` = '\".\$session.\"',
  `ISP_IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `ISP_ID_ALTER` = \".\$usuario.\"

WHERE ISP_id = \".\$id.\"\";

	
try 	
	{
		\$conn->exec(\$sqlalt);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }



";





}


$escrever .= "


		echo '<script>window.location=\"".$subdir."cadastroitensf.php\"</script>';	

";


	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>

