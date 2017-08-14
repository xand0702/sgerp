<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];
	$pro = $_POST['pro'];

	
	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Item Estoque'),0,1,'C');
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


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	if($pro == 'P.A.')
	{
	$auxsql = "	
SELECT  ip.IPA_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ip.IPA_QUANTIDADE quant, ip.IPA_PRECOUN valor,
FORMAT((ip.IPA_QUANTIDADE * ip.IPA_PRECOUN), 2) AS total,
ep.EPA_NOTA nota, ep.EPA_CH_NFE nfe

FROM itenspa ip , entradapa ep, produto p
WHERE ip.IPA_ENTRADAPA = ep.EPA_ID
AND ip.IPA_PRODUTO = p.PRO_ID
AND ip.IPA_ID =	".$id;
	
	}
	elseif($pro == 'M.C.')
	{
		$auxsql = "	

SELECT  ic.IMC_ID idit, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,
p.PRO_UNIDADE un,p.PRO_FABRICANTE fab,
ic.IMC_QUANTIDADE quant, ic.IMC_PRECOUN valor,
FORMAT((ic.IMC_QUANTIDADE * ic.IMC_PRECOUN), 2) AS total,
em.MCA_NOTA nota, em.MCA_CH_NFE nfe

FROM itensmc ic, entradamc em, produto p
WHERE ic.IMC_ENTRADAPA = em.MCA_ID
AND ic.IMC_PRODUTO = p.PRO_ID
AND ic.IMC_ID = ".$id;
	}
	
	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
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
	if($row["MCA_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["MCA_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";		
		*/
            $conta += 1;

			
			//$pdf->Image($img,1,5,5);
			//---------------------------aqui os dados
			
            
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("ID Item: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["idit"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do Produto: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["codpro"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Descrição do Produto: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["nome"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("UN: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["un"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Fabricante: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["fab"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estoque: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["quant"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Preço por peça: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->moeda($row["valor"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Total do estoque: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->moeda($row["total"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("NOTA: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["nota"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("NFE: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["nfe"]),0,1,'L',$fill);
			
			
			
			
			
			
			
			
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
	
	
	
	
	
	
?>
