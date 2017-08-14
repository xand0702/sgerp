<div class="row">
    <div class="col-sm-12">
      <div class="form-group form-group-default form-group-default-select2 required">
        <label class="">State</label>
        <select id="state" class="full-width" data-init-plugin="select2" name="state">
            <option select="selected"></option>

 <option value="1">90gr</option>
 <option value="2">150gr</option>
 <option value="3">270gr</option>

        </select>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
      <div class="form-group form-group-default form-group-default-select2 required">
        <label>City</label>
        <select id="city" class="full-width" data-init-plugin="select2" name="city" disabled>
		
		 <option value="1">90gr</option>
 <option value="2">150gr</option>
 <option value="3">270gr</option>
		
		
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group form-group-default form-group-default-select2 required">
        <label>Area</label>
        <select id="area" class="full-width" data-init-plugin="select2" name="area" disabled>
		
		 <option value="1">90gr</option>
 <option value="2">150gr</option>
 <option value="3">270gr</option>
		
		
        </select>
      </div>
    </div>
</div>


<script>
    $(function() {


        $("#state").change(function() {
			$("#area").prop("disabled", false);
            $("#area").prop("disabled", false);
            

        });

        $("#city").change(function() {
            $("#area").html("");
            $("#s2id_area").find("#select2-chosen-3").html("");
            var city = $("#city").val();

            $.ajax({
                url: "controller/ctrl.getcityarea.php?req=area&val="+city,
                dataType: "JSON",
                success: function(json){

                    var area = "";
                    $.each(json.rajaongkir.results, function(i,o){
                        area += "<option value="+o.subdistrict_id+">"+o.subdistrict_name+"</option>";
                    });

                    $("#area").append(area);

                    event.preventDefault();
                    $("#area").prop("disabled", false);
                }
            });
        });

        $("#area").change(function() {
            event.preventDefault();
            $("#flogin-submit").prop("disabled", false);
        });
    })
</script>