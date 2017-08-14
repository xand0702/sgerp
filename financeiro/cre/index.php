

<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];
$cad = @$_REQUEST["cad"];
$altn = @$_REQUEST["altn"];



$sqlr = "
SELECT SUM(vp.VNG_VL_PAR) areceber
FROM vendas v, 
venpgmt vp 
WHERE v.VEN_ID = vp.VNG_VEN_ID
AND vp.VNG_PAGO = 'NÃO'";



try 	
	{
$query = $conn->prepare($sqlr);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$areceber = $query->areceber;	

		
	}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }





if($info != '')
{
require_once('creinfo.php'); 
	
}
else if($del != '')
{
require_once('credel.php'); 
	
}
else if($altn != '')
{
require_once('crealtn.php'); 
	
}
else if($alt != '')
{
require_once('crealt.php'); 
	
}
else if($cad == 1)
{
require_once('creformcad1.php'); 
	
}
else if($cad == 2)
{
require_once('creformcad2.php'); 
	
}
else if($cad == 3)
{
require_once('creformcad3.php'); 
	
}
else if($cad == 4)
{
require_once('creformcad4.php'); 
	
}
else if($cad == 5)
{
require_once('creformcad5.php'); 
	
}

else
{
require('financeiro/corpo.php');


			



	function moeda($moeda)
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



?>




<article>









<!--    titulo -->

<div class=titulo align=center>

Contas a Receber


</div>

<table align=center width="100%" >
	<tr>
		<td align=center>
		 <h4><b><font color="blue"><?php echo moeda($areceber); ?></font></b></h4>
		</td>
		<td align=center>
			<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#crerels">Relatório</button>
		</td>
	</tr>
</table>

<!--    formularios -->

			
			

	
	































<?php


//formulario relatorio

require_once('creformrel.php'); 


//formulario cadastro





//pesquisa

require_once('crepesquisa.php'); 


echo "<br>";
echo "<br>";
echo "<br>";
	

	//tabela



require_once('cretabela.php'); 



}

?>


</article>