<?php

require_once('../../../../../raiz/arq/conecta2.php'); 



$pais = $_GET['paisdados'];



	$sqlrel111 = "

	SELECT e.EST_NOME estado, e.EST_ID id
	FROM estado e, pais p
	WHERE e.EST_PAIS = p.PAS_ID AND E.EST_PAIS = ".$pais."
	ORDER BY e.EST_NOME


	";

	$i = 1;
	$c = 1;
	$obj[0]= '{"optionValue":0, "optionDisplay": "selecione"}';;
		foreach($conn->query($sqlrel111) as $row)
		{
			
			
			$obj{$i} = '{"optionValue":'.$row['id'].', "optionDisplay": "'.utf8_encode($row['estado']).'"}';
			
			$c++;
			$i++;
				
		}
		$cont = "";
		for ($i = 0; $i < $c; $i++)
		{	
			if(1 == ($c - $i))
			{
				$cont .= $obj{$i}." ";
			}
			else
			{
				$cont .= $obj{$i}.", ";
			}
		}


  echo <<<HERE_DOC
 
    [$cont]
HERE_DOC;


		
		



?>