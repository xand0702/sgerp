<?php

$con = mysql_connect('localhost', 'root', '');
if (!$con) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';


	$con = mysql_connect( 'localhost', 'root', '' );
	mysql_select_db( 'tcc', $con );
?>
<label for="cod_estados">Estado:</label>
<select name="cod_estados" id="cod_estados">
	<option value=""></option>
	<?php
		$sql = "SELECT e.EST_ID id, e.EST_NOME nome
				FROM estado e
				ORDER BY e.EST_NOME";
		$res = mysql_query( $sql );
		while ( $row = mysql_fetch_assoc( $res ) ) {
			echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
		}
	?>
</option></select>

<label for="cod_cidades">Cidade:</label>
<select name="cod_cidades" id="cod_cidades">
	<option value="">-- Escolha um estado --</option>
</select>




<script>
$(function(){
	$('#cod_estados').change(function(){
		if( $(this).val() ) {
			$('#cod_cidades').hide();
			$('.carregando').show();
			$.getJSON('cidades.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
				var options = '<option value=""></option>';	
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
				}	
				$('#cod_cidades').html(options).show();
				$('.carregando').hide();
			});
		} else {
			$('#cod_cidades').html('<option value="">-- Escolha um estado --</option>');
		}
	});
});
</script>




