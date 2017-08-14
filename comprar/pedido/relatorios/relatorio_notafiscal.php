<?php
    
    require('fpdf.php');

    session_start();
   require_once('/../../../bd/connect.php');
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $this->Image('febec.jpg',1,1,5);
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Relatório de Notas Fiscais'),0,1,'C');
        $this->Cell(5);
        $this->SetFont('Arial','B',9);
        $this->Cell(10,0.7,utf8_decode('Emissão: ').date ("d/m/Y H:i:s"),0,0,'C');
        $this->Ln(1);
		$this->Ln(1);
		$this->Ln(1);
		

        $this->SetFont('Arial','',8);
		
		
		
		
		
		
		
		
		
		$teste = "1";
		
		
		//---------------------------aqui vetor cabeçalho
        $header = array( 'Nota Fiscal', 'Cliente', 'Data', 'Valor da Nota');

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(3, 6, 3, 5);
        for($i=0;$i<count($header);$i++)
            //$this->Cell($w[$i],0.5,$header[$i],1,0,'L',true);
            $this->Cell($w[$i],0.5,$header[$i],1,0,'L',true);
        $this->Ln();

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
        // Page number
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'R');
    }
    }

    // Instanciation of inherited class
    //$pdf = new PDF('P','cm','A4');
    //$pdf = new PDF();
    //$pdf->AliasNbPages();
   // $pdf->AddPage();
    //$pdf->SetFont('Arial','',8);

    
    $auxsql = "";
	
	
	

	
	
	
	
	
	
	//---------------------------aqui select dos campos 
	$auxsql .= "
	SELECT 
c.`FAT_CLIENTE_NOME` nome, 
v.`FAT_VENDA_CODIGO` numero, 
v.`FAT_VENDA_DTCADASTRO` data, 
v.`FAT_VENDA_TOTALNOTA` total 
FROM 
fat_cliente c, fat_venda v 
WHERE v.`FAT_VENDA_CODCLIENTE` = c.`FAT_CLIENTE_CODIGO`
	
	";
	$auxsql .= "order by 2";
    
    $result = mysql_query($auxsql);

    $totvol=0;
    while ($aux = mysql_fetch_assoc($result)) {
        $totvol+=1;
    }

    if($totvol<=0){
        mysql_close();
        exit('Nenhum registro encontrado!');
        
    }
    
    mysql_data_seek($result, 0);

    $w = array(3, 6, 3, 5);
    
    // Instanciation of inherited class
    $pdf = new PDF('P','cm','A4');
    //$pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    //$pdf->SetFont('Arial','',8);
    
    
    // Color and font restoration
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');

    $fill = false;

    $conta = 0;
        while ($linha = mysql_fetch_assoc($result)) {
            $conta += 1;
			
			
			
			
			
			
			
			
			
			
			$datac = $linha["data"];
			$datac = date('d/m/Y', strtotime($datac));
			
			
			$totall = $linha["total"];
			$totall = 'R$ '.number_format($totall, 2, ',', '.');
			
			
			
			//---------------------------aqui os dados
			
            $pdf->Cell($w[0],0.5,$linha["numero"],0,0,'L',$fill);
            $pdf->Cell($w[1],0.5,$linha["nome"],0,0,'L',$fill);
            //$pdf->Cell($w[2],0.5,$linha["fin_venda_hrcadstro"],0,0,'L',$fill);        
            $pdf->Cell($w[2],0.5,$datac,0,0,'L',$fill);
			 $pdf->Cell($w[3],0.5,$totall,0,0,'L',$fill);
            $pdf->Ln();
            $fill = !$fill;
        }
        // Closing line
        //$pdf->Cell(array_sum($w),0,'','T');
    //$pdf->SetFont('Arial','I',12);
    //$pdf->SetFillColor(255,255,255);
    //$pdf->Ln(1);
    //$pdf->Cell(3,1,"",0,0,'L',$fill); 
    //$pdf->Cell(10,1,"",0,0,'L',$fill);
	//$pdf->Cell(3,1,"",0,0,'L',$fill);
	//$pdf->Cell(3,1,"",0,0,'L',$fill);	
    //$pdf->Cell(5,1,"",0,0,'L',$fill);   
    $pdf->Cell(0,1,  utf8_decode("Total de Notas: ").$totvol,0,0,'R',$fill);    

    mysql_close();
    $pdf->Output();

?>
