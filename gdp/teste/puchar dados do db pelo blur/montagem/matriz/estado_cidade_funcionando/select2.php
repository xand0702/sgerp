<?php

require_once('../../../../raiz/arq/conecta2.php'); 

$estado = $_GET['id2'];




	$sqlre2 = "

SELECT c.CID_NOME cidade, c.CID_ID id
FROM cidade c, estado e
WHERE c.CID_ESTADO = e.EST_ID AND c.CID_ESTADO = ".$estado."
ORDER BY c.CID_NOME



	";
	

	$i = 1;
	$c = 1;
	$obj[0]= '{"eoptionValue":0, "eoptionDisplay": "selecione"}';;
		foreach($conn->query($sqlre2) as $row)
		{
			
			
			$obj{$i} = '{"eoptionValue":'.$row['id'].', "eoptionDisplay": "'.utf8_encode($row['cidade']).'"}';
			
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