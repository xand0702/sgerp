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
        $this->Cell(20,0.7,utf8_decode('Dados Complementares dos Itens do Estoque'),0,1,'C');
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
        $header = array( 'Data Cadastro', utf8_decode('Tipo Mat.'), utf8_decode('ID Item'),
		utf8_decode('Cód. Prod.'),
		utf8_decode('Descrição'), 
		  utf8_decode('CST'),  utf8_decode('CFOP'),
		  utf8_decode('NCM/SH'), 
		 utf8_decode('NOTA'));

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
	{	$auxsql = "SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota, pa.IPA_DATA_CADASTRO cadastro,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'

UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota, mc.IMC_DATA_CADASTRO cadastro,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'
ORDER BY cadastro
				";
	}
	else
	{
		$auxsql = "	
SELECT 'P.A.' material, pa.IPA_ID id,
pa.IPA_ENTRADAPA idnota, pa.IPA_DATA_CADASTRO cadastro,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


ep.EPA_NOTA nota,
pa.IPA_CST cst, pa.IPA_CFOP cfop,
pa.IPA_NCMSH ncmh, pa.IPA_SITUACAO sit,
pa.IPA_DATA_CADASTRO datac,



pa.IPA_QUANTIDADE quant, pa.IPA_PRECOUN valor,
FORMAT(pa.IPA_QUANTIDADE * pa.IPA_PRECOUN, 2) total,
pa.IPA_UN un
FROM itenspa pa, produto p, entradapa ep
WHERE pa.IPA_PRODUTO = p.PRO_ID
AND pa.IPA_ENTRADAPA = ep.EPA_ID
AND pa.IPA_SITUACAO = 'SIM'
AND pa.IPA_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 

UNION ALL

SELECT 'M.C.' material, mc.IMC_ID id,
mc.IMC_ENTRADAPA idnota, mc.IMC_DATA_CADASTRO cadastro,
p.PRO_ID idpro, p.PRO_CODIGO codpro, p.PRO_AB_DESCRICAO nome,


em.MCA_NOTA nota,
mc.IMC_CST cst, mc.IMC_CFOP cfop,
mc.IMC_NCMSH ncmh, mc.IMC_SITUACAO sit,
mc.IMC_DATA_CADASTRO datac,


mc.IMC_QUANTIDADE quant, mc.IMC_PRECOUN valor,
FORMAT(mc.IMC_QUANTIDADE * mc.IMC_PRECOUN, 2) total, 
mc.IMC_UN un
FROM itensmc mc, produto p, entradamc em
WHERE mc.IMC_PRODUTO = p.PRO_ID
AND mc.IMC_ENTRADAPA = em.MCA_ID
AND mc.IMC_SITUACAO = 'SIM'
AND mc.IMC_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 
ORDER BY cadastro
		
		
		
			

";
	}







// try 	
	// {
		// $conn->exec($auxsql);
		
	// }
	// catch(PDOException $e)
    // {
		// echo "Connection failed: " . $e->getMessage();
    // }



    
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
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["cadastro"]),0,0,'C',$fill);
            
			$pdf->Cell($w[1],0.5,utf8_decode($row["material"]),0,0,'C',$fill);
            
			$pdf->Cell($w[2],0.5,utf8_decode($row["id"]),0,0,'C',$fill);
            
			$pdf->Cell($w[3],0.5,utf8_decode($row["codpro"]),0,0,'C',$fill);
            
			$pdf->Cell($w[4],0.5,utf8_decode($row["nome"]),0,0,'C',$fill);
            
			$pdf->Cell($w[5],0.5,utf8_decode($row["cst"]),0,0,'C',$fill);
            $pdf->Cell($w[6],0.5,utf8_decode($row["cfop"]),0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,utf8_decode($row["ncmh"]),0,0,'C',$fill);
			$pdf->Cell($w[8],0.5,utf8_decode($row["nota"]),0,0,'C',$fill);
		
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de Itens: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>