<?php

require('../../raiz/arq/conecta2.php');

$codd = $_GET['codigo'];

	


		$sql = "



SELECT 'M.C.' material, p.PRO_ID id, p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO cod, p.PRO_ICMS icms, ip.IMC_PRECOUN ipi,
ip.IMC_QUANTIDADE fab, ip.IMC_ID idd

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
			$arr['idd'] = $row['idd'];
			
				
				
		}
 
		echo json_encode( $arr );	
?>
