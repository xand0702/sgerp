

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















<script>
$(function(){
  $("select#pais").change(function(){
    $.getJSON("select.php",{id: $(this).val(), ajax: 'true'}, function(j){
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i].optionValue + '">' + j[i].optionDisplay + '</option>';
      }
      $("select#estado").html(options);
      $('.selectpicker').selectpicker('refresh');
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
      $('.selectpicker').selectpicker('refresh');
    })
  })
})





</script>










<form action="" method="">
<table width=100% align="center">
	<tr>
		<td colspan=2 align=center><p>-Classificar por Local</p></td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="estado">Pais:</label>
		</td>
		<td align=left width="50%">
			<select name="estado" id="pais" class="selectpicker" data-live-search="true">
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
		</td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="estado">Estados:</label>
		</td>
		<td align=left width="50%">
			<select name="estado" id="estado" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right width="50%">
			<label for="estado">Cidades:</label>
		</td>
		<td align=left width="50%">
			<select name="cidade" id="cidade" class="selectpicker" data-live-search="true" disabled>
				<option value="0"> selecione  </option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right>&nbsp </td>
		<td align=left>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Gerar Relatório</button>
			</div>
		</td>
	</tr>	
</table>	
</form>
<br><br>





<script>
function displayVals() {
  var verifica = $( '#pais' ).val();

  
  if(verifica == 0 )
  {
	  $('#estado').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#estado').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }

  }
 
 
 
 
$( "select" ).change( displayVals );


function displayValss() {
  var verifica = $( '#estado' ).val();

  
  if(verifica == 0 )
  {
	  $('#cidade').prop('disabled',true);
      $('.selectpicker').selectpicker('refresh');
  }
  else
  {
	 $('#cidade').prop('disabled',false);
     $('.selectpicker').selectpicker('refresh');
  }
  $("#test").text(verifica);

  }
 
 
 
 
$( "select" ).change( displayValss );
</script>



















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