<html>
<head>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("select[name='pais']").blur(function(){
			var estado = $("option[name='estado']");
						
			
 
			
			$( estado ).val('');
			
			
			
 
				$.getJSON(
					'funcao.php',
					{ pais: $( this ).val(), ajax: 'true' },
					function( json )
					{
						for(var i = 1; i < json.length; i++)
						{
							$( estado ).val( json[i].estado );
						}
					}
				);
		});
	});
	</script>
</head>

<body>
	
	
	
	
	
	
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	

	
	
	
	
	
	
<table>	
<tr>
					<td align=right width="50%"><p>País: </p></td>
					<td align=left>
						<select class="selectpicker" data-live-search="true" name="pais">
						<option selected> selecione  </option>


						
<?php
require_once('../../../raiz/arq/conecta2.php'); 


$sqlrel111 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p


";

	foreach($conn->query($sqlrel111) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['pais']).'  </option>'; 

	}



?>							
						
						
						
						
						
						
						
						
						
						 </select>		
					</td>
				</tr>
				<tr>
					<td align=right><p>Estado: </p></td>
					<td align=left>
						<select class="selectpicker" data-live-search="true" name="estado" >

<option name="estado"> teste  </option>'; 
						
						 </select>		
					
					
					</td>
				</tr>
				
</table>	



</body></html>