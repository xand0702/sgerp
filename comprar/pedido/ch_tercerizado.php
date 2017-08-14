<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		SELECT pf.PEF_CPF fab, pf.PEF_NOME nome, p.TER_CODIGO cod
FROM tercerizados p, pessoa_fisica pf
WHERE p.`TER_CODIGO` = ".$codd."
AND p.TER_COD_PESSOA = pf.PEF_CODIGO
UNION ALL
SELECT pj.PEJ_CNPJ fab, pj.PEJ_RAZAO_SOCIAL nome, p.TER_CODIGO cod
FROM tercerizados p, pessoa_juridica pj
WHERE p.`TER_CODIGO` = ".$codd."
AND p.TER_COD_PESSOA = pj.PEJ_CODIGO

 

		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['nome'];
			$arr['fab'] = $row['fab'];
			$arr['cod'] = $row['cod'];
			
				
				
		}
 
		echo json_encode( $arr );	
?>
