<form>
  <input type="checkbox" id="pizza" name="pizza" value="yes">
  


<select id="select_1" name="tipo_carta">
 <option value="1">90gr</option>
 <option value="2">150gr</option>
 <option value="3" id="pizza">270gr</option>
</select>
  
  
  
  
  
  <label for="pizza">I would like to order a</label>
  <select id="pizza_kind" name="pizza_kind">
    <option>(choose one)</option>
    <option value="margaritha">Margaritha</option>
    <option value="hawai">Hawai</option>
  </select>
  pizza.
</form>








<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
  var update_pizza = function () {
    if ($("#pizza").is(":checked")) {
        $('#pizza_kind').prop('disabled', false);
    }
    else {
        $('#pizza_kind').prop('disabled', 'disabled');
    }
  };
  $(update_pizza);
  $("#pizza").change(update_pizza);
</script>