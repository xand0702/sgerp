	<?php

require_once('raiz/arq/conecta2.php'); 

$codigopes = @$_POST['codpes'];
$nomepes = @$_POST['nompes'];
$cpfpes = @$_POST['cpfpes'];


/*
echo '*******'.$codigopes.'******';

echo '********'.$nomepes.'*****';

echo '*******'.$cpfpes.'******';
*/


if($codigopes == '' && $nomepes == '' && $cpfpes == '' )
{
	$tab = "SELECT *
FROM pessoa_fisica";
}
elseif($cpfpes == '' && $nomepes == '')
{
	$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_CODIGO LIKE '%".$codigopes."%'";
	
}
elseif($cpfpes == '' && $codigopes == '')
{
	$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_NOME LIKE '%".$nomepes."%'";
	
}
elseif( $codigopes == '' && $nomepes == '')
{

$tab = "SELECT *
FROM pessoa_fisica ps
WHERE ps.PEF_CPF LIKE '%".$cpfpes."%'";

}


?>



























	
	
	
	<div class=tabela align=center>
	
	
	
	
	<table border=1 width=100%>
	
	<tr>
	
	<td><b>Código</b></td>
	<td><b>Nome</b> </td>
	<td><b>Telefone</b> </td>
	<td><b>CPF </b></td>
	<td>&nbsp </td>
	<td>&nbsp </td>
	
	
	</tr>
	







<?php 




	foreach ($conn->query($tab) as $row) 
	{
$iddel = @$row['PEF_ID'];


?>	
	
	<tr onmouseover="linha_over(this)" onMouseOut="linha_out(this)">
	
	<td><?php echo @$row['PEF_CODIGO'];?> </td>
	<td><a href="index.php?mod=gdp&bot=tes1&info=<?php echo @$row['PEF_ID']; ?>"><?php echo @$row['PEF_NOME'];?></a></td>
	<td><?php echo @$row['PEF_TELEFONE'];?></td>
	<td><?php echo @$row['PEF_CPF'];?></td>
	<td><a data-toggle="modal" data-target="#pessoafisicaalt<?php echo @$row['PEF_ID']; ?>">









  
  
  
  
  
  
  
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<!-- Modal -->
  <div class="modal fade" id="pessoafisicaalt<?php echo @$row['PEF_ID']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar Pessoa Fisica</h4>
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
		  

<form action="gdp/pessoafisica/pessoafisicaalt.php" method="post">

<input type="hidden" value="<?php echo @$row['PEF_ID']; ?>" name="id">

		<fieldset>
		
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=right>
			<label>Nome: </label>
			</td>
			<td align=left>
			<input type="text" name="nome" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_NOME'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Telefone: </label>
			</td>
			<td>
			<input type="number" name="telefone" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_TELEFONE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CPF: </label>
			</td>
			<td>
			<input type="number" name="cpf" class="form-control" placeholder="Preenchimento Obrigatório" value="<?php echo @$row['PEF_CPF'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Celular: </label>
			</td>
			<td>
			<input type="number" name="celular" class="form-control" value="<?php echo @$row['PEF_CELULAR'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Email: </label>
			</td>
			<td>
			<input type="text" name="email" class="form-control" value="<?php echo @$row['PEF_EMAIL'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>RG: </label>
			</td>
			<td>
			<input type="number" name="rg" class="form-control" value="<?php echo @$row['PEF_RG'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Orgão Expedidor: </label>
			</td>
			<td>
			<input type="text" name="oe" class="form-control" value="<?php echo @$row['PEF_ORGEX'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Data de Expedição: </label>
			</td>
			<td>
			<input type="date" name="dt_exp" class="form-control" value="<?php echo @$row['PEF_DATA_EXPEDICAO'];?>">
			</td>
		</tr>
		
		<tr>
			<td>
			<label align=right>Data de Nascimento: </label>
			</td>
			<td>
			<input type="date" name="dn" class="form-control" value="<?php echo @$row['PEF_DATA_NASCIMENTO'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome da Mãe: </label>
			</td>
			<td>
			<input type="text" name="nmae" class="form-control" value="<?php echo @$row['PEF_MAE'];?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nome do Pai: </label>
			</td>
			<td>
			<input type="text" name="npai" class="form-control" value="<?php echo @$row['PEF_PAI'];?>">
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




	foreach($conn->query($t) as $rows)
	{ 

if($row['PEF_SEXO'] == $rows['id'])
	$fixa = "selected";
else
	$fixa = "";
	
if($rows['sexo'] == "F")
	{$option = "Feminino";}
elseif(($rows['sexo'] == "M"))
	{$option = "Masculino";}	
	
  echo '<option '.$fixa.' data-tokens="'.utf8_encode($rows['id']).'" value="'.utf8_encode($rows['id']).'"> '.utf8_encode($option).'  </option>'; 
  
  
  

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
			<input type="text" name="endereco" id="password" class="form-control" value="<?php echo @$row['PEF_ENDERECO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Número: </label>
			</td>
			<td>
			<input type="number" name="numero" id="password" class="form-control" value="<?php echo @$row['PEF_NUMERO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Complemento: </label>
			</td>
			<td>
			<input type="text" name="complemento" class="form-control" value="<?php echo @$row['PEF_COMPLEMENTO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label for="password">Bairro: </label>
			</td>
			<td>
			<input type="text" name="bairro" class="form-control" value="<?php echo @$row['PEF_BAIRRO']; ?>">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CEP: </label>
			</td>
			<td>
			<input type="number" name="cep"  class="form-control" value="<?php echo @$row['PEF_CEP']; ?>">
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
WHERE PAS_ID = ".$row['PEF_PAIS']."


";

	foreach($conn->query($tt4) as $rowp)
	{



	
		echo '<option value="'.utf8_encode($rowp['id']).'"> '.utf8_encode($rowp['pais']).'  </option>'; 

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
WHERE EST_ID = ".$row['PEF_ESTADO']."



";




	foreach($conn->query($tt3) as $rowe)
	{



	
		echo '<option value="'.utf8_encode($rowe['id']).'"> '.utf8_encode($rowe['estado']).'  </option>'; 

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
WHERE CID_ID = ".$row['PEF_CIDADE']."

";




	foreach($conn->query($tt) as $rowc)
	{



	
		echo '<option value="'.utf8_encode($rowc['id']).'"> '.utf8_encode($rowc['nome']).'  </option>'; 

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
WHERE PAS_ID = ".$row['PEF_NACIONALIDADE']."

";



	foreach($conn->query($tt4) as $rownc)
	{



	
		echo '<option value="'.utf8_encode($rownc['id']).'"> '.utf8_encode($rownc['pais']).'  </option>'; 

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
WHERE CID_ID = ".$row['PEF_NATURALIDADE']."
";



	foreach($conn->query($tt) as $rownt)
	{



	
		echo '<option value="'.utf8_encode($rownt['id']).'"> '.utf8_encode($rownt['nome']).'  </option>'; 

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
WHERE CIV_ID = ".$row['PEF_ESTADO_CIVIL']."



";




	foreach($conn->query($tt5) as $rowec)
	{
		echo '<option value="'.utf8_encode($rowec['id']).'"> '.utf8_encode($rowec['civil']).'  </option>'; 
	}



?>			
	

 </select>		
			
			
			
			</td>
		</tr>

		<tr>
			<td colspan=2 align=left>
				<label for="password">Histórico:</label>
			</td>
		</tr>
		<tr>			
			<td colspan=2>	
			<textarea rows="4" cols="50" class="form-control" name="historico" placeholder="1024 caracteres"><?php echo @$row['PEF_MOTIVO']; ?></textarea>
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
  </div>
	
	
	
	
	
	</td>
	 
	<td><a href="index.php?mod=gdp&bot=tes1&del=<?php echo @$iddel; ?>">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
	
	
	</tr>
	
	
	
<?php

	}
?>
	
	

	
	

	
	
	
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	</article>