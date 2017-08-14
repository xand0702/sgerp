<?php

require('../../raiz/arq/conecta2.php');

$codd = $_GET['codigo'];

	


		$sql = "
		


SELECT 'P.A.' material, p.PRO_ID id, p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO cod, p.PRO_ICMS icms, ip.IPA_PRECOUN ipi,
ip.IPA_QUANTIDADE fab, ip.IPA_ID idd

FROM produto p, itenspa ip
WHERE p.PRO_ID = ip.IPA_PRODUTO
AND ip.IPA_ID = ".$codd."			
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
