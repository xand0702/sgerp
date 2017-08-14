<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>selected demo</title>
  <style>
  div {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<select name="garden">
  <option>Flowers</option>
  <option id="um">disable</option>
  <option id="tres">enable</option>
  <option>Bushes</option>
  <option>Grass</option>
  <option>Dirt</option>
</select>


<br><br><br>

<select name="teste" id="dois">
  <option>Flowers</option>
  <option>Shrubs</option>
  <option>Trees</option>
  <option>Bushes</option>
  <option>Grass</option>
  <option>Dirt</option>
</select>




<div></div>
 
 
<script type="text/javascript" charset="utf-8">
$( "#um  option:selected" )
  .select(function() {

  $("#dois").prop("disabled", true);
  }).trigger("select");
$( "#tres" )
  .select(function() {

  $("#dois").prop("disabled", false);
  }).trigger("select");
  
  

   
</script>
 
</body>
</html>
