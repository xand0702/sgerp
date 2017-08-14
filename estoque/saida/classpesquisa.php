<?php 



class classpesquisa



{
	
	

function pesquisa($dir, $tes, $titulo, $div)
{


echo '		
<div class=pesquisa1 align=right>



';

$conta = count($titulo);


for($i = 0; $i < $conta; $i++)
{

echo $titulo[$i].' <br>

';

}

echo '
</div>



<div class=pesquisa2 align=left>



<form action="index.php?mod='.$dir.'&bot='.$tes.'" method="post">

';



$conta = count($div);


for($i = 0; $i < $conta; $i++)
{
	$cont = count($div[0]);
	
	for($x=0; $x < $cont; $x++)
	{
		$cadt[$x] = $div[$i][$x];
	}	
	$y = 0;
	

echo '<div class="input-group">
	<input type="'.$cadt[$y].'" class="form-control"'; 
$y++;	
echo ' name="'.$cadt[$y].'" ';
$y++;
echo 'placeholder="'.$cadt[$y].'">
		<span class="input-group-btn">
			<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
		</span>
</div>';
	

}

echo '

          


</form>

</div>	


</td></tr></table>
<br><br>
	';
	

} //fim função
} //fim classe
	?>
	
	
	
	