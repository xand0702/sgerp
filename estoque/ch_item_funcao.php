
<?php
require_once('raiz/arq/conecta2.php'); 
	/**
	 * fun��o que devolve em formato JSON os dados do cliente
	 */
	function retorna( $ref, $db )
	{
		$sql = "
		
		SELECT *
FROM pessoa_fisica p
WHERE p.PEF_ID =  '$ref'

		";
 
		$query = $db->query( $sql );
 
		$arr = Array();
		if( $query->num_rows )
		{
			while( $dados = $query->fetch_object() )
			{
				$arr['endereco'] = $dados->endereco;
				$arr['testando'] = $dados->tel;
				$arr['teste'] = $dados->preco;
				$arr['codigo'] = $dados->codigo;
				
				
			}
		}
		else
			$arr['endereco'] = 'n�o encontrado';
 
		return json_encode( $arr );
	}
 
/* s� se for enviado o par�metro, que devolve os dados */
if( isset($_GET['alter']) )
{
require_once('raiz/arq/conecta2.php'); 
	echo retorna( filter ( $_GET['alter'] ), $conn );
}
 
function filter( $var ){
	return $var;//a implementa��o desta, fica a cargo do leitor
}
?>