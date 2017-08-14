<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];

	
	
	
	
	
	
$sql = "

SELECT *
FROM produto pf
WHERE pf.PRO_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->PRO_IMAGEM;









if($img == '')
{

		$img = "outros.jpg";
}
else
{
	$img = $img;
}






$img = "../../produto/img/".$img;


	
	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Produto'),0,1,'C');
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
    
			function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
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
						FROM produto pf
						WHERE pf.PRO_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);


	
	



		
	








	
	
$codcad = $querynomes->PRO_ID_CAD;


	$auxsqlcad = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->PEF_NOME;		
























	
	
	
	
	
	
	
$codalt = $querynomes->PRO_ID_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->PEF_NOME;		


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM produto pf
				WHERE pf.PRO_ID = ".$id;

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
		
		/*
	if($row["PRO_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["PRO_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";		
		*/
            $conta += 1;

			
			$pdf->Image($img,1,5,5);
			//---------------------------aqui os dados
			
            $pdf->Cell($w,0.5,utf8_decode("Descrição: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_DESCRICAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Abreviatura Desc: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_AB_DESCRICAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Unidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_UNIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Codigo de Barra: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_COD_BARRA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estoque Mínimo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_EST_MIN"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estoque CrÍtico: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_EST_CRIT"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estoque Máximo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_EST_MAX"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Fabricante: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_FABRICANTE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Marca: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_MARCA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Modelo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_MODELO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Categoria: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_CATEGORIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Peso Bruto: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_PESO_BRUTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Peso Líquido: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_PESO_LIQ"]),0,1,'L',$fill);

			$pdf->Cell($w,0.5,utf8_decode("Comprimento (m): "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_COMPRIMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Largura (m): "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_LARGURA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Altura: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_ALTURA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Grade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_GRADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Agrupamento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_AGRUPAMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Dias de Garantia: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_DIAS_GARANT"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Situração Tributária: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_SIT_TRIB"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Substituição Tributária: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_SUB_TRIB"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Classificão Fiscal: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_CLASS_TRIB"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cofins: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_COFINS"]),0,1,'L',$fill);
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("IRPJ: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_IRPJ"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("ICMS.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_ICMS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IPI: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_IPI"]),0,1,'L',$fill);
			
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PRO_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_SESSION_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PRO_DATA_ALTTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Observação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PRO_OBSERVACAO"]),0,1,'L',$fill);
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
		
	
?>
