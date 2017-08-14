<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];

	
	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('NOTA'),0,1,'C');
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


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM entradamc e
				WHERE e.MCA_CODIGO = ".$id;

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
			
            
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Nota: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_NOTA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Pedido.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_PEDIDO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Controle fisco: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_CONT_FISCO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Série: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_SERIE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Página: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_PAGINA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Natureza da Operação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_NAT_OP"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("NFE: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_CH_NFE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da Emissão: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($row["MCA_DT_EMISSAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da Saída: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($row["MCA_DT_SAIDA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da Saída: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_HR_SAIDA"]),0,1,'L',$fill);
			
			
			
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($row["MCA_DATA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_SESSION_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($row["MCA_DATA_ALTTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Observação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["MCA_OBSERVACAO"]),0,1,'L',$fill);
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
	
	
	
	
	
	
?>
