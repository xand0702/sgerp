<?php 


class classformalt



{
	
	

function formalt($dir, $tes, $subdir, $titulo, $colunaalt)
{
	
	
	$fp = fopen("financeiro/cre/tmp/formalt.php", "w+");


$escrever = '



		<!-- Modal -->
  <div class="modal fade" id="'.$subdir.'alt<?php echo @$row[\'idpar\']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar '.$titulo.'</h4>
        </div>
        <div class="modal-body">








<form action="'.$dir.'/'.$subdir.'/'.$subdir.'alt.php" method="post">

<input type="hidden" value="<?php echo @$row[\'idpar\']; ?>" name="id">


		<fieldset>

			
<table align=center border=0 cellspacing=5 cellpadding=5>		
		
';



$conta = count($colunaalt);


for($i = 0; $i < $conta; $i++)
{
	$cont = count($colunaalt[0]);
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $colunaalt[$i][$x];
	}
	$y=0;


$escrever .= "
		
		<tr>
			<td align=right>
			<label>$cadt[$y]:

";
$y++;
$escrever .= "			: </label>
			</td>
			<td align=left>
			<input type=\"$cadt[$y]\" ";
$y++;
$escrever .= "name=\"$cadt[$y]\" 
			
";
$y++;
$escrever .= "class=\"form-control\" $cadt[$y] 
";
$y++;
$escrever .= "value=\"<?php echo @\$row['$cadt[$y]'];?>\">
			</td>
		</tr>
		
		";
}

		
		$escrever .= '
		
		
				
		
			

	</table>
		</fieldset>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Alterar</button>
      </div>
	  	</form>






        </div>
      </div>




    </div>
	
';



	$escreve = fwrite($fp, $escrever);
fclose($fp);
} //fim função
}	//fim class
?>	