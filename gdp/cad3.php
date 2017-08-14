<?php


class classcad3
{
	function cad3($dir, $tes, $tit, $dados)
	{
echo '
<article style="padding-bottom: 150%">	     




     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation" class="active"><a href="#">Passo 3</a></li>
	<li role="presentation"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		

		
<form enctype="multipart/form-data" action="index.php?mod='.$dir.'&bot='.$tes.'&cad=4" method="post">



		<fieldset>
		

		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados do '.$tit.'</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		';
		
		
		$conta = count($dados);
		
		for($i=0; $i < $conta; $i++)
		{
			for($x=0; $x < $conta; $x++)
			{
				$cadt[$x] = $dados[$i][$x];
			}
			
		$y = 0;
		echo '
		<tr>
			<td align=right>
			<label>'.$cadt[$y].': </label>
			</td>
		';
		$y++;
		echo '
			<td align=left>
			<input type="'.$cadt[$y].'"
		';
		$y++;
		echo '
		name="'.$cadt[$y].'" 
		';
		$y++;
		echo '
		class="form-control" '.$cadt[$y].'>
			</td>
		</tr>
		';
			
		}
		
		
		echo '
		
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<textarea rows="4" cols="50" class="form-control" name="obs" placeholder="1024 caracteres"></textarea>
			</td>
		</tr>
		
		</table>
		
		
		<hr>
		<br><br>

		';
		
	}
}