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
        $this->Cell(20,0.7,utf8_decode('Contatos de Verificação do Cliente'),0,1,'C');
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
        $header = array( 'Data Cadastro', utf8_decode('Código'), 'Nome', 'Telefone 1', 'Contato 1',
		'Telefone 2', 'Contato 2', 'Telefone 3', 'Contato 3');

        $this->SetFillColor(255,255,255);
        // Header
        $w = array(3, 1.5, 4, 3, 3, 3, 3, 3, 4);
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
	{	$auxsql = "

			SELECT  pf.PEF_NOME nome, c.CLI_CODIGO codigo, 
			c.CLI_TEL_CONFIRMACAO1, c.CLI_CONTATO1,
			c.CLI_TEL_CONFIRMACAO2, c.CLI_CONTATO2,
			c.CLI_TEL_CONFIRMACAO3, c.CLI_CONTATO3,
			c.CLI_ID id, c.CLI_DATA_CADASTRO
			FROM cliente c, pessoa_fisica pf
			WHERE c.CLI_COD_PESSOA = pf.PEF_CODIGO 
			GROUP BY nome
			UNION ALL
			SELECT pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo, 
			c.CLI_TEL_CONFIRMACAO1, c.CLI_CONTATO1,
			c.CLI_TEL_CONFIRMACAO2, c.CLI_CONTATO2,
			c.CLI_TEL_CONFIRMACAO3, c.CLI_CONTATO3,
			c.CLI_ID id, c.CLI_DATA_CADASTRO
			FROM cliente c, pessoa_juridica pj
			WHERE c.CLI_COD_PESSOA = pj.PEJ_CODIGO
			GROUP BY nome
			ORDER BY CLI_DATA_CADASTRO

				";
	}
	else
	{
		$auxsql = "	
		
			SELECT pf.PEF_NOME nome, c.CLI_CODIGO codigo, 
			c.CLI_TEL_CONFIRMACAO1, c.CLI_CONTATO1,
			c.CLI_TEL_CONFIRMACAO2, c.CLI_CONTATO2,
			c.CLI_TEL_CONFIRMACAO3, c.CLI_CONTATO3,
			c.CLI_ID id, c.CLI_DATA_CADASTRO
			FROM cliente c, pessoa_fisica pf
			WHERE c.CLI_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 
			AND c.CLI_COD_PESSOA = pf.PEF_CODIGO 
			GROUP BY nome
			UNION ALL
			SELECT pj.PEJ_RAZAO_SOCIAL nome, c.CLI_CODIGO codigo, 
			c.CLI_TEL_CONFIRMACAO1, c.CLI_CONTATO1,
			c.CLI_TEL_CONFIRMACAO2, c.CLI_CONTATO2,
			c.CLI_TEL_CONFIRMACAO3, c.CLI_CONTATO3,
			c.CLI_ID id, c.CLI_DATA_CADASTRO
			FROM cliente c, pessoa_juridica pj
			WHERE c.CLI_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."'
			AND c.CLI_COD_PESSOA = pj.PEJ_CODIGO
			GROUP BY nome
			ORDER BY CLI_DATA_CADASTRO	

";
	}




    
$result = exec($auxsql);	


    $w = array(3, 1.5, 4, 3, 3, 3, 3, 3, 4);


    
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
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["CLI_DATA_CADASTRO"]),0,0,'C',$fill);
			$pdf->Cell($w[1],0.5,$row["codigo"],0,0,'C',$fill); 
			$pdf->Cell($w[2],0.5,utf8_decode($row["nome"]),0,0,'C',$fill);            
			$pdf->Cell($w[3],0.5,utf8_decode($row["CLI_TEL_CONFIRMACAO1"]),0,0,'C',$fill);             
			$pdf->Cell($w[4],0.5,utf8_decode($row["CLI_CONTATO1"]),0,0,'C',$fill);
			$pdf->Cell($w[5],0.5,utf8_decode($row["CLI_TEL_CONFIRMACAO2"]),0,0,'C',$fill);             
			$pdf->Cell($w[6],0.5,utf8_decode($row["CLI_CONTATO2"]),0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,utf8_decode($row["CLI_TEL_CONFIRMACAO3"]),0,0,'C',$fill);             
			$pdf->Cell($w[8],0.5,utf8_decode($row["CLI_CONTATO3"]),0,0,'C',$fill);
			
			
			
	
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de Funcionários: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>