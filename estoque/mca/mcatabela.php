	<?php



require_once('estoque/classtabela.php'); 

$coluna[0] = 'PEDIDO';
$coluna[1] = 'DATA_CADASTRO';
$coluna[2] = 'HORA_CADASTRO';


$request[0] = 'codfor';
$request[1] = 'vendfor';
$request[2] = 'limite';

$titulo[0] = 'Código';
$titulo[1] = 'Nota';
$titulo[2] = 'Pedido';
$titulo[3] = 'Data da entrada';
$titulo[4] = 'Hora da entrada';


$sql[0] = 'SELECT *
FROM entradamc e
';

$sql[1] = "SELECT *
FROM entradamc e
WHERE e.MCA_PEDIDO  LIKE '%\".\$limite.\"%' ";


$sql[2] = "SELECT *
FROM entradamc e
WHERE e.MCA_NOTA LIKE '%\".\$vendfor.\"%' 
";


$sql[3] = "SELECT *
FROM entradamc e
WHERE e.MCA_CODIGO LIKE '%\".\$codfor.\"%' 

";








$tabela = new classtabela();
$tabela->tabela('MCA_', 'est','tes3','mca' , $coluna, $request, $sql, $titulo);


require_once('estoque/tmp/tabela.php'); 

	
	?>