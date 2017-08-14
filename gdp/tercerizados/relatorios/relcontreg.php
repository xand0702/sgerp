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
        $this->Cell(20,0.7,utf8_decode('Dados Complementares dos Tercerizados'),0,1,'C');
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
        $header = array( 'Data Cadastro', utf8_decode('Código'), 'Nome', utf8_decode('Data Início'), 
		 utf8_decode('Data Fim'),
		 utf8_decode('Telefone'),  utf8_decode('Endereço'), 
		  utf8_decode('Bairro'),  utf8_decode('Cidade'));

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

SELECT pf.PEF_DATA_NASCIMENTO nas_fun, pf.PEF_CPF doc, c.TER_PESSOA pessoa,
pf.PEF_NOME nome, c.TER_CODIGO codigo, 
c.TER_ID id, c.TER_DATA_CADASTRO,

pf.PEF_TELEFONE tel, pf.PEF_ENDERECO endr, pf.PEF_BAIRRO brr, pf.PEF_CIDADE cid, 

c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM

FROM tercerizados c, pessoa_fisica pf
WHERE c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT pj.PEJ_DATA_FUNDACAO nas_fun, pj.PEJ_CNPJ doc, c.TER_PESSOA pessoa, 
pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo,
c.TER_ID id, c.TER_DATA_CADASTRO,

pj.PEJ_TELEFONE1 tel, pj.PEJ_ENDERECO endr, pj.PEJ_BAIRRO brr, pj.PEJ_CIDADE cid,
	
c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM

FROM tercerizados c, pessoa_juridica pj
WHERE c.TER_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY TER_DATA_CADASTRO

				";
	}
	else
	{
		$auxsql = "	
SELECT c.TER_DATA_CADASTRO, pf.PEF_DATA_NASCIMENTO nas_fun, 
pf.PEF_CPF doc, pf.PEF_NOME nome, c.TER_CODIGO codigo, 
c.TER_PESSOA pessoa, c.TER_ID id,
			
pf.PEF_TELEFONE tel, pf.PEF_ENDERECO endr, pf.PEF_BAIRRO brr, pf.PEF_CIDADE cid, 
			
c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM

FROM tercerizados c, pessoa_fisica pf
WHERE c.TER_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."' 
AND c.TER_COD_PESSOA = pf.PEF_CODIGO 
GROUP BY nome
UNION ALL
SELECT c.TER_DATA_CADASTRO, pj.PEJ_DATA_FUNDACAO nas_fun, 
pj.PEJ_CNPJ doc, pj.PEJ_RAZAO_SOCIAL nome, c.TER_CODIGO codigo,
c.TER_PESSOA pessoa, c.TER_ID id,
			
pj.PEJ_TELEFONE1 tel, pj.PEJ_ENDERECO endr, pj.PEJ_BAIRRO brr, pj.PEJ_CIDADE cid,
			
c.TER_FINALIDADE , c.TER_PESSOA, c.TER_ID id,
c.TER_CUSTO, c.TER_DATA_VENC, c.TER_TEMPO, c.TER_N_PESSOAS,
c.TER_DATA_INI, c.TER_DATA_FIM

FROM tercerizados c, pessoa_juridica pj
WHERE c.TER_DATA_CADASTRO BETWEEN '".$dt_ini."' AND '".$dt_fim."'
AND c.TER_COD_PESSOA = pj.PEJ_CODIGO
GROUP BY nome
ORDER BY TER_DATA_CADASTRO


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
			
            
			$pdf->Cell($w[0],0.5,$pdf->databr($row["TER_DATA_CADASTRO"]),0,0,'C',$fill);
			$pdf->Cell($w[1],0.5,$row["codigo"],0,0,'C',$fill); 
			$pdf->Cell($w[2],0.5,utf8_decode($row["nome"]),0,0,'C',$fill);            
			$pdf->Cell($w[3],0.5,$pdf->databr($row["TER_DATA_INI"]),0,0,'C',$fill);             
			$pdf->Cell($w[4],0.5,$pdf->databr($row["TER_DATA_FIM"]),0,0,'C',$fill);
			$pdf->Cell($w[5],0.5,utf8_decode($row["tel"]),0,0,'C',$fill);             
			$pdf->Cell($w[6],0.5,utf8_decode($row["endr"]),0,0,'C',$fill);
			$pdf->Cell($w[7],0.5,utf8_decode($row["brr"]),0,0,'C',$fill);             
			$pdf->Cell($w[8],0.5,utf8_decode($row["cid"]),0,0,'C',$fill);
			
			
			
	
			
			 
            $pdf->Ln();
            $fill = !$fill;
        }
  
    $pdf->Cell(0,1,  utf8_decode("Total de Tercerizados: ").$conta,0,0,'R',$fill);    

    $pdf->Output();

?>