<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
require_once('../../../raiz/arq/funcoes.php'); 





$dt_fim = $_POST['dt_fim'];
$dt_ini = $_POST['dt_ini'];

//echo $dt_ini."<br>";
//echo $dt_fim;


if($dt_ini > $dt_fim)
{
	alerta("data errada");
	direciona("../../../index.php?mod=gdp&bot=tes5");
}
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $this->Image('febec.jpg',1,1,5);
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(20,0.7,utf8_decode('Dados das NOTAS'),0,1,'C');
        $this->Cell(5);
        $this->SetFont('Arial','B',9);
        $this->Cell(20,0.7,utf8_decode('Classificado pela data de Cadastro'),0,1,'C');
		$this->Cell(5);
        $this->SetFont('Arial','',9);
        $this->Cell(20,0.7,utf8_decode('Emissão: ').date ("d/m/Y H:i:s"),0,0,'C');
        $this->Ln(1);
		$this->Ln(1);
		$this->Ln(1);
		

        $this->SetFont('Arial','',8);
		
		
		
		
		
		
		
		
		
		
		
		//---------------------------aqui vetor cabeçalho
        $header = array( 'Data Cadastro', utf8_decode('Código'), utf8_decode('NOTA'),
		utf8_decode('Pedido'),
		utf8_decode('Controle Fisco'), utf8_decode('Série'), 
		utf8_decode('Página'), 
		utf8_decode('Data Emissão'), utf8_decode('Data Saída'), utf8_decode('Hora Saída'));

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(2, 1, 4, 4, 4, 1.5, 3, 3, 3, 2);
        for($i=0;$i<count($header);$i++)
			
            $this->Cell($w[$i],0.5,$header[$i],1,0,'C',true);
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
	
	
				function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}
	
	
    }


    

	
	
	
	
	
	
	
	
	
	
	
	
	//---------------------------aqui select dos campos 
	
	if(($dt_ini && $dt_fim) == '')
	{	$auxsql = "
SELECT *
FROM entradapa 
				";
	}
	else
	{
		$auxsql = "	
			SELECT *
FROM entradapa 
			WHERE c.EPA_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 
			ORDER BY EPA_DATA_CADASTRO
			

";
	}




    
$result = exec($auxsql);	




    $w = array(2, 1, 4, 4, 4, 1.5, 3, 3, 3, 2);
    
    // Instanciation of inherited class
    $pdf = new PDF('L','cm','A4');
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
        foreach($conn->query($auxsql) as $row) {
            $conta += 1;



	
	

	
	
			
			
			//---------------------------aqui os dados
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["EPA_DATA_CADASTRO"]),0,0,'C',$fill);
            
			$pdf->Cell($w[1],0.5,utf8_decode($row["EPA_CODIGO"]),0,0,'C',$fill);
            
			$pdf->Cell($w[2],0.5,utf8_decode($row["EPA_NOTA"]),0,0,'C',$fill);
            
			$pdf->Cell($w[3],0.5,utf8_decode($row["EPA_PEDIDO"]),0,0,'C',$fill);
            
			$pdf->Cell($w[4],0.5,utf8_decode($row["EPA_CONT_FISCO"]),0,0,'C',$fill);
            
			$pdf->Cell($w[5],0.5,utf8_decode($row["EPA_SERIE"]),0,0,'C',$fill);
            $pdf->Cell($w[6],0.5,utf8_decode($row["EPA_PAGINA"]),0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,$pdf->databr($row["EPA_DT_EMISSAO"]),0,0,'C',$fill);
			$pdf->Cell($w[8],0.5,$pdf->databr($row["EPA_DT_SAIDA"]),0,0,'C',$fill);
			$pdf->Cell($w[9],0.5,utf8_decode($row["EPA_HR_SAIDA"]),0,0,'C',$fill);
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de NOTAS: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>
