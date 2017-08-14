<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
SELECT pf.PEF_NOME nome, pf.PEF_CPF doc
FROM funcinario f, pessoa_fisica pf
WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
AND f.FUN_CODIGO = ".$codd."



		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['nome'];
			$arr['doc'] = $row['doc'];
				
				
		}
 
		echo json_encode( $arr );	
?>
