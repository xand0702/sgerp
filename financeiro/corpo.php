<?php 


class classcorpo
{
	
	
	
	
	function moedaf($moeda)
		{
			if($moeda == null)
			{
				echo " - ";
			}
			else
			{
				$md = @number_format($moeda, 2, ',', ' ');
				$md = "R$".$md;
				echo $md;
			}
		}

	
	function corpo($titulo, $cadastro, $relatorio, $pag)
	{
		
		
		



	
		echo '
		
		



<article>





<table width=100%><tr><td>




<!--    titulo -->

<div class=titulo align=center>

'.$titulo.'


</div>

<table align=center width="100%" ><tr><td align=center>
<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#'.$cadastro.'">Cadastro</button>
</td>

<td align=center>
 <h4><b><font color="red">';
 echo classcorpo::moedaf($pag);
 
 echo '</font></b></h4>
</td>

<td align=center>
<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#'.$relatorio.'">Relatório</button>
</td></tr></table>

<!--    formularios -->

			
			
			
			
			
			
			
			
			
			
			<!--    formulario cadastro -->
			
			







<!--    formulario relatorio -->





















<!--    pesquisa -->





	
	
	
	
	
	
	
	
	<!--    tabela dados -->
	
	

	
	








	
	





</article>







		
		
		';
	}
	
	
}





?>