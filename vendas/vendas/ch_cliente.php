<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
SELECT pf.PEF_NOME nomec, pf.PEF_CPF docc
FROM cliente c, pessoa_fisica pf
WHERE c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND c.CLI_CODIGO = ".$codd."

UNION ALL

SELECT pj.PEJ_RAZAO_SOCIAL nomec, pj.PEJ_CNPJ docc
FROM cliente c, pessoa_juridica pj
WHERE c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND c.CLI_CODIGO = ".$codd."



		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nomec'] = $row['nomec'];
			$arr['docc'] = $row['docc'];
				
				
		}
 
		echo json_encode( $arr );	
?>
