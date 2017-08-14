<?php


require_once('../../raiz/arq/funcoes.php'); 
require_once('../../raiz/arq/conecta2.php'); 





@$ven_id = @$_SESSION['vendas']['ven_id'][1];



@$num_p = @$_SESSION['vendas']['num_p'][1];



@$vl_par = @$_SESSION['vendas']['vl_par'][1];



@$pago = @$_SESSION['vendas']['pago'][1];



@$txj = @$_SESSION['vendas']['txj'][1];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][1];



@$t_parc = @$_SESSION['vendas']['t_parc'][1];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][2];



@$num_p = @$_SESSION['vendas']['num_p'][2];



@$vl_par = @$_SESSION['vendas']['vl_par'][2];



@$pago = @$_SESSION['vendas']['pago'][2];



@$txj = @$_SESSION['vendas']['txj'][2];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][2];



@$t_parc = @$_SESSION['vendas']['t_parc'][2];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][3];



@$num_p = @$_SESSION['vendas']['num_p'][3];



@$vl_par = @$_SESSION['vendas']['vl_par'][3];



@$pago = @$_SESSION['vendas']['pago'][3];



@$txj = @$_SESSION['vendas']['txj'][3];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][3];



@$t_parc = @$_SESSION['vendas']['t_parc'][3];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][4];



@$num_p = @$_SESSION['vendas']['num_p'][4];



@$vl_par = @$_SESSION['vendas']['vl_par'][4];



@$pago = @$_SESSION['vendas']['pago'][4];



@$txj = @$_SESSION['vendas']['txj'][4];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][4];



@$t_parc = @$_SESSION['vendas']['t_parc'][4];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][5];



@$num_p = @$_SESSION['vendas']['num_p'][5];



@$vl_par = @$_SESSION['vendas']['vl_par'][5];



@$pago = @$_SESSION['vendas']['pago'][5];



@$txj = @$_SESSION['vendas']['txj'][5];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][5];



@$t_parc = @$_SESSION['vendas']['t_parc'][5];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][6];



@$num_p = @$_SESSION['vendas']['num_p'][6];



@$vl_par = @$_SESSION['vendas']['vl_par'][6];



@$pago = @$_SESSION['vendas']['pago'][6];



@$txj = @$_SESSION['vendas']['txj'][6];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][6];



@$t_parc = @$_SESSION['vendas']['t_parc'][6];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][7];



@$num_p = @$_SESSION['vendas']['num_p'][7];



@$vl_par = @$_SESSION['vendas']['vl_par'][7];



@$pago = @$_SESSION['vendas']['pago'][7];



@$txj = @$_SESSION['vendas']['txj'][7];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][7];



@$t_parc = @$_SESSION['vendas']['t_parc'][7];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][8];



@$num_p = @$_SESSION['vendas']['num_p'][8];



@$vl_par = @$_SESSION['vendas']['vl_par'][8];



@$pago = @$_SESSION['vendas']['pago'][8];



@$txj = @$_SESSION['vendas']['txj'][8];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][8];



@$t_parc = @$_SESSION['vendas']['t_parc'][8];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][9];



@$num_p = @$_SESSION['vendas']['num_p'][9];



@$vl_par = @$_SESSION['vendas']['vl_par'][9];



@$pago = @$_SESSION['vendas']['pago'][9];



@$txj = @$_SESSION['vendas']['txj'][9];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][9];



@$t_parc = @$_SESSION['vendas']['t_parc'][9];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	

@$ven_id = @$_SESSION['vendas']['ven_id'][10];



@$num_p = @$_SESSION['vendas']['num_p'][10];



@$vl_par = @$_SESSION['vendas']['vl_par'][10];



@$pago = @$_SESSION['vendas']['pago'][10];



@$txj = @$_SESSION['vendas']['txj'][10];



@$dt_ven = @$_SESSION['vendas']['dt_ven'][10];



@$t_parc = @$_SESSION['vendas']['t_parc'][10];







$datacadastro =  date('Y-m-d');
$horacadastro =  date('h:i:s');
$dataalteracao =  date('Y-m-d');
$horaalteracao =  date('h:i:s');
$session = session_id();
$usuario_cad = @$_SESSION['cf'];
$ip_cadastro = @$_SERVER['REMOTE_ADDR'];





$sqlcad = "INSERT INTO `venpgmt` 
(
  


`VNG_VEN_ID`,



`VNG_N_PAR`,



`VNG_VL_PAR`,



`VNG_PAGO`,



`VNG_TX`,



`VNG_DT_PGMT`,



`VNG_T_PARC`,

  
  
  `VNG_DATA_CADASTRO`,
  `VNG_HORA_CADASTRO`,
  `VNG_SESSION_CAD`,
  `VNG_IP_CADASTRO`,
  `VNG_DATA_ALTTERACAO`,
  `VNG_HORA_ALTERACAO`,
  `VNG_SESSION_ALTER`,
  `VNG_IP_ALTERACAO`,
  `VNG_ID_ALTER`,
  `VNG_ID_CAD`
)
VALUES (


'$ven_id',



'$num_p',



'$vl_par',



'$pago',



'$txj',



'$dt_ven',



'$t_parc',



'$datacadastro',
'$horacadastro',
'$session',
'$ip_cadastro',
'$dataalteracao',
'$horaalteracao',
'$session',
'$ip_cadastro',
$usuario_cad,
$usuario_cad

)
";


try 	
	{
		$conn->exec($sqlcad);
		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	


		echo '<script>window.location="finalcad.php"</script>';	

