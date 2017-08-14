<?php

require_once('../../../../raiz/arq/conecta2.php'); 








if ($_GET['id'] == 1) 
{
	$sqlrel111 = "

	SELECT e.EST_NOME estado, e.EST_ID id
	FROM estado e


	";

	$i = 0;
	$c = 0;
	$obj;
		foreach($conn->query($sqlrel111) as $row)
		{
			
			
			$obj{$i} = '{"optionValue":'.$row['id'].', "optionDisplay": "'.$row['estado'].'"}';
			
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


		
		
}






else if ($_GET['id'] == 2) {
  
  $teste = '{"optionValue":10, "optionDisplay": "teste"}, {"optionValue":11, "optionDisplay": "Arif"}, {"optionValue":12, "optionDisplay": "JC"}';
  echo <<<HERE_DOC
 
    [$teste]
HERE_DOC;
} 

else if ($_GET['id'] == 3) {
  echo <<<HERE_DOC
    [{"optionValue":20, "optionDisplay": "Aidan"}, {"optionValue":21, "optionDisplay":"Russell"}]
HERE_DOC;
}
?>