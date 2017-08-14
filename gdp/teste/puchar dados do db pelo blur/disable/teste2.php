<script type="text/javascript" src="jquery.min.js"></script>
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


$(function)(){
	if($("select#pais option") === 0)
	{	
		{$("select#estado").attr(disabled:true)}
	}
}

</script>




<form action="/select_demo.php">
  <label for="pais">Pais</label>
  <select name="id" id="pais">

  
 <option value="0"> selecione  </option> 
  
  
  
  
  <?php

  
  
  
  /*
  
var from = jQuery('select[name=select_from]');  
  
    if(($"select#pais").val === 0)
  {
	  from.attr('disabled', 'disabled');
  }
  else
  {
	  from.removeAttr("disabled");
  }
  
  
  */
  
  
  
  
  
  
  
  
  
  
  
  
  
  require_once('../../../../raiz/arq/conecta2.php'); 


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
  <noscript>
    <input type="submit" name="action" value="Load Individuals" />
  </noscript>
  <label for="estado">Estados:</label>
  <select name="estado" id="estado">
    <option value="1">Mark P</option>
    <option value="2">Andy Y</option>
    <option value="3">Richard B</option>
  </select>
<input type="submit" name="action" value="Book" />
</form>
