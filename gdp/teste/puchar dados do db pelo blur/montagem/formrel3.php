
<?php

  require_once('../../../../raiz/arq/conecta2.php'); 


?>











<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>
  
  
  
  
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



	 <div class="modal-body">




<script type="text/javascript">

$(function(){
  $('select#paisdados').change(function(){
	  
    $.getJSON("select.php",{paisdados: $(this).val(), ajax: 'true'}, function(j){
		
		
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i].optionValue + '">' + j[i].optionDisplay + '</option>';
      }
      $('select#estadodados').html(options);
	  
      $('.selectpicker').selectpicker('refresh');
    }).modal(1)
  })
})


$(function(){
  $('select#estadodados').change(function(){
    $.getJSON("select2.php",{estadodados: $(this).val(), ajax: 'true'}, function(k){
      var options = '';
      for (var i = 0; i < k.length; i++) {
        options += '<option value="' + k[i].eoptionValue + '">' + k[i].eoptionDisplay + '</option>';
      }
      $('select#cidadedados').html(options);
      $('.selectpicker').selectpicker('refresh');
    }).modal(2)
  })
})




$(function(){
  $('select#paiscontato').change(function(){
    $.getJSON("select3.php",{paiscontato: $(this).val(), ajax: 'true'}, function(x){	
      var optionscontato = '';
      for (var e = 0; e < x.length; e++) {
        optionscontato += '<option value="' + x[e].optionValue + '">' + x[e].optionDisplay + '</option>';
      }
      $('select#estadocontato').html(optionscontato);  
      $('.selectpicker').selectpicker('refresh');
    }).modal()
	
  })
})


$(function(){
  $('select#estadocontato').change(function(){
    $.getJSON("select4.php",{estadocontato: $(this).val(), ajax: 'true'}, function(y){
      var options = '';
      for (var i = 0; i < y.length; i++) {
        options += '<option value="' + y[i].eoptionValue + '">' + y[i].eoptionDisplay + '</option>';
      }
      $('select#cidadecontato').html(options);
      $('.selectpicker').selectpicker('refresh');
    }).modal()
  })
})




$(function(){
  $('select#paissistema').change(function(){
	  
    $.getJSON("select5.php",{paissistema: $(this).val(), ajax: 'true'}, function(z){
		
		
      var options = '';
      for (var i = 0; i < z.length; i++) {
        options += '<option value="' + z[i].optionValue + '">' + z[i].optionDisplay + '</option>';
      }
      $('select#estadosistema').html(options);
	  
      $('.selectpicker').selectpicker('refresh');
    }).modal()
  })
})


$(function(){
  $('select#estadosistema').change(function(){
    $.getJSON("select6.php",{estadosistema: $(this).val(), ajax: 'true'}, function(a){
      var options = '';
      for (var i = 0; i < a.length; i++) {
        options += '<option value="' + a[i].eoptionValue + '">' + a[i].eoptionDisplay + '</option>';
      }
      $('select#cidadesistema').html(options);
      $('.selectpicker').selectpicker('refresh');
    }).modal()
  })
})

</script>





<form action="gdp/pessoafisica/relatorios/relcadreg.php" method="post" target="_blank">

<table width=100% align="center">
	<tr>
		<td colspan=2 align=center><p>-Classificar por Local</p></td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="paisdados">Pais:</label>
		</td>
		<td align=left width="50%">
			<select name="paisdados" id="paisdados" class="selectpicker" data-live-search="true">
				<option value="0"> selecione  </option>
  
  <?php
  


$sqlrel111 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p
ORDER BY p.PAS_NOME


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
		<td align=right width="50%">
			<label for="estadodados">Estados:</label>
		</td>
		<td align=left width="50%">
		

			<select name="estadodados" id="estadodados" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="cidadedados">Cidades:</label>
		</td>
		<td align=left width="50%">
			<select name="cidadedados" id="cidadedados" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>&nbsp </td>
		<td align=left>
			<div>
				<button type="submit" class="btn btn-default">Gerar Relatório</button>
			</div>
		</td>
	</tr>	
</table>	
	
	
</form>
<script>

function dadosestado() {
  var verificaest = $( '#paisdados' ).val();

  
  if(verificaest == 0 )
  {
	  $('#estadodados').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#estadodados').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }

  }
 $( "select" ).change( dadosestado );
 
 
 
 
function dadoscidades() {
  var verificacid = $( '#estadodados' ).val();
  if(verificacid == 0 )
  {
	  $('#cidadedados').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#cidadedados').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }
  }
 $( "select" ).change( dadoscidades );
 
 
 
 


</script>

	  </div>	  

	  <hr>
	 <div class="modal-body">




<form action="gdp/pessoafisica/relatorios/relcadreg.php" method="post" target="_blank">

<table width=100% align="center">
	<tr>
		<td colspan=2 align=center><p>-Classificar por Local</p></td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="paiscontato">Pais:</label>
		</td>
		<td align=left width="50%">
			<select name="paiscontato" id="paiscontato" class="selectpicker" data-live-search="true">
				<option value="0"> selecione  </option>
  
  <?php
  


$sqlrel111 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p
ORDER BY p.PAS_NOME


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
		<td align=right width="50%">
			<label for="estadocontato">Estados:</label>
		</td>
		<td align=left width="50%">
		

			<select name="estadocontato" id="estadocontato" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="cidadecontato">Cidades:</label>
		</td>
		<td align=left width="50%">
			<select name="cidadecontato" id="cidadecontato" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>&nbsp </td>
		<td align=left>
			<div>
				<button type="submit" class="btn btn-default">Gerar Relatório</button>
			</div>
		</td>
	</tr>	
</table>	
	
	
</form>
<script>

function dadosestado() {
  var verificaest = $( '#paiscontato' ).val();

  
  if(verificaest == 0 )
  {
	  $('#estadocontato').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#estadocontato').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }

  }
 $( "select" ).change( dadosestado );
 
 
 
 
function dadoscidades() {
  var verificacid = $( '#estadocontato' ).val();
  if(verificacid == 0 )
  {
	  $('#cidadecontato').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#cidadecontato').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }
  }
 $( "select" ).change( dadoscidades );
 
 
 
 


</script>

		
		
		
		
		
		
		
		
		
	  </div>	  
	 <hr>
	 <div class="modal-body">

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		







<form action="gdp/pessoafisica/relatorios/relcadreg.php" method="post" target="_blank">

<table width=100% align="center">
	<tr>
		<td colspan=2 align=center><p>-Classificar por Local</p></td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="paissistema">Pais:</label>
		</td>
		<td align=left width="50%">
			<select name="paissistema" id="paissistema" class="selectpicker" data-live-search="true">
				<option value="0"> selecione  </option>
  
  <?php
  


$sqlrel111 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p
ORDER BY p.PAS_NOME


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
		<td align=right width="50%">
			<label for="estadosistema">Estados:</label>
		</td>
		<td align=left width="50%">
		

			<select name="estadosistema" id="estadosistema" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="cidadesistema">Cidades:</label>
		</td>
		<td align=left width="50%">
			<select name="cidadesistema" id="cidadesistema" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>&nbsp </td>
		<td align=left>
			<div>
				<button type="submit" class="btn btn-default">Gerar Relatório</button>
			</div>
		</td>
	</tr>	
</table>	
	
	
</form>
<script>

function dadosestado() {
  var verificaest = $( '#paissistema' ).val();

  
  if(verificaest == 0 )
  {
	  $('#estadosistema').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#estadosistema').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }

  }
 $( "select" ).change( dadosestado );
 
 
 
 
function dadoscidades() {
  var verificacid = $( '#estadosistema' ).val();
  if(verificacid == 0 )
  {
	  $('#cidadesistema').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#cidadesistema').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }
  }
 $( "select" ).change( dadoscidades );
 
 
 
 


</script>


	  </div>	
	  
	  		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>























<?php
/*

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>




<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>



<script type="text/javascript" src="jquery.min.js"></script>
<script src="jquery-1.10.2.js"></script>
<script type="text/javascript" charset="utf-8">
$(function(){
  $("select#pais").change(function(){
    $.getJSON("select.php",{id: $(this).val(), ajax: 'true'}, function(j){
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i].optionValue + '">' + j[i].optionDisplay + '</option>';
      }
      $("select#estado").html(options);
    })
  })
})


$(function(){
  $("select#estado").change(function(){
    $.getJSON("select2.php",{id2: $(this).val(), ajax: 'true'}, function(k){
      var options = '';
      for (var i = 0; i < k.length; i++) {
        options += '<option value="' + k[i].eoptionValue + '">' + k[i].eoptionDisplay + '</option>';
      }
      $("select#cidade").html(options);
    })
  })
})





</script>



<form action="/select_demo.php">
  <label for="pais">Pais</label>
  <select name="id" id="pais"  class="selectpicker" data-live-search="true" >

  
 <option value="0"> selecione  </option> 
  
  
  
  
  <?php

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  require_once('../../../../raiz/arq/conecta2.php'); 


$sqlrel111 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p
ORDER BY p.PAS_NOME


";

	foreach($conn->query($sqlrel111) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['pais']).'  </option>'; 

	}



?>							
  
  
  </select>

  
  <label for="estado">Estados:</label>
  <select name="id2" id="estado" class="selectpicker" data-live-search="true">
	<option value="0"> selecione  </option>

  </select>
  
  </select>

  
  <label for="estado">Cidades:</label>
  <select name="cidade" id="cidade">
  
		<option value="0"> selecione  </option>
  
  </select>
  
  
  
  
<input type="submit" name="action" value="Book" />
</form>





<script>

function displayVals() {
  var singleValues = $( "#pais" ).val();
  // When using jQuery 3:
  // var multipleValues = $( "#multiple" ).val();
  if(singleValues == 0 )
  {
	  $("#estado").prop("disabled", true);
  }
  else
  {
	  $("#estado").prop("disabled", false);
  }
  
}
 
$( "select" ).change( displayVals );
displayVals();


function displayValss() {
  var singleValuess = $( "#estado" ).val();
  // When using jQuery 3:
  // var multipleValuess = $( "#multiple" ).val();
  if(singleValuess == 0 )
  {
	  $("#cidade").prop("disabled", true);
  }
  else
  {
	  $("#cidade").prop("disabled", false);
  }
  
}
 
$( "select" ).change( displayValss );
displayValss();




</script>
*/
?>