<html>
<head>
    <link rel="stylesheet" type="text/css"  href="./../arq/estilo.css" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("input[name='NNNN']").blur(function(){
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
					{ NNNN: $( this ).val() },
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
<?php


require_once('/../arq/conecta.php');

$sql = mysql_query
("

SELECT p.`FIN_PRODUTO_REFERENCIA` ref,
 por.`PRO_PORCO_PESOFINAL` peso, 
 r.`FIN_RACA_NOME` raca,
 r.`FIN_RACA_PRECO` preco
FROM fin_produto p, `pro_porco` por, `fin_raca` r
WHERE p.`FIN_PRODUTO_CODPORC` = por.`PRO_PORCO_CODIGO`
AND p.`FIN_PRODUTO_CODRAC` = r.`FIN_RACA_CODIGO`

") 
		 or die(mysql_error()); 
		 
		 




?>
    <table width="350" border="0" align="center">
      <tr>
        <td class="subtitulo">Ref.</td>
        <td class="subtitulo">Ra&ccedil;a</td>
        <td class="subtitulo">Peso</td>
        <td class="subtitulo">Pre&ccedil;o</td>
      </tr>
	  <?php
	  
	    while ($row = mysql_fetch_array($sql))
	{
	  
	  
	  ?>
      <tr>
        <td class="item"><?php echo $row['ref']?></td>
        <td class="item"><?php echo $row['raca']?></td>
        <td class="item"><?php echo $row['peso']?></td>
        <td class="item"><?php echo $row['preco']?></td>
      </tr>
	  <?php }
	  ?>
    </table>
<p>&nbsp;</p>
</body>
</html>
