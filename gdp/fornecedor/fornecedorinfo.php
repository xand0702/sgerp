		<?php 



require_once('gdp/classinfo.php'); 

$sqlinfo[0] = "SELECT *
FROM pessoa_fisica pf
WHERE pf.PEF_CODIGO = '.\$codpess.'
";

$sqlinfo[1] = "SELECT *
FROM pessoa_juridica pj
WHERE pj.PEJ_CODIGO = '.\$codpess.'
";

$colunainfo[0][0] = 'Vendedor'; //label
$colunainfo[0][1] = 'VENDEDOR'; //sql
$colunainfo[0][2] = ''; //tipo


$colunainfo[1][0] = 'Limite'; //label
$colunainfo[1][1] = 'LIMITE'; //sql
$colunainfo[1][2] = 'moeda'; //tipo


$colunainfo[2][0] = 'Vencimento'; //label
$colunainfo[2][1] = 'VENCIMENTO'; //sql
$colunainfo[2][2] = 'data'; //tipo


$colunainfo[3][0] = 'Gerente'; //label
$colunainfo[3][1] = 'GERENTE'; //sql
$colunainfo[3][2] = ''; //tipo







//pessoa_juridica
$colunainfopj[0][0] = 'Razão Social'; //label
$colunainfopj[0][1] = 'RAZAO_SOCIAL'; //sql
$colunainfopj[0][2] = ''; //tipo

$colunainfopj[1][0] = 'CNPJ'; //label
$colunainfopj[1][1] = 'CNPJ'; //sql
$colunainfopj[1][2] = ''; //tipo

$colunainfopj[2][0] = 'Inscrição Estadual'; //label
$colunainfopj[2][1] = 'INS_ESTATUAL'; //sql
$colunainfopj[2][2] = ''; //tipo

$colunainfopj[3][0] = 'Nome Fantasia'; //label
$colunainfopj[3][1] = 'NOME_FANTASIA'; //sql
$colunainfopj[3][2] = ''; //tipo

$colunainfopj[4][0] = 'Telefone'; //label
$colunainfopj[4][1] = 'TELEFONE1'; //sql
$colunainfopj[4][2] = ''; //tipo

$colunainfopj[5][0] = 'Contato'; //label
$colunainfopj[5][1] = 'CONTATO1'; //sql
$colunainfopj[5][2] = ''; //tipo

$colunainfopj[6][0] = 'Email'; //label
$colunainfopj[6][1] = 'EMAIL'; //sql
$colunainfopj[6][2] = ''; //tipo

$colunainfopj[7][0] = 'Site'; //label
$colunainfopj[7][1] = 'SITE'; //sql
$colunainfopj[7][2] = ''; //tipo

$colunainfopj[8][0] = 'Data de Fundação'; //label
$colunainfopj[8][1] = 'DATA_FUNDACAO'; //sql
$colunainfopj[8][2] = 'data'; //tipo

$colunainfopj[9][0] = 'Fundador'; //label
$colunainfopj[9][1] = 'FUNDADOR'; //sql
$colunainfopj[9][2] = ''; //tipo

$colunainfopj[10][0] = 'Presidente'; //label
$colunainfopj[10][1] = 'PRESIDENTE'; //sql
$colunainfopj[10][2] = ''; //tipo

$colunainfopj[11][0] = 'Atividade'; //label
$colunainfopj[11][1] = 'ATIVIDADE'; //sql
$colunainfopj[11][2] = ''; //tipo

$colunainfopj[12][0] = 'CEP'; //label
$colunainfopj[12][1] = 'CEP'; //sql
$colunainfopj[12][2] = ''; //tipo

$colunainfopj[13][0] = 'Endereço'; //label
$colunainfopj[13][1] = 'ENDERECO'; //sql
$colunainfopj[13][2] = ''; //tipo

$colunainfopj[14][0] = 'Número'; //label
$colunainfopj[14][1] = 'NUMERO'; //sql
$colunainfopj[14][2] = ''; //tipo

$colunainfopj[15][0] = 'Complemento'; //label
$colunainfopj[15][1] = 'COMPLEMENTO'; //sql
$colunainfopj[15][2] = ''; //tipo

$colunainfopj[16][0] = 'Bairro'; //label
$colunainfopj[16][1] = 'BAIRRO'; //sql
$colunainfopj[16][2] = ''; //tipo

$colunainfopj[17][0] = 'Cidade'; //label
$colunainfopj[17][1] = 'CIDADE'; //sql
$colunainfopj[17][2] = ''; //tipo

$colunainfopj[18][0] = 'Estado'; //label
$colunainfopj[18][1] = 'ESTADO'; //sql
$colunainfopj[18][2] = ''; //tipo

$colunainfopj[19][0] = 'País'; //label
$colunainfopj[19][1] = 'PAIS'; //sql
$colunainfopj[19][2] = ''; //tipo










//pessoa_fisica
$colunainfopf[0][0] = 'Nome'; //label
$colunainfopf[0][1] = 'NOME'; //sql
$colunainfopf[0][2] = ''; //tipo


$colunainfopf[1][0] = 'Telefone'; //label
$colunainfopf[1][1] = 'TELEFONE'; //sql
$colunainfopf[1][2] = ''; //tipo

$colunainfopf[2][0] = 'CPF'; //label
$colunainfopf[2][1] = 'CPF'; //sql
$colunainfopf[2][2] = ''; //tipo

$colunainfopf[3][0] = 'Email'; //label
$colunainfopf[3][1] = 'EMAIL'; //sql
$colunainfopf[3][2] = ''; //tipo

$colunainfopf[4][0] = 'RG'; //label
$colunainfopf[4][1] = 'RG'; //sql
$colunainfopf[4][2] = ''; //tipo

$colunainfopf[5][0] = 'Orgão de Expedido'; //label
$colunainfopf[5][1] = 'ORGEX'; //sql
$colunainfopf[5][2] = ''; //tipo

$colunainfopf[6][0] = 'Data de expedição'; //label
$colunainfopf[6][1] = 'DATA_EXPEDICAO'; //sql
$colunainfopf[6][2] = 'data'; //tipo

$colunainfopf[7][0] = 'Data de Nascimento'; //label
$colunainfopf[7][1] = 'DATA_NASCIMENTO'; //sql
$colunainfopf[7][2] = 'data'; //tipo

$colunainfopf[8][0] = 'Nome da Mãe'; //label
$colunainfopf[8][1] = 'MAE'; //sql
$colunainfopf[8][2] = ''; //tipo

$colunainfopf[9][0] = 'Nome do Pai'; //label
$colunainfopf[9][1] = 'PAI'; //sql
$colunainfopf[9][2] = ''; //tipo

$colunainfopf[10][0] = 'CEP'; //label
$colunainfopf[10][1] = 'CEP'; //sql
$colunainfopf[10][2] = ''; //tipo

$colunainfopf[11][0] = 'Endereço'; //label
$colunainfopf[11][1] = 'ENDERECO'; //sql
$colunainfopf[11][2] = ''; //tipo

$colunainfopf[12][0] = 'Número'; //label
$colunainfopf[12][1] = 'NUMERO'; //sql
$colunainfopf[12][2] = ''; //tipo

$colunainfopf[13][0] = 'Complemento'; //label
$colunainfopf[13][1] = 'COMPLEMENTO'; //sql
$colunainfopf[13][2] = ''; //tipo

$colunainfopf[14][0] = 'Bairro'; //label
$colunainfopf[14][1] = 'BAIRRO'; //sql
$colunainfopf[14][2] = ''; //tipo

$colunainfopf[15][0] = 'Cidade'; //label
$colunainfopf[15][1] = 'CIDADE'; //sql
$colunainfopf[15][2] = ''; //tipo

$colunainfopf[16][0] = 'Estado'; //label
$colunainfopf[16][1] = 'ESTADO'; //sql
$colunainfopf[16][2] = ''; //tipo

$colunainfopf[17][0] = 'País'; //label
$colunainfopf[17][1] = 'PAIS'; //sql
$colunainfopf[17][2] = ''; //tipo

$colunainfopf[18][0] = 'Nacionalidade'; //label
$colunainfopf[18][1] = 'NACIONALIDADE'; //sql
$colunainfopf[18][2] = ''; //tipo

$colunainfopf[19][0] = 'Naturalidade'; //label
$colunainfopf[19][1] = 'NATURALIDADE'; //sql
$colunainfopf[19][2] = ''; //tipo









$info = new classinfo();
$info->info('FOR_', 'PEF_', 'PEJ_', 'gdp','tes5','fornecedor' ,'Fornecedor' ,$colunainfo ,$colunainfopf ,$colunainfopj ,$sqlinfo);
		

require_once('gdp/tmp/info.php'); 		




