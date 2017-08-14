<?php 

require_once('raiz/arq/conecta2.php'); 

$id = $_REQUEST['info'];





?>	




<article>





<div class="label4"> Informação Pessoa Física </div>



<?php 
$sql = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_ID = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{


?>	


<table border=1 align=center>
	<tr>
		<td></td>
		<td><label class="tablabelinfo">Nome: </label></td>
		<td><?php print $row['PEF_NOME']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td class="tablabelinfo"><label>Telefone: </label></td>
		<td><?php print $row['PEF_TELEFONE']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td class="tablabelinfo"><label>CPF: </label></td>
		<td><?php print $row['PEF_CPF']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Celular: </label></td>
		<td><?php print $row['PEF_EMAIL']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Email: </label></td>
		<td><?php print $row['PEF_RG']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>RG: </label></td>
		<td><?php print $row['PEF_ORGEX']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Orgão de Expedido: </label></td>
		<td><?php print $row['PEF_DATA_NASCIMENTO']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Data de Nascimento: </label></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Nome da Mãe: </label></td>
		<td><?php print $row['PEF_MAE']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Nome do Pai: </label></td>
		<td><?php print $row['PEF_PAI']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Sexo: </label></td>
		<td><?php print $row['PEF_SEXO']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Endereço: </label></td>
		<td><?php print $row['PEF_ENDERECO']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Bairro: </label></td>
		<td><?php print $row['PEF_BAIRRO']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>CEP: </label></td>
		<td><?php print $row['PEF_CEP']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>País: </label></td>
		<td><?php print $row['PEF_PAIS']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Estado: </label></td>
		<td><?php print $row['PEF_ESTADO']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Cidade: </label></td>
		<td><?php print $row['PEF_CIDADE']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Nacionalidade: </label></td>
		<td><?php print $row['PEF_NACIONALIDADE']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Naturalidade: </label></td>
		<td><?php print $row['PEF_NATURALIDADE']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Estado Civil: </label></td>
		<td><?php print $row['PEF_ESTADO_CIVIL']; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><label>Histórico: </label></td>
		<td><?php print $row['PEF_MOTIVO']; ?></td>
	</tr>


<?php

	}
?>






</article>

