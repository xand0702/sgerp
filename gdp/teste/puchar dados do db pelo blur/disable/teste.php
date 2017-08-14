<script type="text/javascript" src="jquery.min.js"></script>







<script type="text/javascript" charset="utf-8">







$('#select_1').change(function() {
   if(document.getElementById("kct").selected == true;) 
   {
        $("#select_2").attr({disabled:true});
   } else 
   {
        $("#select_2").attr({disabled:false});
   }
)}





if(document.getElementById("kct").selected = true;)
{ myFunction();}








function myFunction() {
     document.getElementById("select_2").disabled = true;
}
</script>




<button onclick="myFunction()">Try it</button>




	 
<select id="select_1" name="tipo_carta">
 <option value="1">90gr</option>
 <option value="2">150gr</option>
 <option value="3" id="kct">270gr</option>
</select>

<select id="select_2" name="stampa">
 <option value="0">Fronte</option>
 <option value="1">Fronte e Retro</option>
</select>
















<?php /*


(docunt).remeady(


$('#select_1').change(function() {
   if($(this).val() === '3') 
   {
        document.getElementById("select_2") = "disabled";
   } else 
   {
        document.getElementById("select_2") = "";
   }

   
   
   
   
   
   
   
<script type="text/javascript" charset="utf-8">

var from = jQuery('select[name=estado]');  
  
    if(($"select#pais").val === 0)
  {
	  from.attr('disabled', 'disabled');
  }
  else
  {
	  from.removeAttr("disabled");
  }



</script>




<form action="/select_demo.php">
  <label for="pais">Pais</label>
  <select name="id" id="pais">

  
 <option value="0" id="pais"> selecione0  </option> 
 <option value="1" id="pais"> selecione1  </option> 
 <option value="2" id="pais"> selecione2  </option> 
 
  
  
  
  
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
  
  

  
  
  
  
  
  
  
?>
  
  
  </select>
 
  <label for="estado">Estados:</label>
  <select name="estado" id="estado">
    <option value="1">Mark P</option>
    <option value="2">Andy Y</option>
    <option value="3">Richard B</option>
  </select>
<input type="submit" name="action" value="Book" />
</form>
  */