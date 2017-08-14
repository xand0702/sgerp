<?php

require_once('raiz/arq/conecta2.php'); 


$info = @$_REQUEST["info"];
$del = @$_REQUEST["del"];
$alt = @$_REQUEST["alt"];





if($info != '')
{
require_once('pessoafisicainfo.php'); 
	
}
else if($del != '')
{
require_once('pessoafisicadel.php'); 
	
}
else if($alt != '')
{
require_once('paisalt.php'); 
	
}

else
{
require('gdp/corpo.php');



			








$cliente = new classcorpo();
$cliente->corpo('Países','paiscad','paisrels','pais','pais','paispesquisa.php');
?>


<!--   formulario cadastro pessoa fisica  -->
			
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="paiscad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro País.</h4>
      </div>
      <div class="modal-body">
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<form enctype="multipart/form-data" action="gdp/pessoafisica/pessoafisicacadastro.php" method="post">



		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone: </label>
			</td>
			<td>
			<input type="number" name="telefone" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF: </label>
			</td>
			<td>
			<input type="number" name="cpf" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Celular: </label>
			</td>
			<td>
			<input type="number" name="celular" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Email: </label>
			</td>
			<td>
			<input type="text" name="email" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>RG: </label>
			</td>
			<td>
			<input type="number" name="rg" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Orgão Expedidor: </label>
			</td>
			<td>
			<input type="text" name="oe" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data da Expedição: </label>
			</td>
			<td>
			<input type="date" name="dt_exp" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td>
			<label align=right>Data de Nascimento: </label>
			</td>
			<td>
			<input type="date" name="dn" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome da Mãe: </label>
			</td>
			<td>
			<input type="text" name="nmae" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome do Pai: </label>
			</td>
			<td>
			<input type="text" name="npai" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			
			
			
			
			
			<label>Sexo: </label>



			</td>
			<td>


			



<select class="selectpicker" data-live-search="true" name="sexo">
  




<?php



$t = "

SELECT s.SEX_NOME sexo, s.SEX_ID id
FROM sexo s

";

	foreach($conn->query($t) as $row)
	{


  if($row['sexo'] == "F")
  {$option = "Feminino";}
	else
	{$option = "Masculino";}	
	
  echo '<option data-tokens="'.utf8_encode($row['id']).'" value="'.utf8_encode($row['id']).'"> '.utf8_encode($option).'  </option>'; 
  
  
  

	}


 



?>			
	

 </select>






		
			
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Endereço: </label>
			</td>
			<td>
			<input type="text" name="endereco" id="password" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Número: </label>
			</td>
			<td>
			<input type="number" name="numero" id="password" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Complemento: </label>
			</td>
			<td>
			<input type="text" name="complemento" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Bairro: </label>
			</td>
			<td>
			<input type="text" name="bairro" class="form-control">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CEP: </label>
			</td>
			<td>
			<input type="number" name="cep"  class="form-control">
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label for="password">País: </label>
			</td>
			<td>
			
<select class="selectpicker" data-live-search="true" name="pais">




<?php



$tt4 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p


";

	foreach($conn->query($tt4) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['pais']).'  </option>'; 

	}



?>			
	

 </select><a> Cadastro</a>		
			
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label for="password">Estado: </label>
			</td>
			<td>
			
<select class="selectpicker" data-live-search="true" name="estado">




<?php



$tt3 = "

SELECT e.EST_NOME estado, e.EST_ID id
FROM estado e



";




	foreach($conn->query($tt3) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['estado']).'  </option>'; 

	}


?>			
	

 </select><a> Cadastro</a>
			
			
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			
			
			
			<label for="password">Cidade: </label>
			</td>
			<td>

<select class="selectpicker" data-live-search="true" name="cidade">



<?php



$tt = "

SELECT c.CID_NOME nome, c.CID_ID id
FROM cidade c

";




	foreach($conn->query($tt) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['nome']).'  </option>'; 

	}



?>			
	

 </select><a> Cadastro</a>
 
			</td>
		</tr>
		
		
		
		
		
		
		
		
		
		
		
		
		<tr>
			<td align=right>
			<label for="password">Nacionalidade: </label>
			</td>
			<td>
			
			
<select class="selectpicker" data-live-search="true" name="nacionalidade">



<?php



$tt4 = "

SELECT p.PAS_NOME pais, P.PAS_ID id
FROM pais p

";



	foreach($conn->query($tt4) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['pais']).'  </option>'; 

	}



?>			
	

 </select>		
			
			</td>
		</tr>
		
		
		
		
		
		<tr>
			<td align=right>
			<label for="password">Naturalidade: </label>
			</td>
			<td>
			
	<select class="selectpicker" data-live-search="true" name="naturalidade">



<?php



$tt = "

SELECT c.CID_NOME nome, c.CID_ID id
FROM cidade c
";



	foreach($conn->query($tt) as $row)
	{



	
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['nome']).'  </option>'; 

	}


?>			
	

 </select>
			
			</td>
		</tr>
		
		
		<tr>
			<td align=right>
			<label for="password">Estado Civil:</label>
			</td>
			<td>
			
<select class="selectpicker" data-live-search="true" name="ecivil">




<?php



$tt5 = "

SELECT c.CIV_NOME civil, C.CIV_ID id
FROM civil c



";




	foreach($conn->query($tt5) as $row)
	{
		echo '<option value="'.utf8_encode($row['id']).'"> '.utf8_encode($row['civil']).'  </option>'; 
	}



?>			
	

 </select>		
			
			
			
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Foto: </label>
			</td>
			<td>
			<label class="btn btn-default btn-file">
				Carregar... <input type="file" name="file">
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=2 align=left>
				<label for="password">Histórico:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"></textarea>
		</td>
		</tr>	

	</table>
</fieldset>
		
		
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
	  	</form>	
    </div>

  </div>
</div>			




<!--pesquisa-->



<?php


require_once('pessoafisicapesquisa.php'); 


	

	//tabela



require_once('pessoafisicatabela.php'); 



}

?>