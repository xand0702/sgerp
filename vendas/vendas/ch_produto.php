<?php

require('../../raiz/arq/conecta2.php');

$codd = $_GET['codigo'];

	


		$sql = "
		


SELECT sp.ISP_ID id,
p.PRO_ID idpro,
p.PRO_AB_DESCRICAO nome, 
p.PRO_CODIGO codpro,
p.PRO_ICMS icms, 
p.PRO_IPI ipi,
sp.ISP_VL_VENDA vlr,
sp.ISP_QUANTIDADE quant

FROM produto p, saidaitenspa sp
WHERE p.PRO_ID = sp.ISP_PRODUTO
AND sp.ISP_ID = ".$codd."			
		";

		foreach($conn->query($sql) as $row)
		{

			$arr['id'] = $row['id'];
			$arr['idpro'] = $row['idpro'];
			$arr['nome'] = $row['nome'];
			$arr['codpro'] = $row['codpro'];
			$arr['icms'] = $row['icms'];
			$arr['ipi'] = $row['ipi'];
			$arr['vlr'] = $row['vlr'];
			$arr['quant'] = $row['quant'];
				
				
		}
 
		echo json_encode( $arr );	
?>
