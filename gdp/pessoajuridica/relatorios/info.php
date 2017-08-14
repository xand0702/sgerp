<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];


$sql = "

SELECT p.PEJ_IMAGEM img
FROM pessoa_juridica p
WHERE p.PEJ_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->img;








if($img == '')
{
	$img = 'empresa.jpg';
}






$img = "../img/".$img;


	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Pessoa Jurídica'),0,1,'C');
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
    
	
	
	
			function databr($data)
		{
			$dt = explode("-", $data);
			$dtimp = $dt[2]."/".$dt[1]."/".$dt[0];
			return $dtimp;
		}
	
	
	
	
	}

	
	//---------------------------aqui select dos campos 




	$auxsqlnomes = "	SELECT *
				FROM pessoa_juridica 
				WHERE PEJ_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);


	
	
	
	
	
	
$codcad = $querynomes->PEJ_ID_CAD;


	$auxsqlcad = "	SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->nome;		

















	
	
	
	
	
	
	
$codalt = $querynomes->PEJ_ID_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->nome;		


	
	
	
	
	

	


	
$codpor = $querynomes->PEJ_PORTE;


	$auxsqlpor = "	SELECT POR_NOME nome
				FROM porte 
				WHERE POR_ID = ".$codpor;



$querypor = $conn->prepare($auxsqlpor);

$querypor->execute();

$querypor = $querypor->fetch(PDO::FETCH_OBJ);

$porte = $querypor->nome;		
	
	
	
	
	
	
	
	
	
	
	

	


	
$codseg = $querynomes->PEJ_SEGMENTO;


	$auxsqlseg = "	SELECT SEG_NOME nome
				FROM segmento 
				WHERE SEG_ID = ".$codseg;



$queryseg = $conn->prepare($auxsqlseg);

$queryseg->execute();

$queryseg = $queryseg->fetch(PDO::FETCH_OBJ);

$segmento = $queryseg->nome;		
	
	
	
	
	
	
	
	
	
	
	

	


	
$codtip = $querynomes->PEJ_TIPO;


	$auxsqltip = "	SELECT TIP_NOME nome
				FROM tipo_emp 
				WHERE TIP_ID = ".$codtip;



$querytip = $conn->prepare($auxsqltip);

$querytip->execute();

$querytip = $querytip->fetch(PDO::FETCH_OBJ);

$tipo = $querytip->nome;		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM pessoa_juridica 
				WHERE PEJ_ID = ".$id;

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
            $conta += 1;

			
			
			//---------------------------aqui os dados
			
            $pdf->Cell($w,0.5,utf8_decode("Razão Social: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_RAZAO_SOCIAL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CNPJ: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CNPJ"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Inscrição Estadual: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_INS_ESTATUAL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome Fantasia: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_NOME_FANTASIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone 01: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_TELEFONE1"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Contato 01: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CONTATO1"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone 02: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_TELEFONE2"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Contato 03: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CONTATO2"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone 01: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_TELEFONE3"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Contato 01: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CONTATO3"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Email: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_EMAIL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Site: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_SITE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data fundação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEJ_DATA_FUNDACAO),0,1,'L',$fill);

			$pdf->Cell($w,0.5,utf8_decode("Fundador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_FUNDADOR"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Presidente: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_PRESIDENTE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Segmento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$segmento,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Porte: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$porte,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tipo de Empresa: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$tipo,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Atividade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ATIVIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CEP: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CEP"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Endereço: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ENDERECO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Numero: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_NUMERO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Complemento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_COMPLEMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Bairro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_BAIRRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("País: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_PAIS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ESTADO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CIDADE"]),0,1,'L',$fill);

			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEJ_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_SESSION"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEJ_DATA_ALTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Histórico: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_MOTIVO"]),0,1,'L',$fill);
			
			$pdf->Image($img,1,5,5);
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

?>
