
<?php
	require_once('raiz/arq/conecta2.php');
	require_once('raiz/arq/funcoes.php');
	$login = @$_POST['login'];
	$senha = @$_POST['senha'];
	
	
  //verifica se o login e a senha conferem
  
  
  
  
	$sql = "SELECT f.FUN_CODIGO id, f.FUN_USUARIO usuario, f.FUN_SENHA senha
			FROM funcinario f
			WHERE f.FUN_USUARIO = '".$login."' AND f.FUN_SENHA = '".$senha."'  ";
	
	$result = 0;
	
	
	
try {
		foreach ($conn->query($sql) as $row) 
	{    
		$result = count($row['usuario']);
		$_SESSION['nome'] = $row['usuario'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['cf'] = $row['id'];
		
		
	}
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }	
    

  
  //
   //traz o resultado da pesquisa acima ver se é nulo (0) ou não (1)
  if ( $result >= 1 )
	{	  
	  //exite o usuario
	    session_start();
        $_SESSION['nome'] = $row['usuario'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['cf'] = $row['id'];
		
		

		
		direciona('index.php');	
      
  	} 
  else
  {
	header("Location:login.php");
  }
 ?>
