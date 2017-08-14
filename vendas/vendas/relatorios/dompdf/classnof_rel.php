<?php

class classnof_rel
{
	
	

function nofrel()
{




require_once('../../../../raiz/arq/conecta2.php'); 


$id = $_REQUEST['id'];




$sql_cab = "	SELECT *
FROM vendas v
WHERE v.VEN_ID =".$id." 
";

	foreach ($conn->query($sql_cab) as $row_cab) 
	{
$serie = 1;
$dtemissao = $row_cab['VEN_DATA_CADASTRO'];
$codven = $row_cab['VEN_CODIGO'];

$frete_transp = $row_cab['VEN_TRANSP'];
$hremissao = $row_cab['VEN_HORA_CADASTRO'];
$bcicms = $row_cab['VEN_VL_GASTO'];
$vlnota = $row_cab['VEN_VL_GASTO'];
$icms = $vlnota * 0.18;
$ipi = $vlnota * 0.03;
$isento = 'NÃO'; 
$vlisento = 0; 
$bcipi = $row_cab['VEN_VL_GASTO']; 	

$dtemissao = date('d/m/Y', strtotime($dtemissao));
$hremissao = date('H:i:s', strtotime($hremissao));

$bcicms =  str_replace(".",",",$bcicms);
$bcipi =  str_replace(".",",",$bcipi);
$vlnota =  str_replace(".",",",$vlnota);



$serie = number_format($serie, 0 , ',', '.');
$icms = number_format($icms, 2 , ',', '.');
$ipi = number_format($ipi, 2 , ',', '.');


}






$sqlp = "

SELECT c.CLI_PESSOA
FROM vendas v, cliente c
WHERE c.CLI_ID = v.VEN_ID_CLI
AND v.VEN_ID = ".$id."

";


	foreach ($conn->query($sqlp) as $rowp) 
	{
$pessoa = $rowp['CLI_PESSOA'];

}



if($pessoa == 'pf')
{



$sql_cli = "

	SELECT c.CLI_CODIGO codigocli,
pf.PEF_NOME nome, 
pf.PEF_RG rgie,
pf.PEF_CPF cpfcnpj,
pf.PEF_ENDERECO endereco,
pf.PEF_CIDADE cidade,
pf.PEF_ESTADO uf,
pf.PEF_CEP cep,
pf.PEF_BAIRRO bairro,
pf.PEF_TELEFONE telefone,
pf.PEF_NUMERO numero

FROM vendas v, cliente c, pessoa_fisica pf
WHERE v.VEN_ID_CLI = c.CLI_ID
AND  c.CLI_COD_PESSOA = pf.PEF_CODIGO
AND v.VEN_ID =  ".$id."
	
";



}
elseif($pessoa == 'pj')
{

$sql_cli = "

SELECT c.CLI_CODIGO codigocli,
pj.PEJ_RAZAO_SOCIAL nome, 
pj.PEJ_INS_ESTATUAL rgie,
pj.PEJ_CNPJ cpfcnpj,
pj.PEJ_ENDERECO endereco,
pj.PEJ_CIDADE cidade,
pj.PEJ_ESTADO uf,
pj.PEJ_CEP cep,
pj.PEJ_BAIRRO bairro,
pj.PEJ_TELEFONE1 telefone,
pj.PEJ_NUMERO numero

FROM vendas v, cliente c, pessoa_juridica pj
WHERE v.VEN_ID_CLI = c.CLI_ID
AND  c.CLI_COD_PESSOA = pj.PEJ_CODIGO
AND v.VEN_ID =  ".$id."
	
";

	
	
}


	foreach ($conn->query($sql_cli) as $row_cli) 
	{


$nome = $row_cli['nome'];
$rgie = $row_cli['rgie'];
$cpf = $row_cli['cpfcnpj'];
$endereco = $row_cli['endereco'];
$cidade = $row_cli['cidade'];
$uf = $row_cli['uf'];
$cep = $row_cli['cep'];
$bairro = $row_cli['bairro'];
$telefone = $row_cli['telefone'];
$numero = $row_cli['numero'];

}
	
	
	
	
$sql_fatura = "

SELECT p.PRO_CODIGO idanimal,
p.PRO_AB_DESCRICAO raca,
ip.IPA_CFOP cfop,
vi.VNI_QUANTIDADE qtde,
sp.ISP_VL_VENDA vun,
p.PRO_ICMS icmsitem,
p.PRO_IPI ipiitem

FROM vendas v, venitens vi, 
produto p, saidaitenspa sp,
itenspa ip
WHERE v.VEN_ID = vi.VNI_VEN_ID
AND p.PRO_ID = vi.VNI_ID_PROD
AND sp.ISP_ID = vi.VNI_ID_ISP
AND p.PRO_ID = ip.IPA_PRODUTO
AND v.VEN_ID = ".$id."
GROUP BY idanimal 
	
";	




$codigo = "0000".$codven;





$fp = fopen("relatorio.php", "w+");



$escrever = "

<?php 
\$html = \"

<html>
<head>
	<meta charset=utf-8>
	<meta name=viewport content=width=device-width, initial-scale=1>
<style type=text/css>
p   {
border-width: 1px;
border-style: dashed;
border-color: #000;
    }
</style>
</head>
<body>
<!--   canhoto do cliente-->
<table width=100%>
<tr>
	<td>
		<table border=1 width=100% >
			<tr>
				<td colspan=2>
					<font size=2>RECEBEMOS DA EMPRESA  Sistema de Gerenciamento LTDA OS PRODUTOS CONTANTES DA NOTA FISCAL INDICADA AO LADO</font>
				</td>
			</tr>
			<tr>
				<td width=20% >
					
					<table border=0 width=100% >
						<tr>
							<td><font size=2>Data do recebimento</font></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
					</table> </td>
				
				<td width=80% >
					<table border=0>
						<tr>
							<td><font size=2>Identificacao e assinatura do recebedor</font></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
					</table> </td>
				
				</td>
			</tr>
		</table> 
	</td>
	<td width=20%>
		<table border=1 width=100%>
			<tr>
				<td width=1>&nbsp;</td>
				<td align=center rowspan=2>
					Especie NF-e<br>
					N ".$codigo."<br>
					serie ".$serie."
				</td>
			</tr>
			<tr>
				<td width=1>&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
</table>

<!--   linha pontilhada -->
<p></p>



<!--   Dados da nota -->
<table width=100%>
<tr>
<td width=33%>
	<table border=1 width=100%>
		<tr>
			<td>
			
				<table border=0 width=100%>
					<tr>
						<td colspan=2 valign=middle><img src='../febec.jpg' /></td>
						
					</tr>
				</table>			
			
			</td>	
		</tr>
	</table>
</td>
<td width=33%>
	<table border=0 width=100%>
		<tr>
			<td colspan=2 align=center>			
			<b>DANF</b> - <font size=2>Documento Auxiliar da Nota Fiscal</font>
			</td>	
		</tr>
		<tr>
			<td align=right>			
			<font size=2>1-Entrada <br> 2-Saida</font>
			</td>	
			<td>			
				<table border=1 width=100%>
					<tr>
						<td align=center>2</td>
						
					</tr>
				</table>
			</td>	
		</tr>
		<tr>
			<td colspan=2 align=left>			
			<b>N ".$codigo."</b><br>
			<font size=2>SERIE: ".$serie."</font>
			</td>	
		</tr>
		
	</table>

</td>
<td width=33%>
		<table border=1 width=100%>
			<tr>
				<td align=center><img src='barra.jpg' width=236 height=130 /></td>
			</tr>
		</table>
</td>
</tr>
</table>

<!--   Dados da empresa -->
<table border=0 width=100% cellpadding=5 cellspacing=5>
<tr>
<td>

	<table border=1 width=100%>
	<tr>
	<td colspan=4 width=40%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Natureza da Oprecao</font></td>
			</tr>
			<tr>
				<td align=left>Venda de Mercadoria</td>
			</tr>
		</table>		
	</td>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Razao Social</font></td>
			</tr>
			<tr>
				<td align=left>Sistema de Gerenciamento LTDA</td>
			</tr>
		</table>		
	</td>
	</tr>
	<tr>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Inscricao Estatual</font></td>
			</tr>
			<tr>
				<td align=left>12.345.678-98</td>
			</tr>
		</table>		
	</td>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Insc. Est. da Subst. Trib.</font></td>
			</tr>
			<tr>
				<td align=left>12.345.678-98</td>
			</tr>
		</table>		
	</td>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>CNPJ</font></td>
			</tr>
			<tr>
				<td align=left>12.345.678/0001-12</td>
			</tr>
		</table>		
	</td>
	<td colspan=2 width=20%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Nome Fantasia</font></td>
			</tr>
			<tr>
				<td align=left>Gerenciamento de Sistema</td>
			</tr>
		</table>		
	</td>
	</tr>
	</table>




</td>
</tr>
</table>

<!--   Destinatario remetente -->
Destinatario/Remetente
<table border=0 width=100% cellpadding=5 cellspacing=5>
<tr>
<td width=80%>

	<table border=1 width=100%>
	<tr>
	<td width=30%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Nome/Razao Social</font></td>
			</tr>
			<tr>
				<td align=left>".$nome."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>CPF/CNPJ</font></td>
			</tr>
			<tr>
				<td align=left>".$cpf."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>RG/Inscricao Estadual</font></td>
			</tr>
			<tr>
				<td align=left>".$rgie."</td>
			</tr>
		</table>		
	</td>
	</tr>
	<tr>
	<td width=30%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Endereco</font></td>
			</tr>
			<tr>
				<td align=left>".$endereco."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Bairro</font></td>
			</tr>
			<tr>
				<td align=left>".$bairro."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>CEP</font></td>
			</tr>
			<tr>
				<td align=left>".$cep."</td>
			</tr>
		</table>		
	</td>
	</tr>
	<tr>
	<td width=30%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Municipio</font></td>
			</tr>
			<tr>
				<td align=left>".$cidade."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Telefone</font></td>
			</tr>
			<tr>
				<td align=left>".$telefone."</td>
			</tr>
		</table>		
	</td>
	<td width=25%>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>UF</font></td>
			</tr>
			<tr>
				<td align=left>".$uf."</td>
			</tr>
		</table>		
	</td>
	</tr>
	
	</table>




</td>

<td width=20%>
	
	
	<table border=1 width=100%>
	<tr>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Data Emissao</font></td>
			</tr>
			<tr>
				<td align=left>".$dtemissao."</td>
			</tr>
		</table>	
	</td>
	</tr>
	<tr>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Data Saida</font></td>
			</tr>
			<tr>
				<td align=left>".$dtemissao."</td>
			</tr>
		</table>	
	</td>
	</tr>
	<tr>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Hora da saida</font></td>
			</tr>
			<tr>
				<td align=left>".$hremissao."</td>
			</tr>
		</table>	
	</td>
	</tr>
	
	</table>


</td>
</tr>
</table>


<!--   Calculo do Imposto -->
Calculo do Imposto
<table border=0 width=100%>
<tr>
<td>

	<table border=1 width=100%>
	<tr>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Base de Calculo ICMS</font></td>
			</tr>
			<tr>
				<td>R$ ".$vlnota."</td>
			</tr>
		</table>	
	</td>
	<td colspan=2>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Valor ICMS</font></td>
			</tr>
			<tr>
				<td>R$ ".$icms."</td>
			</tr>
		</table>	
	</td>
	<td colspan=2>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Alícota ICMS</font></td>
			</tr>
			<tr>
				<td>18%</td>
			</tr>
		</table>	
	
	</td>	
	
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Valor Total dos Produtos</font></td>
			</tr>
			<tr>
				<td>R$ ".$vlnota."</td>
			</tr>
		</table>	
	</td>
	</tr>
	<tr>
	<td>
	
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Base de Calculo IPI</font></td>
			</tr>
			<tr>
				<td>R$ ".$vlnota."</td>
			</tr>
		</table>	
	</td>
	
	<td colspan=2>
	
		
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Valor IPI da Nota</font></td>
			</tr>
			<tr>
				<td>R$ ".$ipi."</td>
			</tr>
		</table>
		
	</td>
	<td colspan=2>
	<table border=0 width=100%>
			<tr>
				<td><font size=2>Alícota IPI</font></td>
			</tr>
			<tr>
				<td>3%</td>
			</tr>
		</table>
	</td>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Valor Total da Nota</font></td>
			</tr>
			<tr>
				<td>R$ ".$vlnota."</td>
			</tr>
		</table>	
	</td>
	
	
	
	</tr>
	
	</table>




</td>

</tr>
</table>


<!--   Transportador/Volumes transpotados -->
Transportador/Volumes transpotados
<table border=0 width=100% cellpadding=5 cellspacing=5>
<tr>
<td>
	<table border=1 width=100%>
	<tr>
	<td colspan=6>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Responsavel</font></td>
			</tr>
			<tr>
				<td align=left>".$frete_transp."</td>
			</tr>
		</table>		
	</td>
	</tr>
	
	</table>
</td>
</tr>
</table>


<!--   Itens da Nota Fiscal -->
<br><br><br><br><br>
Itens da Nota Fiscal
<table border=0 width=100%>
<tr>
<td>

	<table border=1 width=100%>
	<tr>
	<td><b>Codigo</b></td>
	<td><b>Descricao</b></td>
	<td><b>CFOP</b></td>
	<td><b>Qtde</b></td>
	<td><b>Preco UN</b></td>
	<td><b>Total</b></td>
	<td><b>BC ICMS</b></td>
	<td><b>Vlr. ICMS</b></td>
	<td><b>Vlr. IPI</b></td>
	<td><b>ICMS</b></td>
	<td><b>IPI</b></td>
	</tr>\"; 
";
//while


	foreach ($conn->query($sql_fatura) as $row_itvend) 
	{
$idanimal = $row_itvend['idanimal'];
$raca = $row_itvend['raca'];
$cfop = $row_itvend['cfop'];
$qtde = $row_itvend['qtde'];
$vun = $row_itvend['vun'];
$subt = $qtde * $vun;
$bcicmsitem = $subt;
$icmsitem = $row_itvend['icmsitem'];
$ipiitem = $row_itvend['ipiitem'];
$vlicmsitem = ($icmsitem/100)*$subt;
$vlipiitem = ($ipiitem/100)*$subt;



$qtde = number_format($qtde, 3, ',', '.');
$vun = number_format($vun, 2, ',', '.');
$subt = number_format($subt, 2, ',', '.');
$bcicmsitem = number_format($bcicmsitem, 2, ',', '.');
$vlicmsitem = number_format($vlicmsitem, 2, ',', '.');
$vlipiitem = number_format($vlipiitem, 2, ',', '.');
$icmsitem = number_format($icmsitem, 2, ',', '.');
$ipiitem = number_format($ipiitem, 2, ',', '.');



	
$escrever .= 
	
" \$html .= \"

	<tr>
	<td>".$idanimal."</td>
	<td>".$raca."</td>
	<td>".$cfop."</td>
	<td>".$qtde."</td>
	<td>".$vun."</td>
	<td>".$subt."</td>
	<td>".$bcicmsitem."</td>
	<td>".$vlicmsitem."</td>
	<td>".$vlipiitem."</td>
	<td>".$icmsitem."</td>
	<td>".$ipiitem."</td>
	</tr>\";
	

";
	}

//fim while

  

$escrever .= 
	
"
\$html .= \"
	
	
	
	</table>




</td>

</tr>
</table>


<!--   Dados Adcionais -->
Dados Adcionais
<table border=0 width=100% cellpadding=0 cellspacing=0>
<tr>
<td>

	<table border=1 width=100%>
	<tr height=100>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Observacao</font></td>
			</tr>
			<tr>
				<td align=left>Exemplo</td>
			</tr>
		</table>	
	</td>
	<td>
		<table border=0 width=100%>
			<tr>
				<td><font size=2>Reservado ao Fisco</font></td>
			</tr>
			<tr>
				<td align=left>&nbsp;</td>
			</tr>
		</table>		
	</td>

	
	</tr>
	
	</table>




</td>

</tr>
</table>











</body>
</html>


\";








\$html = utf8_decode(\$html);




	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once(\"dompdf/autoload.inc.php\");

	//Criando a Instancia
	\$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	\$dompdf->load_html(\$html);

	//Renderizar o html
	\$dompdf->render();

	//Exibibir a página
	\$dompdf->stream(
		\"nof_rel.pdf\", 
		array(
			\"Attachment\" => false			//Para realizar o download somente alterar para true
		)
	);
	
	
	?>
	
";	





	
$escreve = fwrite($fp, $escrever);
fclose($fp);


} //fim função
} //fim class

	?>
