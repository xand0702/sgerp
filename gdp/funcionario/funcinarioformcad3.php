		<?php 

require_once('raiz/arq/conecta2.php'); 

require_once('raiz/arq/funcoes.php'); 





if($_SESSION['funcionario']['cod_pf'] == '' || 
@$_SESSION['funcionario']['setor'] == '' || 
$_SESSION['funcionario']['cargo'] == '' || 
$_SESSION['funcionario']['funcao'] == '' || 
$_SESSION['funcionario']['ct'] == '' || 
$_SESSION['funcionario']['seriect'] == '' || 
$_SESSION['funcionario']['pis'] == '' || 
$_SESSION['funcionario']['sal_car'] == '' || 
$_SESSION['funcionario']['cbo'] == '' 
)
{
	$setor = @$_POST['setor'];
	$cargo = @$_POST['cargo'];
	$funcao = @$_POST['funcao'];
	$ct = @$_POST['ct'];
	$seriect = @$_POST['seriect'];
	$pis = @$_POST['pis'];
	$sal_car = @$_POST['sal_car'];
	$cbo = @$_POST['cbo'];	
	$id = $_SESSION['funcionario']['cod_pf'];
	
	
	$_SESSION['funcionario']['setor'] = $setor;
	$_SESSION['funcionario']['cargo'] = $cargo;
	$_SESSION['funcionario']['funcao'] = $funcao;
	$_SESSION['funcionario']['ct'] = $ct;
	$_SESSION['funcionario']['seriect'] = $seriect;
	$_SESSION['funcionario']['pis'] = $pis;
	$_SESSION['funcionario']['sal_car'] = $sal_car;
	$_SESSION['funcionario']['cbo'] = $cbo;
		
}
else
{
	
$setor = $_SESSION['funcionario']['setor'];
$cargo = $_SESSION['funcionario']['cargo'];
$funcao = $_SESSION['funcionario']['funcao'];
$ct = $_SESSION['funcionario']['ct'];
$seriect = $_SESSION['funcionario']['seriect'];
$pis = $_SESSION['funcionario']['pis'];
$sal_car = $_SESSION['funcionario']['sal_car'];
$cbo = $_SESSION['funcionario']['cbo'];
$id = $_SESSION['funcionario']['cod_pf'];
	
}


$desc_cbo = @$_POST['desc_cbo'];
$fgts = @$_POST['fgts'];
$ex_med = @$_POST['ex_med'];
$ex_aud = @$_POST['ex_aud'];
$ex_epi = @$_POST['ex_epi'];
$ex_adm = @$_POST['ex_adm'];
$v_p_e = @$_POST['v_p_e'];
$comissao = @$_POST['comissao'];
$v_hora = @$_POST['v_hora'];
$sal_fam = @$_POST['sal_fam'];

$complemento = @$_POST['complemento'];
$b_fer = @$_POST['b_fer'];
$b_13 = @$_POST['b_13'];
$entrada = @$_POST['entrada'];
$h_alm = @$_POST['h_alm'];
$h_alm_v = @$_POST['h_alm_v'];
$saida = @$_POST['saida'];
$carg_dia = @$_POST['carg_dia'];
$carg_sem = @$_POST['carg_sem'];
$dia_rep = @$_POST['dia_rep'];

$hr_vaga = @$_POST['hr_vaga'];
$sh_cat = @$_POST['sh_cat'];
$cnh = @$_POST['cnh'];
$cnh_venc = @$_POST['cnh_venc'];
$cnh_cat = @$_POST['cnh_cat'];
$tit = @$_POST['tit'];
$tit_zona = @$_POST['tit_zona'];
$tit_secao = @$_POST['tit_secao'];
$conjuge = @$_POST['conjuge'];
$ct_cas = @$_POST['ct_cas'];

$filhos = @$_POST['filhos'];
$escolaridade = @$_POST['escolaridade'];
$apos = @$_POST['apos'];
$def = @$_POST['def'];
$def_desc = @$_POST['def_desc'];
$n_camisa = @$_POST['n_camisa'];
$n_calca = @$_POST['n_calca'];
$n_calcado = @$_POST['n_calcado'];
$obs = @$_POST['obs'];






$_SESSION['funcionario']['desc_cbo'] = $desc_cbo;
$_SESSION['funcionario']['fgts'] = $fgts;
$_SESSION['funcionario']['ex_med'] = $ex_med;
$_SESSION['funcionario']['ex_aud'] = $ex_aud;
$_SESSION['funcionario']['ex_epi'] = $ex_epi;
$_SESSION['funcionario']['ex_adm'] = $ex_adm;
$_SESSION['funcionario']['v_p_e'] = $v_p_e;
$_SESSION['funcionario']['comissao'] = $comissao;
$_SESSION['funcionario']['v_hora'] = $v_hora;
$_SESSION['funcionario']['sal_fam'] = $sal_fam;

$_SESSION['funcionario']['complemento'] = $complemento;
$_SESSION['funcionario']['b_fer'] = $b_fer;
$_SESSION['funcionario']['b_13'] = $b_13;
$_SESSION['funcionario']['entrada'] = $entrada;
$_SESSION['funcionario']['h_alm'] = $h_alm;
$_SESSION['funcionario']['h_alm_v'] = $h_alm_v;
$_SESSION['funcionario']['saida'] = $saida;
$_SESSION['funcionario']['carg_dia'] = $carg_dia;
$_SESSION['funcionario']['carg_sem'] = $carg_sem;
$_SESSION['funcionario']['dia_rep'] = $dia_rep;

$_SESSION['funcionario']['hr_vaga'] = $hr_vaga;
$_SESSION['funcionario']['sh_cat'] = $sh_cat;
$_SESSION['funcionario']['cnh'] = $cnh;
$_SESSION['funcionario']['cnh_venc'] = $cnh_venc;
$_SESSION['funcionario']['cnh_cat'] = $cnh_cat;
$_SESSION['funcionario']['tit'] = $tit;
$_SESSION['funcionario']['tit_zona'] = $tit_zona;
$_SESSION['funcionario']['tit_secao'] = $tit_secao;
$_SESSION['funcionario']['conjuge'] = $conjuge;
$_SESSION['funcionario']['ct_cas'] = $ct_cas;

$_SESSION['funcionario']['filhos'] = $filhos;
$_SESSION['funcionario']['escolaridade'] = $escolaridade;
$_SESSION['funcionario']['apos'] = $apos;
$_SESSION['funcionario']['def'] = $def;
$_SESSION['funcionario']['def_desc'] = $def_desc;
$_SESSION['funcionario']['n_camisa'] = $n_camisa;
$_SESSION['funcionario']['n_calca'] = $n_calca;
$_SESSION['funcionario']['n_calcado'] = $n_calcado;
$_SESSION['funcionario']['obs'] = $obs;




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
		
		
if($setor == '' || $cargo == '' || $funcao == '' || $ct == '' || $seriect == '' || $pis == '' || $sal_car == '' || $cbo == ''  )
{
		ok('Campos obrigatórios não preenchido');
		echo '<script>window.location="index.php?mod=gdp&bot=tes3&cad=2"</script>';
	
}	

?>






<article style="padding-bottom: 200%">	     








     <div align="center" class="modal-header">
        
<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="#">Passo 1</a></li>
    <li role="presentation"><a href="#">Passo 2</a></li>
    <li role="presentation" class="active"><a href="#">Passo 3</a></li>
    <li role="presentation"><a href="#">Passo 4</a></li>
</ul>		
		
      </div>		
				
		
<form enctype="multipart/form-data" name="proxmo" action="index.php?mod=gdp&bot=tes3&cad=4" method="post">



		<fieldset>
		<table align=center border=0 cellspacing=5 cellpadding=5>
		<tr>
			<td align=center colspan=2>
			<h4>Insira os dados de Acesso</h4>
			</td>
			
		</tr>
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
		
		<tr>
			<td align=right>
			<label>Usuario: </label>
			</td>
			<td align=left>
			<input type="text" name="usuario" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td align=right>
			<label>Senha: </label>
			</td>
			<td align=left>
			<input type="password" name="pass" class="form-control" placeholder="Preenchimento Obrigatório">
			</td>
		</tr>
		<tr>
			<td class=tabinfo1><label>Nivel de Acesso: </label></td>
			<td class=tabinfo2>
			<select class="selectpicker" data-live-search="true" name="n_acess">
			<option value=1>Administrador</option>
			<option value=2>Compras</option>
			<option value=3>Estoque</option>
			<option value=4>Vendas</option>
			<option value=5>GDP</option>
			<option value=6>Financeiro</option>
			
			</select>
			</td>
		</tr>		
		<tr>
			<td align=center colspan=2>
			&nbsp
			</td>
			
		</tr>
	</table>
<hr>	
		

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



<div class="modal-footer">
        <button type="submit" class="btn btn-default">Próximo</button>
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