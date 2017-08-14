
<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "granja";

	
	$id  = mysql_connect($servidor,$usuario,$senha);
	if(!($id))
	{
		echo "Não foi possivel estabelecer uma conexão ";
		echo "<br>";
		exit;
		}
	else
	{
		
	}
	$con = mysql_select_db($base,$id);
	if(!$con)
	{ 
		echo "Não foi possivel conectar na base de dados ";
		echo "<br>";
		exit;
		}
	else
	{
		
	}	
	
	
?>
















