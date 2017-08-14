<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
		SELECT *
		FROM pessoa_juridica p
		WHERE p.`PEJ_CODIGO` = ".$codd."

		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['PEJ_RAZAO_SOCIAL'];
			$arr['cnpj'] = $row['PEJ_CNPJ'];
				
				
		}
 
		echo json_encode( $arr );	
?>
