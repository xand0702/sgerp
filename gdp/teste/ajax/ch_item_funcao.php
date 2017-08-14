<?php
	/**
	 * funзгo que devolve em formato JSON os dados do cliente
	 */
	function retorna( $ref, $db )
	{
		$sql = "
		
		SELECT p.`FIN_PRODUTO_REFERENCIA` NNNN,
		p.`FIN_PRODUTO_CODIGO` codigo,
		r.`FIN_RACA_NOME` tel,
		pc.`PRO_PORCO_PESOFINAL` endereco,
		r.`FIN_RACA_PRECO` preco
		FROM fin_produto p, fin_raca r, pro_porco pc
		WHERE p.`FIN_PRODUTO_CODPORC` = pc.`PRO_PORCO_CODIGO`
		AND p.`FIN_PRODUTO_CODRAC` = r.`FIN_RACA_CODIGO`
		AND p.`FIN_PRODUTO_REFERENCIA` = '$ref'

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
			$arr['endereco'] = 'nгo encontrado';
 
		return json_encode( $arr );
	}
 
/* sу se for enviado o parвmetro, que devolve os dados */
if( isset($_GET['NNNN']) )
{
	$db = new mysqli('localhost', 'root', '', 'granja');
	echo retorna( filter ( $_GET['NNNN'] ), $db );
}
 
function filter( $var ){
	return $var;//a implementaзгo desta, fica a cargo do leitor
}
?>