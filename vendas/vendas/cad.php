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


//VENDEDOR

\$idfun = \$_SESSION['vendas']['cod_ven'];

\$sqlv = \"

SELECT f.fun_id idfun
FROM funcinario f
WHERE f.FUN_CODIGO = \".\$idfun.\"
\" ;

try 	
	{
		\$query = \$conn->prepare(\$sqlv);

		\$query->execute();

		\$idfun = \$query->fetch(PDO::FETCH_OBJ);

		\$idfun = \$idfun->idfun;
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }



	
//CLIENTE
	
\$idcli = \$_SESSION['vendas']['cod_cli'];

\$sqlc = \"
SELECT c.CLI_ID idcli
FROM cliente c
WHERE c.CLI_CODIGO =  \".\$idcli.\"
\" ;

try 	
	{
		\$query = \$conn->prepare(\$sqlc);

		\$query->execute();

		\$idcli = \$query->fetch(PDO::FETCH_OBJ);

		\$idcli = \$idcli->idcli;
	}
	catch(PDOException \$e)
    {
		echo \"Connection failed: \" . \$e->getMessage();
    }


//forma de pagamento
	
\$f_pgmt = 	\$_SESSION['vendas']['pgmto'];

if(\$f_pgmt == 'avista')
	\$f_pgmt = 'À Vista';
else
	\$f_pgmt = 'À Prazo';

//modo de pagamento

\$m_pgmt = 	\$_SESSION['vendas']['pagav'];

if(\$m_pgmt == 'dinheiro')
	\$m_pgmt = 'Dinheiro';
elseif(\$m_pgmt == 'debito')
	\$m_pgmt = 'Débito';
elseif(\$m_pgmt == 'cc')
	\$m_pgmt = 'Cartão de Crédito';
elseif(\$m_pgmt == 'cheque')
	\$m_pgmt = 'Cheque';
elseif(\$m_pgmt == 'boleto')
	\$m_pgmt = 'Boleto';

//transporte
	
\$transp = 	\$_SESSION['vendas']['trans'];

if(\$transp == 'cliente')
	\$transp = 'Retirado pelo Cliente';
else
	\$transp = 'O Mesmo';


//FINANCEIRO

\$entrada = @\$_SESSION['vendas']['entrada'];
\$desc = \$_SESSION['vendas']['desc'];
\$m_desc = \$_SESSION['vendas']['m_desc'];






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
  `".$sig."ID_VEN_FUN`,
  `".$sig."ID_CLI`,
  `".$sig."F_PGMT`,
  `".$sig."M_PGMT`,
  `".$sig."TRANSP`,
  `".$sig."ENTRADA`,
  `".$sig."DESCONTO`,
  `".$sig."M_DESC`,
  
  
  
  
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
\$codigo,
\$idfun,
\$idcli,
'\$f_pgmt',
'\$m_pgmt',
'\$transp',
'\$entrada',
'\$desc',
'\$m_desc',

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

