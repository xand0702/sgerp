
<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "granja";

	
	$id  = mysql_connect($servidor,$usuario,$senha);
	if(!($id))
	{
		echo "N�o foi possivel estabelecer uma conex�o ";
		echo "<br>";
		exit;
		}
	else
	{
		
	}
	$con = mysql_select_db($base,$id);
	if(!$con)
	{ 
		echo "N�o foi possivel conectar na base de dados ";
		echo "<br>";
		exit;
		}
	else
	{
		
	}	
	
	
?>
















