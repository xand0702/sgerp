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
        $this->Cell(10,0.7,utf8_decode('Relatório de Contas a Receber'),0,1,'C');
        $this->Cell(5);
        $this->SetFont('Arial','B',9);
        $this->Cell(10,0.7,utf8_decode('Emissão: ').date ("d/m/Y H:i:s"),0,0,'C');
        $this->Ln(1);
		$this->Ln(1);
		$this->Ln(1);
		
        $this->SetFont('Arial','',8);
		
		
		
		
		
		
		
		
		
		$teste = "1";
		
		
		//---------------------------aqui vetor cabeçalho
        $header = array( 'Cliente', 'Telefone', 'Valor', 'DT prox. venc.', 'Nr parc. pend.', 'Atrasado', 'Forma de pagamento');

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(3, 3, 2, 3, 2, 3, 3);
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
v.FAT_VENDA_CODIGO			cod_ven,
c.FAT_CLIENTE_NOME 			cliente,
c.FAT_CLIENTE_TELEFONE 		telefone,
cd.FAT_CIDADE_NOME			cidade,
SUM(pc.FAT_PAR_VALOR) 		valor,
pc.FAT_PAR_DATAVENCIMENTO	dataa,
COUNT(pc.FAT_PAR_CODIGO)	nparcelas,
fpg.FAT_PAGAF_NOME			formapag


FROM fat_venda v, fat_pagamento pg,
fat_cliente c , fat_parcela pc, fat_pagaf fpg,
fat_cidade cd

WHERE v.FAT_VENDA_CODIGO = pg.FAT_PAG_CODVENDA
AND c.FAT_CLIENTE_CODIGO = v.FAT_VENDA_CODCLIENTE
AND pg.FAT_PAG_CODIGO = pc.FAT_PAR_CODPAG
AND fpg.FAT_PAGAF_CODIGO = pg.FAT_PAG_CODPAGF
AND cd.FAT_CIDADE_CODIGO = c.FAT_CLIENTE_CODCIDADE
AND pc.FAT_PAR_PAGO = 'n'
GROUP BY v.FAT_VENDA_CODIGO



	";
	$auxsql .= "order by 1";
    
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

    $w = array(3, 3, 2, 3, 2, 3, 3);
    
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
$totalrec = 0;
    $conta = 0;
        while ($linha = mysql_fetch_assoc($result)) {
            $conta += 1;
			
			
			$totalrec = $totalrec + $linha["valor"];
			
			//atrasado
	$datap = $linha['dataa'];
	$datah = date('Y-m-d');
	
		$partes = explode("-", $datap);
		$anop = $partes[0];
		$mesp = $partes[1];
		$diap = $partes[2];	
	
		$partes = explode("-", $datah);
		$anoh = $partes[0];
		$mesh = $partes[1];
		$diah = $partes[2];	
	
	if($anop < $anoh)
		$atrasado = "Sim";
	elseif($mesp < $mesh && $anop <= $anoh)
		$atrasado = "Sim";
	elseif($diap < $diah && $mesp <= $mesh && $anop <= $anoh)
		$atrasado = "Sim";
	else
		$atrasado = "Nao";			
			
			
			
		/*	
			
			$peso = $linha["peso"];
			$peso = number_format($peso, 3, ',', '.');
			
			$preco = $linha["preco"];
			$preco = 'R$ '.number_format($preco, 2, ',', '.');
			
			$totall = $linha["preco"] * $linha["peso"]; 
			$totall = 'R$ '.number_format($totall, 2, ',', '.');
			
			*/
			
			$valor = $linha["valor"];
			$valor = 'R$ '.number_format($valor, 2, ',', '.');
			
			$dataa = date('d/m/Y', strtotime($linha["dataa"]));
			
			
			
			
			
			
			
			
			
			//---------------------------aqui os dados
			
            $pdf->Cell($w[0],0.5,$linha["cliente"],0,0,'L',$fill);
            $pdf->Cell($w[1],0.5,$linha["telefone"],0,0,'L',$fill);     
            $pdf->Cell($w[2],0.5,$valor,0,0,'L',$fill);
			$pdf->Cell($w[3],0.5,$dataa,0,0,'L',$fill);
            $pdf->Cell($w[4],0.5,$linha["nparcelas"],0,0,'L',$fill);
			$pdf->Cell($w[5],0.5,$atrasado,0,0,'L',$fill);
			$pdf->Cell($w[6],0.5,$linha["formapag"],0,0,'L',$fill);
			
            
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
	
	
	
	$totalrec = 'R$ '.number_format($totalrec, 2, ',', '.');
	
    $pdf->Cell(0,1,  utf8_decode("Valor Total de Contas a Receber: ").$totalrec,0,0,'L',$fill);  
	$pdf->Ln();
	
	
    $pdf->Cell(0,1,  utf8_decode("Total de Clientes: ").$totvol,0,0,'R',$fill);    

    mysql_close();
    $pdf->Output();

?>
