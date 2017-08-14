<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];


$sql = "

SELECT p.PEF_IMAGEM img, p.PEF_SEXO sexo
FROM pessoa_fisica p
WHERE p.PEF_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->img;

$sexo = $query->sexo;








if($img == '')
{
	if($sexo == 1)
	{
		$img = 'masculino.jpg';
	}
	elseif($sexo == 2)
	{
		$img = 'feminino.jpg';
	}
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
        $this->Cell(10,0.7,utf8_decode('Pessoa física'),0,1,'C');
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
				FROM pessoa_fisica 
				WHERE PEF_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);





























	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
$codsexo = $querynomes->PEF_SEXO;


	$auxsqlsex = "	SELECT SEX_NOME nome
				FROM sexo 
				WHERE SEX_ID = ".$codsexo;



$querysex = $conn->prepare($auxsqlsex);

$querysex->execute();

$querysex = $querysex->fetch(PDO::FETCH_OBJ);

$sexo = $querysex->nome;	


if($sexo == 'M')
		$sexo = 'Masculino';
else
		$sexo = 'Feminino';










	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	




	
	




	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	


	
$codciv = $querynomes->PEF_ESTADO_CIVIL;


	$auxsqlciv = "	SELECT CIV_NOME nome
				FROM civil 
				WHERE CIV_ID = ".$codciv;



$queryciv = $conn->prepare($auxsqlciv);

$queryciv->execute();

$queryciv = $queryciv->fetch(PDO::FETCH_OBJ);

$estcivil = $queryciv->nome;		
	
	
	
	
	
	
	
	
	




	
	
	
	
	
	
	
$codcad = $querynomes->PEF_ID_USUARIO;


	$auxsqlcad = "	SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->nome;		

















	
	
	
	
	
	
	
$codalt = $querynomes->PEF_ID_USUARIO_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME nome
FROM funcinario f, pessoa_fisica p
WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->nome;		

















	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	


	
	
	
	
	$auxsql = "	SELECT *
				FROM pessoa_fisica 
				WHERE PEF_ID = ".$id;

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
			
            $pdf->Cell($w,0.5,utf8_decode("Nome: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NOME"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_TELEFONE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CPF: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CPF"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Celular: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CELULAR"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Email: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_EMAIL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("RG: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_RG"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Orgão expeditor: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ORGEX"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da expedição: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_EXPEDICAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data de nascimento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_NASCIMENTO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome da mãe: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_MAE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome do pai: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_PAI"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sexo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$sexo,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Endereço: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ENDERECO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Numero: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NUMERO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Complemento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_COMPLEMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Bairro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_BAIRRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CEP: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CEP"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("País: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_PAIS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ESTADO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nacinalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NACIONALIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Naturalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NATURALIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado civil: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$estcivil,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ID_USUARIO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_SESSION"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_ALTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ID_USUARIO_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Histórico: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_MOTIVO"]),0,1,'L',$fill);
			
			$pdf->Image($img,1,5,5);
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

?>
