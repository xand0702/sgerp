<?php
	$con = mysql_connect( 'localhost', 'root', '' );
	mysql_select_db( 'tcc', $con );

$cod_estados = mysql_real_escape_string( $_GET['cod_estados'] );

$cidades = array();

$sql = "SELECT c.CID_ID id, c.CID_NOME nome
		FROM cidade c, estado e
		WHERE e.EST_ID = $cod_estados
		ORDER BY c.CID_NOME";
$res = mysql_query( $sql );
while ( $row = mysql_fetch_assoc( $res ) ) {
	$cidades[] = array(
		'id'	=> $row['id'],
		'nome'			=> $row['nome'],
	);
}

echo( json_encode( $cidades ) );

?>