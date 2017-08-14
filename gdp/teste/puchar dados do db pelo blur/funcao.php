<?php
	/**
	 * função que devolve em formato JSON os dados do cliente
	 */
	function retorna( $ref, $db )
	{
		$sql = "
		
		
		
		SELECT e.EST_NOME estado, e.EST_ID id, p.PAS_NOME pais
		FROM estado e, pais p
		WHERE p.PAS_ID = '$ref'
		


		";
 
		$query = $conn->query( $sql );
 
		$arr = Array();
		if( $query->num_rows )
		{
			$i = 0;
			while( $dados = $query->fetch_object() )
			{
				$i++;
				$arr['estado'][$i] = $dados->estado;
				
			}
		}
		else
			$arr['estado'] = 'não encontrado';
 
		return json_encode( $arr );
	}
 
/* só se for enviado o parâmetro, que devolve os dados */
if( isset($_GET['pais']) )
{
	$conn = new mysqli('localhost', 'root', '', 'tcc');
	echo retorna( filter ( $_GET['pais'] ), $db );
}
 
function filter( $var ){
	return $var;//a implementação desta, fica a cargo do leitor
}
?>