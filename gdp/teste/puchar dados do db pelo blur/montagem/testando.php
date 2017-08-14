<?php

require_once('../../../../raiz/arq/conecta2.php'); 

$estado = $_GET['estadodados'];




	$sqlre2 = "

		SELECT *
		FROM pessoa_fisica p
		WHERE p.`PEF_CODIGO` = ".$estado."



	";
	

	$i = 1;
	$c = 1;
	$obj[0]= '{"eoptionValue":0, "eoptionDisplay": "selecione"}';;
		foreach($conn->query($sqlre2) as $row)
		{
			
			
			$obj{$i} = '{"eoptionValue":'.$row['PEF_NOME'].', "eoptionDisplay": "'.utf8_encode($row['PEF_TELEFONE']).'"}';
			
			$c++;
			$i++;
				
		}
		$cont2 = "";
		for ($i = 0; $i < $c; $i++)
		{	
			if(1 == ($c - $i))
			{
				$cont2 .= $obj{$i}." ";
			}
			else
			{
				$cont2 .= $obj{$i}.", ";
			}
		}


  echo <<<HERE_DOC
 
    [$cont2]
HERE_DOC;


		
		



?>