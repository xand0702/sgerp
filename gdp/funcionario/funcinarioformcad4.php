		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 





if(@$_SESSION['funcionario']['usuario'] == '' || 
@$_SESSION['funcionario']['pass'] == '' || 
@$_SESSION['funcionario']['n_acess'] == '' 
)
{
	$usuario = @$_POST['usuario'];
	$pass = @$_POST['pass'];
	$n_acess = @$_POST['n_acess'];
	$id = $_SESSION['funcionario']['cod_pf'];
	
	
	$_SESSION['funcionario']['usuario'] = $usuario;
	$_SESSION['funcionario']['pass'] = $pass;
	$_SESSION['funcionario']['n_acess'] = $n_acess;
		
}
else
{
	
$usuario = $_SESSION['funcionario']['usuario'];
$pass = $_SESSION['funcionario']['pass'];
$n_acess = $_SESSION['funcionario']['n_acess'];
$id = $_SESSION['funcionario']['cod_pf'];
	
}



$setor = $_SESSION['funcionario']['setor'];
$cargo = $_SESSION['funcionario']['cargo'];
$funcao = $_SESSION['funcionario']['funcao'];
$ct = $_SESSION['funcionario']['ct'];
$seriect = $_SESSION['funcionario']['seriect'];
$pis = $_SESSION['funcionario']['pis'];
$sal_car = $_SESSION['funcionario']['sal_car'];
$cbo = $_SESSION['funcionario']['cbo'];



$desc_cbo = $_SESSION['funcionario']['desc_cbo'];
$fgts = $_SESSION['funcionario']['fgts'];
$ex_med = $_SESSION['funcionario']['ex_med'];
$ex_aud = $_SESSION['funcionario']['ex_aud'];
$ex_epi = $_SESSION['funcionario']['ex_epi'];
$ex_adm = $_SESSION['funcionario']['ex_adm'];
$v_p_e = $_SESSION['funcionario']['v_p_e'];
$comissao = $_SESSION['funcionario']['comissao'];
$v_hora = $_SESSION['funcionario']['v_hora'];
$sal_fam = $_SESSION['funcionario']['sal_fam'];

$complemento = $_SESSION['funcionario']['complemento'];
$b_fer = $_SESSION['funcionario']['b_fer'];
$b_13 = $_SESSION['funcionario']['b_13'];
$entrada = $_SESSION['funcionario']['entrada'];
$h_alm = $_SESSION['funcionario']['h_alm'];
$h_alm_v = $_SESSION['funcionario']['h_alm_v'];
$saida = $_SESSION['funcionario']['saida'];
$carg_dia = $_SESSION['funcionario']['carg_dia'];
$carg_sem = $_SESSION['funcionario']['carg_sem'];
$dia_rep = $_SESSION['funcionario']['dia_rep'];

$hr_vaga = $_SESSION['funcionario']['hr_vaga'];
$sh_cat = $_SESSION['funcionario']['sh_cat'];
$cnh = $_SESSION['funcionario']['cnh'];
$cnh_venc = $_SESSION['funcionario']['cnh_venc'];
$cnh_cat = $_SESSION['funcionario']['cnh_cat'];
$tit = $_SESSION['funcionario']['tit'];
$tit_zona = $_SESSION['funcionario']['tit_zona'];
$tit_secao = $_SESSION['funcionario']['tit_secao'];
$conjuge = $_SESSION['funcionario']['conjuge'];
$ct_cas = $_SESSION['funcionario']['ct_cas'];

$filhos = $_SESSION['funcionario']['filhos'];
$escolaridade = $_SESSION['funcionario']['escolaridade'];
$apos = $_SESSION['funcionario']['apos'];
$def = $_SESSION['funcionario']['def'];
$def_desc = $_SESSION['funcionario']['def_desc'];
$n_camisa = $_SESSION['funcionario']['n_camisa'];
$n_calca = $_SESSION['funcionario']['n_calca'];
$n_calcado = $_SESSION['funcionario']['n_calcado'];
$obs = $_SESSION['funcionario']['obs'];




		function databr($data)
		{
			if($data == '')
			{
				echo '';
			}
			else
			{
				$dt = explode("-", $data);
				$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
				echo $dtimp;
			}
		}
		
		
if($usuario == '' || $pass == '' || $n_acess == '')
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="index.php?mod=gdp&bot=tes3&cad=3"</script>';
	
}	

?>






<article style="padding-bottom: 250%">	     








     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation"><a href="#">Passo 3</a></li>
    <li role="presentation" class="active"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		
				
		
<form enctype="multipart/form-data" name="proxmo" action="gdp/funcionario/funcinariocadastro.php" method="post">



		<fieldset>
		
		

<div class="label2"> 





<?php 
$sql = '



SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_CODIGO = '.$id.'


';






	foreach ($conn->query($sql) as $row) 
	{
?>

<table border=0 valign=top width=100%>
		<tr>
			<td align=center colspan=2>
			<h4>Dados da Pessoa Física</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
		
	<tr>
		<td class=tabinfo1><label>Nome: </label></td>
		<td class=tabinfo2><?php print $row['PEF_NOME']; ?></td>
	</tr>
	
	<tr>
		<td class=tabinfo1><label>Telefone: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_TELEFONE']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>CPF: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_CPF']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>Celular: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_CELULAR']; ?> </td>
	</tr>

	
	
	
</table>



</div>
<div class="label3">













<center> <a data-toggle="modal" data-target="#pessoafisicaimg<?php 	echo $row['PEF_ID'];?>"> 


<table class=tabimg><tr><td>		

<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['PEF_IMAGEM'] == '')
{
	if($row['PEF_SEXO'] == 1)
	{
		echo "masculino.jpg";
	}
	elseif($row['PEF_SEXO'] == 2)
	{
		echo "feminino.jpg";
	}
	elseif($row['PEF_SEXO'] == 3)
	{
		echo "outros.jpg";
	}
}
else
{
	echo $row['PEF_IMAGEM'];
}
?>">

</td></tr></table>


 </a></center>













</div>
<div class="label5"> 
<table border=0 valign=top width=100%>
	<tr>
		<td class=tabinfo1><label>Email: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_EMAIL']; ?> </td>
	</tr>
	<tr>
		<td class=tabinfo1><label>RG: </label></td>
		<td class=tabinfo2> <?php print $row['PEF_RG']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Orgão de Expedido: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ORGEX']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Data de expedição: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_EXPEDICAO']); ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Data de Nascimento: </label></td>
		<td width=50% class=tabinfo3> <?php databr($row['PEF_DATA_NASCIMENTO']);?> </td>
	</tr>
	<tr>
		<td width=50%><label>Nome da Mãe: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_MAE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Nome do Pai: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_PAI']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Sexo: </label></td>
		
		<?php 
		
		
		
$sexo = $row['PEF_SEXO'];
		
$sqlsexo = 'SELECT *
FROM sexo
WHERE SEX_ID = '.$sexo.'


';






	foreach ($conn->query($sqlsexo) as $rowsexo) 
	{
		
			$siglasexo = $rowsexo['SEX_NOME'];
		
	}	
		
if($siglasexo == 'F')
	$sexonome = "Feminino";
	elseif($siglasexo == 'M')
	{$sexonome = "Masculino";}
elseif(($siglasexo == 'O'))
	{$sexonome = "outros";}
		
		
		
		
		
		?>
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo $sexonome; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado Civil: </label></td>
		
		
		
		
		
<?php 
		
		
		
$estadocivil = $row['PEF_ESTADO_CIVIL'];
		
$sqlestadocivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.$estadocivil.'


';






	foreach ($conn->query($sqlestadocivil) as $rowestadocivil) 
	{
		
			$nomecestadocivil = $rowestadocivil['CIV_NOME'];
		
	}			
		
				
		
		
		
		
	?>	
		
		
		
		
		
		
		
		<td width=50% class=tabinfo3> <?php echo utf8_encode($nomecestadocivil); ?> </td>
	</tr>
	<tr>
		<td width=50%><label>CEP: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_CEP']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Endereço: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ENDERECO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Número: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_NUMERO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>Complemento: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_COMPLEMENTO']; ?> </td>
	</tr>
	
	
	<tr>
		<td width=50%><label>Bairro: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_BAIRRO']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Cidade: </label></td>		
		
		<td width=50% class=tabinfo3> <?php print $row['PEF_CIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Estado: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_ESTADO']; ?> </td>
	</tr>
	
	<tr>
		<td width=50%><label>País: </label></td>
<td width=50% class=tabinfo3> <?php print $row['PEF_PAIS']; ?> </td>
	</tr>

	<tr>
		<td width=50%><label>Nacionalidade: </label></td>
		<td width=50% class=tabinfo3> <?php print $row['PEF_NACIONALIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%><label>Naturalidade: </label></td>
		
		<td width=50% class=tabinfo3> <?php print $row['PEF_NATURALIDADE']; ?> </td>
	</tr>
	<tr>
		<td width=50%>&nbsp </td>
		
		<td width=50% class=tabinfo3>
		<a href="index.php?mod=gdp&bot=tes1&codpes=<?php echo $id;?>">Alterar</a>
		
		</td>
	</tr>	
	

	
	
	
</table>
<hr>

<table border=0 valign=top width=100%>

		<tr>
			<td align=center colspan=2>
			<h4>Dados do Funcinário</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>		
		
		<tr>
			<td width=50%>
			<label>Setor: </label>
			</td>
			<td align=left>
			<?php echo " ".$setor; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Cargo: </label>
			</td>
			<td align=left>
			<?php echo " ".$cargo; ?>
			</td>
		</tr>

		<tr>
			<td width=50%>
			<label>Função: </label>
			</td>
			<td align=left>
			<?php echo " ".$funcao; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Carteira de Trabalho: </label>
			</td>
			<td align=left>
			<?php echo " ".$ct; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>
			<label>Série: </label>
			</td>
			<td align=left>
			<?php echo " ".$seriect; ?>
			</td>
		</tr>
		
		<tr>
			<td width=50%>
			<label>PIS: </label>
			</td>
			<td align=left>
			<?php echo " ".$pis; ?>
			</td>
		</tr>
		
		<tr>
			<td width=50%>
			<label>Salário Carteira: </label>
			</td>
			<td align=left>
			<?php echo " ".$sal_car; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CBO: </label>
			</td>
			<td align=left>
			<?php echo " ".$cbo; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Descrição CBO: </label>
			</td>
			<td align=left>
			<?php echo " ".$desc_cbo; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>FGTS: </label>
			</td>
			<td align=left>
			<?php echo " ".$fgts; ?>
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Exame Médico: </label>
			</td>
			<td align=left>
			<?php databr($ex_med); ?>
			</td>
		</tr>

	
		<tr>
			<td align=right>
			<label>Exame Audiometria: </label>
			</td>
			<td align=left>
			<?php echo " ".$ex_aud; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Exame EPI: </label>
			</td>
			<td align=left>
			<?php echo " ".$ex_epi; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Exame Adminição: </label>
			</td>
			<td align=left>
			<?php echo " ".$ex_adm; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Primeira Experiência: </label>
			</td>
			<td align=left>
			<?php echo " ".$v_p_e; ?>
			</td>
		</tr>
		
		<tr>
			<td align=right>
			<label>Comissão: </label>
			</td>
			<td align=left>
			<?php echo " ".$comissao; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Valor por Hora: </label>
			</td>
			<td align=left>
			<?php echo " ".$v_hora; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Salário Família: </label>
			</td>
			<td align=left>
			<?php echo " ".$sal_fam; ?>
			</td>
		</tr>
		
		
		
		<tr>
			<td align=right>
			<label>Complemento Salárial: </label>
			</td>
			<td align=left>
			<?php echo " ".$complemento; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base Férias: </label>
			</td>
			<td align=left>
			<?php echo " ".$b_fer; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Base 13º: </label>
			</td>
			<td align=left>
			<?php echo " ".$b_13; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Horário de Entrada: </label>
			</td>
			<td align=left>
			<?php echo " ".$entrada; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário de Almoço: </label>
			</td>
			<td align=left>
			<?php echo " ".$h_alm; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário da volta Almoço: </label>
			</td>
			<td align=left>
			<?php echo " ".$h_alm_v; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Horário de Saída: </label>
			</td>
			<td align=left>
			<?php echo " ".$saida; ?>
			</td>
		</tr>		
		
		<tr>
			<td align=right>
			<label>Carga horária dia: </label>
			</td>
			<td align=left>
			<?php echo " ".$carg_dia; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Carga horária semanal: </label>
			</td>
			<td align=left>
			<?php echo " ".$carg_sem; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Dia de Repouso: </label>
			</td>
			<td align=left>
			<?php 
			if($dia_rep == '')
			{
				echo "Domíngo";
			}
			else
			{
				echo " ".$dia_rep;
			}
			?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Horários Vagos: </label>
			</td>
			<td align=left>
			<?php echo " ".$hr_vaga; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Senha catraca: </label>
			</td>
			<td align=left>
			<?php echo " ".$sh_cat; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH: </label>
			</td>
			<td align=left>
			<?php echo " ".$cnh; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>CNH Vencimento: </label>
			</td>
			<td align=left>
			<?php echo " ".$cnh_venc; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>CNH Categoria: </label>
			</td>
			<td align=left>
			<?php echo " ".$cnh_cat; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Título de Eleitor: </label>
			</td>
			<td align=left>
			<?php echo " ".$tit; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Zona: </label>
			</td>
			<td align=left>
			<?php echo " ".$tit_zona; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Tít. Seção: </label>
			</td>
			<td align=left>
			<?php echo " ".$tit_secao; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Cônjuge: </label>
			</td>
			<td align=left>
			<?php echo " ".$conjuge; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Certidão de Casamento: </label>
			</td>
			<td align=left>
			<?php echo " ".$ct_cas; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Filhos: </label>
			</td>
			<td align=left>
			<?php echo " ".$filhos; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Escolaridade: </label>
			</td>
			<td align=left>
			<?php echo " ".$escolaridade; ?>
			</td>
		</tr>
	
		<tr>
			<td align=right>
			<label>Aposentado: </label>
			</td>
			<td align=left><?php 
			if($apos == '' || $apos == 2)
			{
				echo " NÃO";
			}
			else
			{
				echo " SIM";
			}
			?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Deficiente: </label>
			</td>
			<td align=left><?php 
			if($apos == '' || $apos == 2)
			{
				echo " NÃO";
			}
			else
			{
				echo " SIM";
			}
			?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Descrição Deficiencia: </label>
			</td>
			<td align=left>
			<?php echo " ".$def_desc; ?>
			</td>
		</tr>

		<tr>
			<td align=right>
			<label>Nº Camisa: </label>
			</td>
			<td align=left>
			<?php echo " ".$n_camisa; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calça: </label>
			</td>
			<td align=left>
			<?php echo " ".$n_calca; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Nº Calçado: </label>
			</td>
			<td align=left>
			<?php echo " ".$n_calcado; ?>
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Observação: </label>
			</td>
			<td align=left>
			<?php echo " ".$obs; ?>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			
			<td width=50% class=tabinfo3>
			<a href="index.php?mod=gdp&bot=tes3&cad=2">Alterar</a>
			
			</td>
		</tr>		
		</table>
<hr>

<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Dados de Acesso</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		
		<tr>
			<td width=50%><label>Usuário: </label></td>
			<td width=50% class=tabinfo3>
				<?php echo " ".$usuario; ?>
			</td>
		</tr>
		<tr>
			<td width=50%><label>Senha: </label></td>
			<td width=50% class=tabinfo3>
				<?php echo " ".$pass; ?>
			</td>
		</tr>
		<tr>
			<td width=50%><label>Nível de Acesso: </label></td>
			<td width=50% class=tabinfo3>
				<?php 
				if($n_acess == 1)
					echo "Administrador";
				elseif($n_acess == 2)
					echo "Compras";
				elseif($n_acess == 3)
					echo "Estoque";
				elseif($n_acess == 4)
					echo "Vendas";
				elseif($n_acess == 5)
					echo "GDP";
				elseif($n_acess == 6)
					echo "Financeiro";
					?>
			</td>
		</tr>
		<tr>
			<td width=50%>&nbsp </td>
			
			<td width=50% class=tabinfo3>
			<a href="index.php?mod=gdp&bot=tes3&cad=3">Alterar</a>
			
			</td>
		</tr>		
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
	</table>


<div class="modal-footer">
        <button type="submit" class="btn btn-default">Concluir</button>
      </div>
	<?php 
	
	}
	
	?>

</div>
















<!-- Modal -->
  <div class="modal fade" id="pessoafisicaimg<?php 	echo $row['PEF_ID'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
	
	  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          
		  
		  
		  
		  
		  
	<center>	  
	
	
	<img class=perfilimg src="gdp/pessoafisica/img/<?php 
if($row['PEF_IMAGEM'] == '')
{
	if($row['PEF_SEXO'] == 1)
	{
		echo "masculino.jpg";
	}
	else
	{
		echo "feminino.jpg";
	}
}
else
{
	echo $row['PEF_IMAGEM'];
}
?>">

</center>

	
		</div>  
		  

		  
		  
		  
        
</div></div>
	


		
		
      </div>

	  	</form>			
		
		
	
	
	
	
	
</fieldset>
		
		
		
 
	  
</article>