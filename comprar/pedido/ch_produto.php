<?php

require('../../raiz/arq/conecta2.php');

$codd = $_GET['codigo'];

	


		$sql = "
		


SELECT 'P.A.' material, p.PRO_ID id, p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO cod, p.PRO_ICMS icms, ip.IPA_PRECOUN ipi,
ip.IPA_QUANTIDADE fab

FROM produto p, itenspa ip
WHERE p.PRO_ID = ip.IPA_PRODUTO
AND ip.IPA_ID = ".$codd."
UNION ALL 


SELECT 'M.C.' material, p.PRO_ID id, p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO cod, p.PRO_ICMS icms, ip.IMC_PRECOUN ipi,
ip.IMC_QUANTIDADE fab

FROM produto p, itensmc ip
WHERE p.PRO_ID = ip.IMC_PRODUTO
AND ip.IMC_ID = ".$codd."			
		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['nome'];
			$arr['id'] = $row['id'];
			$arr['cod'] = $row['cod'];
			$arr['icms'] = $row['icms'];
			$arr['ipi'] = $row['ipi'];
			$arr['fab'] = $row['fab'];
				
				
		}
 
		echo json_encode( $arr );	
?>
