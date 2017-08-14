<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
SELECT pf.PEF_CPF doc, pf.PEF_NOME nome
FROM funcinario p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FUN_CODIGO` = ".$codd."
AND p.FUN_COD_PEF = pf.PEF_CODIGO
GROUP BY nome
				
		
		
			";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['nome'];
			$arr['doc'] = $row['doc'];
				
				
		}
 
		echo json_encode( $arr );	
?>
