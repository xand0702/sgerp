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
	direciona("../../../index.php?mod=gdp&bot=tes2");
}
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $this->Image('febec.jpg',1,1,5);
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(20,0.7,utf8_decode('Dados Institucionais'),0,1,'C');
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
        $header = array( 'Data Cadastro', utf8_decode('Código'), utf8_decode('Razão Social'), 'CNPJ', 'Ins. Estadual', 
		'Nome Fantasia', 'Dt. Fund.', utf8_decode('Presidente'),	'Segmento', 'Porte', 'Atividade');

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(2, 1, 4, 2.5, 2, 3, 2, 3.5, 2, 1.5, 4);
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
	
	
	
    }


    

	
	
	
	
	
	
	
	
	
	
	
	
	//---------------------------aqui select dos campos 
	
	if(($dt_ini && $dt_fim) == '')
	{	$auxsql = "SELECT *
					FROM pessoa_juridica pf
					ORDER BY pf.PEJ_DATA_CADASTRO";}
	else{
	$auxsql = "SELECT *
FROM pessoa_juridica pf
WHERE pf.PEJ_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."'
ORDER BY pf.PEJ_DATA_CADASTRO

";
	}




    
$result = exec($auxsql);	




    $w = array(2, 1, 4, 2.5, 2, 3, 2, 3.5, 2, 1.5, 4);
    
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







$codporte = $row["PEJ_PORTE"];

	$auxsqlporte = "	SELECT POR_NOME nome
						FROM porte 
						WHERE POR_ID = ".$codporte;

$queryporte = $conn->prepare($auxsqlporte);

$queryporte->execute();

$queryporte = $queryporte->fetch(PDO::FETCH_OBJ);

$porte = $queryporte->nome;	


	
	

	
	




$codseg = $row["PEJ_SEGMENTO"];

	$auxsqlseg = "	SELECT SEG_NOME nome
				FROM segmento 
				WHERE SEG_ID = ".$codseg;

$queryseg = $conn->prepare($auxsqlseg);

$queryseg->execute();

$queryseg = $queryseg->fetch(PDO::FETCH_OBJ);

$segmento = $queryseg->nome;	


	
	

	
	





	
	

	
	
	
	
	
	




			
			
			//---------------------------aqui os dados
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["PEJ_DATA_CADASTRO"]),0,0,'C',$fill);
            
			$pdf->Cell($w[1],0.5,$row["PEJ_CODIGO"],0,0,'C',$fill);
            
			$pdf->Cell($w[2],0.5,utf8_decode($row["PEJ_RAZAO_SOCIAL"]),0,0,'C',$fill);
            
			$pdf->Cell($w[3],0.5,$row["PEJ_CNPJ"],0,0,'C',$fill);
            
			$pdf->Cell($w[4],0.5,$row["PEJ_INS_ESTATUAL"],0,0,'C',$fill);
            
			$pdf->Cell($w[5],0.5,utf8_decode($row["PEJ_NOME_FANTASIA"]),0,0,'C',$fill);
            $pdf->Cell($w[6],0.5,$pdf->databr($row["PEJ_DATA_FUNDACAO"]),0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,utf8_decode($row["PEJ_PRESIDENTE"]),0,0,'C',$fill);
			
			$pdf->Cell($w[8],0.5,$segmento,0,0,'C',$fill);
			$pdf->Cell($w[9],0.5,$porte,0,0,'C',$fill);
			$pdf->Cell($w[10],0.5,utf8_decode($row["PEJ_ATIVIDADE"]),0,0,'C',$fill);
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de Pessoas Jurídicas: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>
