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
	direciona("../../../index.php?mod=gdp&bot=tes3");
}
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $this->Image('febec.jpg',1,1,5);
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(20,0.7,utf8_decode('Documentação de Funcionários'),0,1,'C');
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
        $header = array( 'Data Cadastro', utf8_decode('Código'), 'Nome', 'CNH', 'CNH Venc.', 'CNH Cat.', 'Tit. Eleitor',
		'Tit. Zona', utf8_decode('Tit. Seção'), utf8_decode('Cônjuge'), 'Cert. Casam.', 'Aposentado', 'Deficiente');

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(2, 1, 4, 2.5, 2, 1.5, 2, 1.5, 1.5, 3.5, 2, 2, 1.5);
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
		
		function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
		}
	
	
    }


    

	
	
	
	
	
	
	
	
	
	
	
	
	//---------------------------aqui select dos campos 
	
	if(($dt_ini && $dt_fim) == '')
	{	$auxsql = "SELECT *
				FROM pessoa_fisica p, funcinario f
				WHERE f.FUN_COD_PEF = p.PEF_CODIGO
				ORDER BY f.FUN_DATA_CADASTRO";
	}
	else
	{
		$auxsql = "	SELECT *
					FROM pessoa_fisica p, funcinario f
					WHERE f.FUN_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."'
					AND f.FUN_COD_PEF = p.PEF_CODIGO
					ORDER BY f.FUN_DATA_CADASTRO

";
	}




    
$result = exec($auxsql);	


    $w = array(2, 1, 4, 2.5, 2, 1.5, 2, 1.5, 1.5, 3.5, 2, 2, 1.5);


    
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

	if($row["FUN_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["FUN_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";




	
	

	
			
			//---------------------------aqui os dados
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["FUN_DATA_CADASTRO"]),0,0,'C',$fill);
			$pdf->Cell($w[1],0.5,$row["FUN_CODIGO"],0,0,'C',$fill); 
			$pdf->Cell($w[2],0.5,utf8_decode($row["PEF_NOME"]),0,0,'C',$fill);            
			$pdf->Cell($w[3],0.5,utf8_decode($row["FUN_CNH"]),0,0,'C',$fill);             
			$pdf->Cell($w[4],0.5,$pdf->databr($row["FUN_CNH_VENC"]),0,0,'C',$fill);
			$pdf->Cell($w[5],0.5,$row["FUN_CATEGORIA"],0,0,'C',$fill);
            $pdf->Cell($w[6],0.5,$row["FUN_TITULO_ELEITOR"],0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,$row["FUN_ZONA"],0,0,'C',$fill);
			$pdf->Cell($w[8],0.5,$row["FUN_SECAO"],0,0,'C',$fill);
			$pdf->Cell($w[9],0.5,utf8_decode($row["FUN_CONJUGE"]),0,0,'C',$fill);
			$pdf->Cell($w[10],0.5,utf8_decode($row["FUN_CERT_CASAMENTO"]),0,0,'C',$fill);
			$pdf->Cell($w[11],0.5,utf8_decode($aposentado),0,0,'C',$fill);
			$pdf->Cell($w[12],0.5,utf8_decode($deficiente),0,0,'C',$fill);
			
	
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de Funcionários: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>