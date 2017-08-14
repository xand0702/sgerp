<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>val demo</title>
  <style>
  p {
    color: red;
    margin: 4px;
  }
  b {
    color: blue;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p></p>
 
<select id="single">
  <option value="0">Single</option>
  <option value="1">Single2</option>
</select>


<select id="single2">
  <option value="0">Single</option>
  <option value="0">Single2</option>
</select>




 

 
<script>
function displayVals() {
  var singleValues = $( "#single" ).val();
  // When using jQuery 3:
  // var multipleValues = $( "#multiple" ).val();
  if(singleValues == 1 )
  {
	  $("#single2").prop("disabled", true);
  }
  else
  {
	  $("#single2").prop("disabled", false);
  }
  
}
 
$( "select" ).change( displayVals );
displayVals();
</script>
 
</body>
</html>