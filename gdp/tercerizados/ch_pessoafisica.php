<?php


require('../../raiz/arq/conecta2.php'); 

$codd = $_GET['codigo'];
	


		$sql = "
		
		SELECT *
		FROM pessoa_fisica p
		WHERE p.`PEF_CODIGO` = ".$codd."

		";

		foreach($conn->query($sql) as $row)
		{

			$arr['nome'] = $row['PEF_NOME'];
			$arr['cpf'] = $row['PEF_CPF'];
				
				
		}
 
		echo json_encode( $arr );	
?>
