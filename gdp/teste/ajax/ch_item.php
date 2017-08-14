<html>
<head>
    <link rel="stylesheet" type="text/css"  href="./../arq/estilo.css" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("input[name='codigo']").blur(function(){
			var endereco = $("input[name='endereco']");
			var telefone = $("input[name='telefone']");
			var teste = $("input[name='teste']");
			var codigo = $("input[name='codigo']");
			
			
 
			$( endereco ).val('Carregando...');
			$( telefone ).val('Carregando...');
			$( teste ).val('Carregando...');
			$( codigo ).val('Carregando...');
			
 
				$.getJSON(
					'ch_item_funcao.php',
					{ codigo: $( this ).val() },
					function( json )
					{
						$( endereco ).val( json.endereco );
						$( telefone ).val( json.testando );
						$( teste ).val( json.teste );
						$( codigo ).val( json.codigo );
						
						
					}
				);
		});
	});
	</script>
</head>
<body>
	<form action="./ch_item_reg.php" method="post">
	<table border="0" align="center">
	  <tr>
	
	<td class="subtitulo">Ref. </td>
	<td class="subtitulo">Raça </td>
	<td class="subtitulo">Peso(kg) </td>
	<td class="subtitulo">Preço(R$) </td>
	<td class="subtitulo">&nbsp; </td>
	</tr>
	<tr>
		<td> <input type="text" name="NNNN" /></label></td>
		<td><input type="text" name="telefone"  /></label></td>
		<td><input type="text" name="endereco"   /></label></td>
		<td><input type="text" name="teste"   /></label></td>
		<input type="hidden" name="codigo"   /></label>
		
		
		<td><input type="submit" value="inserir" /></td>
	  </tr></table>
	</form>

</body>
</html>
