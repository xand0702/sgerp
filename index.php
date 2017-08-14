<?php

require('raiz/arq/conecta2.php'); 

session_start();
$val = @$_SESSION['nome'];
	if($val == '')
	{
		echo '<script>window.location="valida_login.php"</script>';
	}
	else
	{


?>


<!DOCTYPE html>
<html lang="pt">
<head>
<title>TCC</title>
<meta charset="utf-8">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="ferr/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="ferr/bootstrap.min.js"></script>






<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="ferr/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="ferr/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->








<script language="JavaScript" src="teste.js"></script>


<!--   css site-->
<link rel="stylesheet" type="text/css"  href="raiz/css/csssite.css" />




		
		
		

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->








</head>

<body>





<header>
<h1>Sistema de Gerenciamento</h1>
</header>






<nav class="navbar navbar-default">
       

          
	<ul class="nav navbar-nav">
	  <li><a class="navbar-brand" href="index.php">SDG</a></li>
	  <li><a class="navbar-brand" href="index.php?mod=com">Compras</a></li>
	  <li><a class="navbar-brand" href="index.php?mod=est">Estoque</a></li>
	  <li><a class="navbar-brand" href="index.php?mod=ven">Vendas</a></li>
	  <li><a class="navbar-brand" href="index.php?mod=gdp">GDP</a></li>
	  <li><a class="navbar-brand" href="index.php?mod=fin">Financeiro</a></li>
	  <li><a class="navbar-brand" href="logoff.php">Sair</a></li>
	</ul>
          
 </nav>


<section>

<?php require_once('raiz/arq/busca.php');


 ?>

</section>

<footer>
<p>&copy; 2017 Sistema de Gerenciamento. Aluno: Alexandre Danilo de Almeida. Todos os direitos reservados.</p>
</footer>

</body>




</html>

<?php

	}

?>