<?php





class classcadd



{
	
	

function cadd($sig, $dir, $tes, $subdir, $tabela, $coluna, $col_sql)
{


$fp = fopen("../../estoque/saida/tmp/cadd.php", "w+");



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

if(@$_SESSION['saida']['tip_m'] == 'M.C.')
{

$conta = count(@$_SESSION['itens']);

for($i=0; $i < $conta; $i++)
{
	
$escrever .= "

	

\$id = @\$_SESSION['itens'][$i][6];
\$quant_saida = @\$_SESSION['itens'][$i][7];
\$quantidade = @\$_SESSION['itens'][$i][5];
\$quantidade = \$quantidade - \$quant_saida;






\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario = @\$_SESSION['cf'];
\$ip_alteracao = @\$_SERVER['REMOTE_ADDR'];

";


	
$escrever .= "
if(\$quantidade == 0)
{
 
  
\$sqlalt = \"
UPDATE `itensmc`
SET
";


$escrever .= "

  `IMC_SITUACAO` = 'NÃO',
  `IMC_QUANTIDADE` = '\".\$quantidade.\"',
  `IMC_DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `IMC_HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `IMC_SESSION_ALTER` = '\".\$session.\"',
  `IMC_IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `IMC_ID_ALTER` = \".\$usuario.\"

WHERE IMC_id = \".\$id.\"\";

	
try 	
	{
		\$conn->exec(\$sqlalt);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }


}
";


$escrever .= "
elseif(\$quantidade != 0)
{
 
  
\$sqlalt = \"
UPDATE `itensmc`
SET
";


$escrever .= "

  `IMC_QUANTIDADE` = '\".\$quantidade.\"',
  `IMC_DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `IMC_HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `IMC_SESSION_ALTER` = '\".\$session.\"',
  `IMC_IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `IMC_ID_ALTER` = \".\$usuario.\"

WHERE IMC_id = \".\$id.\"\";

	
try 	
	{
		\$conn->exec(\$sqlalt);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }


}
";





}
}
else
{



$conta = count(@$_SESSION['itens']);

for($i=0; $i < $conta; $i++)
{
	
$escrever .= "

\$id = @\$_SESSION['itens'][$i][6];
@\$quant_saida = @\$_SESSION['itens'][$i][7];
\$quantidade = @\$_SESSION['itens'][$i][5];
\$quantidade = \$quantidade - \$quant_saida;



\$dataalteracao =  date('Y-m-d');
\$horaalteracao =  date('h:i:s');
\$session = session_id();
\$usuario = @\$_SESSION['cf'];
\$ip_alteracao = @\$_SERVER['REMOTE_ADDR'];
\$obs = @\$_POST['obs'];

";



	
$escrever .= "
if(\$quantidade == 0)
{
 
  
\$sqlalt = \"
UPDATE `itenspa`
SET
";


$escrever .= "

  `IPA_SITUACAO` = 'NÃO',
  `IPA_QUANTIDADE` = '\".\$quantidade.\"',
  `IPA_DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `IPA_HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `IPA_SESSION_ALTER` = '\".\$session.\"',
  `IPA_IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `IPA_ID_ALTER` = \".\$usuario.\"

WHERE IPA_ID = \".\$id.\"\";

	
try 	
	{
		\$conn->exec(\$sqlalt);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }


}
";

$escrever .= "
if(\$quantidade != 0)
{
 
  
\$sqlalt = \"
UPDATE `itenspa`
SET
";


$escrever .= "

  `IPA_QUANTIDADE` = '\".\$quantidade.\"',
  `IPA_DATA_ALTTERACAO` = '\".\$dataalteracao.\"',
  `IPA_HORA_ALTERACAO` = '\".\$horaalteracao.\"',
  `IPA_SESSION_ALTER` = '\".\$session.\"',
  `IPA_IP_ALTERACAO` = '\".\$ip_alteracao.\"',
  `IPA_ID_ALTER` = \".\$usuario.\"

WHERE IPA_ID = \".\$id.\"\";

	
try 	
	{
		\$conn->exec(\$sqlalt);
		
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }


}
";

}
}

$escrever .= "


		unset(\$_SESSION['".$subdir."']);
		unset(\$_SESSION['itens']);
		ok(utf8_encode('Cadstrado com sucesso'));
		echo '<script>window.location=\"../../index.php?mod=est&bot=".$tes."\"</script>';	

";


	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class
?>

