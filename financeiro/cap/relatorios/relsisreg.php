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
        $this->Cell(20,0.7,utf8_decode('Dados do Sistema dos Pedidos'),0,1,'C');
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
        $header = array( 'Data Cadastro',
		'Hora Cad.',
		utf8_decode('Nota'),
		'Cadastrador',
		'Cod. Cadr',
		'IP cad.',
		'Data Alt.',
		'Hora Alt.',
		'Cod. Altr.',
		'IP Alt.',
		utf8_decode('Histórico'));

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(2, 2, 1.5, 4, 1.5, 3, 2, 2, 1.5, 3, 5);
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
			//echo $dt[2]."/".$dt[1]."/".$dt[0]." - ";
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
			
	
    }


    

	
	
	
	
	
	
	
	
	
	
	
	
	//---------------------------aqui select dos campos 
	
	if(($dt_ini && $dt_fim) == '')
	{	$auxsql = "
			
			SELECT  pf.PEF_NOME nome, 
			c.CAP_ID codigo, 

			c.CAP_ID_CAD, c.CAP_HORA_CADASTRO,
			c.CAP_ID_ALTER, c.CAP_HORA_ALTERACAO,
			c.CAP_IP_CADASTRO, c.CAP_IP_ALTERACAO,
			c.CAP_OBSERVACAO, c.CAP_DATA_ALTTERACAO dta,
			c.CAP_ID id, c.CAP_DATA_CADASTRO

			FROM contap c, pessoa_fisica pf, funcinario f
			WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
			AND c.CAP_ID_CAD = f.FUN_CODIGO
			GROUP BY codigo
			ORDER BY CAP_DATA_CADASTRO
			
				";
	}
	else
	{
		$auxsql = "	
		
			SELECT pf.PEF_NOME nome, c.CAP_ID codigo, 

			c.CAP_ID_CAD, c.CAP_HORA_CADASTRO,
			c.CAP_ID_ALTER, c.CAP_HORA_ALTERACAO,
			c.CAP_IP_CADASTRO, c.CAP_IP_ALTERACAO,
			c.CAP_OBSERVACAO, c.CAP_DATA_ALTTERACAO dta,
			c.CAP_ID id, c.CAP_DATA_CADASTRO
			
			FROM contap c, pessoa_fisica pf, funcinario f
			WHERE f.FUN_COD_PEF = pf.PEF_CODIGO
			AND c.CAP_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 
			AND c.CAP_ID_CAD = f.FUN_CODIGO
			GROUP BY codigo
			ORDER BY CAP_DATA_CADASTRO	

";
	}




    
$result = exec($auxsql);	


    $w = array(2, 2, 1.5, 4, 1.5, 3, 2, 2, 1.5, 3, 5);


    
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
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["CAP_DATA_CADASTRO"]),0,0,'C',$fill);
	//		echo $pdf->databr($row["CAP_DATA_CADASTRO"])." 1 - 1 ";
			$pdf->Cell($w[1],0.5,$row["CAP_HORA_CADASTRO"],0,0,'C',$fill); 
			$pdf->Cell($w[2],0.5,$row["codigo"],0,0,'C',$fill);            
			$pdf->Cell($w[3],0.5,utf8_decode($row["nome"]),0,0,'C',$fill);             
			$pdf->Cell($w[4],0.5,$row["CAP_ID_CAD"],0,0,'C',$fill);
			$pdf->Cell($w[5],0.5,$row["CAP_IP_CADASTRO"],0,0,'C',$fill);
            $pdf->Cell($w[6],0.5,$pdf->databr($row["dta"]),0,0,'C',$fill);
	//		echo $pdf->databr($row["dta"])." 2 - 2 ";
			$pdf->Cell($w[7],0.5,$row["CAP_HORA_ALTERACAO"],0,0,'C',$fill);
			$pdf->Cell($w[8],0.5,$row["CAP_ID_ALTER"],0,0,'C',$fill);
			$pdf->Cell($w[9],0.5,$row["CAP_IP_ALTERACAO"],0,0,'C',$fill);
			$pdf->Cell($w[10],0.5,utf8_decode($row["CAP_OBSERVACAO"]),0,0,'C',$fill);
			
			
			 
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de NOTAS: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>
