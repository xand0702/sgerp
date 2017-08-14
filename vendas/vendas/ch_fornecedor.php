<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigof'];
	


		$sql = "
		
		SELECT pf.PEF_CPF docm, pf.PEF_NOME nomefor, p.FOR_CODIGO codf
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pf.PEF_CODIGO
GROUP BY codf
UNION ALL
SELECT pj.PEJ_CNPJ docm, pj.PEJ_RAZAO_SOCIAL nomefor, p.FOR_CODIGO codf
FROM fornecedor p, pessoa_fisica pf, pessoa_juridica pj
WHERE p.`FOR_CODIGO` = ".$codd."
AND p.FOR_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY codf
 

		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nomefor'] = $row['nomefor'];
			$arr['docm'] = $row['docm'];
			$arr['codf'] = $row['codf'];
			
				
				
		}
 
		echo json_encode( $arr );	
?>
