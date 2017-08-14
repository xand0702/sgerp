<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];


$sql = "

SELECT p.PEF_IMAGEM, p.PEF_SEXO
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->PEF_IMAGEM;

$sexo = $query->PEF_SEXO;








if($img == '')
{
	if($sexo == 1)
	{
		$img = "masculino.jpg";
	}
	elseif($sexo == 2)
	{
		$img = "feminino.jpg";
	}
	elseif($sexo == 3)
	{
		$img = "outros.jpg";
	}
}
else
{
	$img = $img;
}






$img = "../../pessoafisica/img/".$img;


	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Funcionário'),0,1,'C');
        $this->Cell(5);
        $this->SetFont('Arial','B',9);
        $this->Cell(10,0.7,utf8_decode('Emissão: ').date ("d/m/Y H:i:s"),0,0,'C');
        $this->Ln(1);
		$this->Ln(1);
		$this->Ln(1);
		

        $this->SetFont('Arial','',8);


    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-6);
        //$this->Line(20, 27.7, 1, 27.7);
        $this->Image('febec.jpg',1,28.3,2);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
    }
    
	
	
	
			function databr($data)
			{
				if($data == null)
				{
					return " - ";
				}
				else
				{
					$dt = explode("-", $data);
					$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
					return $dtimp;
				}
			}
	
	
	
	
	}

	
	//---------------------------aqui select dos campos 




	$auxsqlnomes = "	SELECT *
						FROM funcinario f, pessoa_fisica p
						WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);


	
	
	
	
	
	
$codcad = $querynomes->FUN_ID_CAD;


	$auxsqlcad = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->PEF_NOME;		

















	
	
	
	
	
	
	
$codalt = $querynomes->FUN_ID_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->PEF_NOME;		


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM funcinario f, pessoa_fisica p
				WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_ID = ".$id;

	$result = exec($auxsql);	
	
	
	
	
	
	

    $w = 9.5;
    
    // Instanciation of inherited class
    $pdf = new PDF('P','cm','A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    // Color and font restoration
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','',12);

    $fill = false;

    $conta = 0;
	foreach($conn->query($auxsql) as $row)
	{
		
		
	if($row["FUN_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["FUN_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";		
		
            $conta += 1;

			
			$pdf->Image($img,1,5,5);
			//---------------------------aqui os dados
			
            $pdf->Cell($w,0.5,utf8_decode("Nome: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NOME"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_TELEFONE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CPF: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CPF"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Celular: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CELULAR"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Email: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_EMAIL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("RG: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_RG"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Setor: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SETOR"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cargo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CARGO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Função: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_FUNCAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cart. Trabalho: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CARTEIRA_TRAB"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Série: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SERIE_CT"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("PIS: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_PIS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Salário Cart: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SALARIO_CARTEIRA"]),0,1,'L',$fill);

			$pdf->Cell($w,0.5,utf8_decode("CBO: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CBO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Descrição CBO: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_DESC_CBO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("FGTS: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_FGTS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Exame Médico: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_EXAME_MEDICO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Próximo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_PROX_EXAME_MED),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Exame Aud.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_EXAME_AUDIOMETRIA),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Próximo Aud.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_PROX_EXAME_AUD),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Exame EPI: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_EXAME_EPI),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Revogação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_REVOGACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Adminição: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_EXAME_ADMICAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Primeira Exp.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_VENC1_EXP),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Segunda Exp.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_VENC2_EXP),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Comissão: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_COMISSAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Valor por Hora: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_VALOR_HORA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sal. Família: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SALARIO_FAMILIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Comp. Salárial: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_COMP_SAL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Base Férias: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_BASE_FERIAS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Base 13º: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_BASE_13"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Entrada: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ENTRADA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Almoço: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ALMOCO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Volta Almoço: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ALMOCO_VOLT"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Saída: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SAIDA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("horas dia: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CARG_HOR_DIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Horas Sem: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CARG_HOR_SEM"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Dia de Rep: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_DIA_REPOUSO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hor. Vagos: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_HOR_VAG"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Senha catraca: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SENHA_CAT"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CNH: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CNH"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CNH Venc: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CNH_VENC"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CNH Categoria: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CATEGORIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tít. Eleitor: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_TITULO_ELEITOR"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tít. Zona: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ZONA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tít. Seção: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SECAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cônjuge: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CONJUGE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cert. Casam.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_CERT_CASAMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Filhos: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_FILHOS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Escolaridade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ESCOLARIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Aposentado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($aposentado),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Deficiente: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($deficiente),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Descrição Def: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_DEFICIENTE_DESC"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nº Camisa: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_N_CAMISA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nº Calça: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_N_CALCA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nº Calçado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_N_CALCADO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Aviso: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_DATA_AVISO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Demissão: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_DATA_DEM),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Razão: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_RAZAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SESSION_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->FUN_DATA_ALTTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Histórico: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["FUN_OBSERVACAO"]),0,1,'L',$fill);
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

?>
