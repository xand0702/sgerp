<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
		SELECT pf.PEF_CPF doc, pf.PEF_NOME nome, p.FOR_CODIGO cod
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pf.PEF_CODIGO
GROUP BY cod
UNION ALL
SELECT pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, p.FOR_CODIGO cod
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY cod
 

		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['nome'];
			$arr['doc'] = $row['doc'];
				
				
		}
 
		echo json_encode( $arr );	
?>
