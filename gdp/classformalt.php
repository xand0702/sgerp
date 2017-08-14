<?php 


class classformalt



{
	
	

function formalt($sig, $dir, $tes, $subdir, $titulo, $colunaalt)
{
	
	
	$fp = fopen("gdp/tmp/formalt.php", "w+");


$escrever = '
		<!-- Modal -->
  <div class="modal fade" id="'.$subdir.'alt<?php echo @$row[\'id\']; ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar '.$titulo.'</h4>
        </div>
        <div class="modal-body">








<form action="'.$dir.'/'.$subdir.'/'.$subdir.'alt.php" method="post">

<input type="hidden" value="<?php echo @$row[\'id\']; ?>" name="id">

		<fieldset>

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" value="<?php echo @$row[\'nome\'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF/CNPJ: </label>
			</td>
			<td align=left>
			<input type="text" name="cpf" class="form-control" value="<?php echo @$row[\'doc\'];?>" disabled>
			</td>
		</tr>
		<tr>
			<td align=right>
			&nbsp
			</td>
			<td align=left>
			<a href="index.php?mod='.$dir.'&bot=tes<?php
			if($row[\'pessoa\'] == \'pf\')
				echo "1&codpes=".@$row[\'cod_p\'];
			elseif($row[\'pessoa\'] == \'pj\')
				echo "2&codpj=".@$row[\'cod_p\'];
			?>">Alterar</a>

			</td>
		</tr>
</table>
<hr>		
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
$escrever .= "value=\"<?php echo @\$row['$sig$cadt[$y]'];?>\">
			</td>
		</tr>
		
		";
}

		
		$escrever .= '
		
		
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"><?php echo @$row[\''.$sig.'OBSERVACAO\'];?></textarea>
			</td>
		</tr>
		



		
		
			

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