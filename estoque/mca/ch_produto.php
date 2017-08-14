<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
SELECT p.PRO_ID id, p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO cod, p.PRO_ICMS icms, p.PRO_IPI ipi,
p.PRO_FABRICANTE fab

FROM produto p
WHERE p.PRO_CODIGO = ".$codd."
GROUP BY cod
		
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
