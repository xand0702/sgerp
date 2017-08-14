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
        $this->Cell(10,0.7,utf8_decode('Pedido'),0,1,'C');
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


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	$auxsql = "	
SELECT *
FROM pedido p, funcinario f, pessoa_fisica pf
WHERE p.PED_COD_FUN = f.FUN_CODIGO
AND f.FUN_COD_PEF = pf.PEF_CODIGO
AND p.PED_ID = ".$id;
	
	
	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
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
			
            
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Pedido: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PED_CODIGO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Pedido: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($row["PED_DATA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tipo de Pedido: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PED_TIPO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cod. Fun: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PED_COD_FUN"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome Funcionário: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NOME"]),0,1,'L',$fill);
			
			
			
			
			
			
			
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
	
	
	
	
	
	
?>
