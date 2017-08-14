<?php
    
    require('fpdf.php');

    session_start();
require_once('../../../raiz/arq/conecta2.php'); 
    
	
	$id = $_POST['id'];
	$tpess = $_POST['tpess'];
	$codpess = $_POST['codpess'];

	
	
	
	
	
if($tpess == 'pf')
	
	{	
	
	
	
	
	
	
	
	
	
	
	
	
	
$sql = "

SELECT p.PEF_IMAGEM, p.PEF_SEXO
FROM tercerizados f, pessoa_fisica p
WHERE f.TER_COD_PESSOA = p.PEF_CODIGO AND f.TER_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->PEF_IMAGEM;

$sexo = $query->PEF_SEXO;








if($img == '')
{
	if($sexo == 1)
	{
		$img = "masculino.jpg";
	}
	elseif($sexo == 2)
	{
		$img = "feminino.jpg";
	}
	elseif($sexo == 3)
	{
		$img = "outros.jpg";
	}
}
else
{
	$img = $img;
}






$img = "../../pessoafisica/img/".$img;


	
	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Tercerizado'),0,1,'C');
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
    
			function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
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
	
	
	
	
	}

	
	//---------------------------aqui select dos campos 




	$auxsqlnomes = "	SELECT *
						FROM tercerizados f, pessoa_fisica p
						WHERE f.TER_COD_PESSOA = p.PEF_CODIGO AND f.TER_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);


	
	

$sexo = $querynomes->PEF_SEXO;
		
$sqlsexo = 'SELECT *
FROM sexo
WHERE SEX_ID = '.$sexo.'


';


$query = $conn->prepare($sqlsexo);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$sexo = $query->SEX_NOME;	

if($sexo == 'F')
	$sexonome = "Feminino";
	elseif($sexo == 'M')
	{$sexonome = "Masculino";}
elseif(($sexo == 'O'))
	{$sexonome = "outros";}
		
	








	
	
$codcad = $querynomes->TER_ID_CAD;


	$auxsqlcad = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->PEF_NOME;		



















$civil = $querynomes->PEF_ESTADO_CIVIL;
		
$sqlcivil = 'SELECT *
FROM civil
WHERE CIV_ID = '.$civil.'


';


$query = $conn->prepare($sqlcivil);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$civil = $query->CIV_NOME;








	
	
	
	
	
	
	
$codalt = $querynomes->TER_ID_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->PEF_NOME;		


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM tercerizados f, pessoa_fisica p
				WHERE f.TER_COD_PESSOA = p.PEF_CODIGO AND f.TER_ID = ".$id;

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
		
		/*
	if($row["TER_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["TER_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";		
		*/
            $conta += 1;

			
			$pdf->Image($img,1,5,5);
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
			
			$pdf->Cell($w,0.5,utf8_decode("Orgão de Expedido: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ORGEX"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data de expedição: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_EXPEDICAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data de Nascimento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->PEF_DATA_NASCIMENTO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome da Mãe: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_MAE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome do Pai: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_PAI"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sexo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$sexonome,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado Civil: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$civil,0,1,'L',$fill);

			$pdf->Cell($w,0.5,utf8_decode("CEP: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CEP"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Endereço: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ENDERECO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Número: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NUMERO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Complemento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_COMPLEMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Bairro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_BAIRRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_CIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_ESTADO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("País: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_PAIS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nacionalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NACIONALIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Naturalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEF_NATURALIDADE"]),0,1,'L',$fill);
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Finalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_FINALIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Custo.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->moeda($querynomes->TER_CUSTO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Vencimento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_VENC),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tempo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_TEMPO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nº de Pessoas: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_N_PESSOAS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Início: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_INI),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Fim: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_FIM),0,1,'L',$fill);
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_SESSION_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_ALTTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Observação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_OBSERVACAO"]),0,1,'L',$fill);
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
	
	
	
	
	
	
	
	}
	elseif($tpess == 'pj')
	{
		

	
	
	
	
	
	
	
	
	
	
$sql = "

SELECT p.PEJ_IMAGEM
FROM tercerizados f, pessoa_juridica p
WHERE f.TER_COD_PESSOA = p.PEJ_CODIGO AND f.TER_ID = ".$id."

" ;


$query = $conn->prepare($sql);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$img = $query->PEJ_IMAGEM;








if($img == '')
{
	$img = "empresa.jpg";
	
}
else
{
	$img = $img;
}
	




$img = "../../pessoajuridica/img/".$img;


	
    class PDF extends FPDF
    {
		
		
    // Page header
    function Header()
    {
		

		
		
        $this->Image('febec.jpg',1,1,5);
		//$this->Image($img,1,5,5);
		
        $this->SetFont('Arial','B',15);
        $this->Cell(5);
        $this->Cell(10,0.7,utf8_decode('Cliente'),0,1,'C');
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
    
	
			function moeda($moeda)
		{
		$md = @number_format($moeda, 2, ',', ' ');
		$md = "R$ ".$md;
		return $md;
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
	
	
	
	
	}

	
	//---------------------------aqui select dos campos 




	$auxsqlnomes = "	SELECT *
						FROM tercerizados f, pessoa_juridica p
						WHERE f.TER_COD_PESSOA = p.PEJ_CODIGO AND f.TER_ID = ".$id;

$querynomes = $conn->prepare($auxsqlnomes);

$querynomes->execute();

$querynomes = $querynomes->fetch(PDO::FETCH_OBJ);


	
	
	
	
	
	
$codcad = $querynomes->TER_ID_CAD;


	$auxsqlcad = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codcad;



$querycad = $conn->prepare($auxsqlcad);

$querycad->execute();

$querycad = $querycad->fetch(PDO::FETCH_OBJ);

$usecad = $querycad->PEF_NOME;		










$porte = $querynomes->PEJ_PORTE;
		
$sqlporte = 'SELECT *
FROM porte
WHERE POR_ID = '.$porte.'


';


$query = $conn->prepare($sqlporte);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$porte = $query->POR_NOME;








	
	
	
	
	







$tipo = $querynomes->PEJ_TIPO;
		
$sqltipo = 'SELECT *
FROM tipo_emp
WHERE TIP_ID = '.$tipo.'


';


$query = $conn->prepare($sqltipo);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$tipo = $query->TIP_NOME;








	
	
	
	
	







$segmento = $querynomes->PEJ_SEGMENTO;
		
$sqlsegmento = 'SELECT *
FROM segmento
WHERE SEG_ID = '.$segmento.'


';


$query = $conn->prepare($sqlsegmento);

$query->execute();

$query = $query->fetch(PDO::FETCH_OBJ);

$segmento = $query->SEG_NOME;








	
	
	
	
	














	
	
	
	
	
	
	
$codalt = $querynomes->TER_ID_ALTER;


	$auxsqlalt = "	SELECT p.PEF_NOME
					FROM funcinario f, pessoa_fisica p
					WHERE f.FUN_COD_PEF = p.PEF_CODIGO AND f.FUN_CODIGO = ".$codalt;



$queryalt = $conn->prepare($auxsqlalt);

$queryalt->execute();

$queryalt = $queryalt->fetch(PDO::FETCH_OBJ);

$usealt = $queryalt->PEF_NOME;		


	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	$auxsql = "	SELECT *
				FROM tercerizados f, pessoa_juridica p
				WHERE f.TER_COD_PESSOA = p.PEJ_CODIGO AND f.TER_ID = ".$id;

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
		/*
		
	if($row["TER_APOSENTADO"] == 1)
		$aposentado = "SIM";
	else
		$aposentado = "NÃO";

	if($row["TER_DEFICIENTE"] == 1)
		$deficiente = "SIM";
	else
		$deficiente = "NÃO";		
		*/
            $conta += 1;

			
			$pdf->Image($img,1,5,5);
			//---------------------------aqui os dados
			
            $pdf->Cell($w,0.5,utf8_decode("Razão Social: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_RAZAO_SOCIAL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("CNPJ: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CNPJ"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Inscrição Estadual: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_INS_ESTATUAL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nome Fantasia : "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_NOME_FANTASIA"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Telefone: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_TELEFONE1"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Contato: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CONTATO1"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Email: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_EMAIL"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Site: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_SITE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data de Fundação: "),0,0,'R',$fill);
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
			
			$pdf->Cell($w,0.5,utf8_decode("Número: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_NUMERO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Complemento.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_COMPLEMENTO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Bairro.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_BAIRRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Cidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_CIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Estado: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_ESTADO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("País: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["PEJ_PAIS"]),0,1,'L',$fill);
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Finalidade: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_FINALIDADE"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Custo.: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->moeda($querynomes->TER_CUSTO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Vencimento: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_VENC),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Tempo: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_TEMPO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Nº de Pessoas: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_N_PESSOAS"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Início: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_INI),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data Fim: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_FIM),0,1,'L',$fill);
			
			
			
			
			
			$pdf->Cell($w,0.5,utf8_decode("Data do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_CADASTRO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora do cadastro: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_HORA_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usecad,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_ID_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_IP_CADASTRO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do cadastrador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_SESSION_CAD"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Data da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$pdf->databr($querynomes->TER_DATA_ALTTERACAO),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Hora da alteração: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_HORA_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,$usealt,0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Código do usuário alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_ID_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("IP do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_IP_ALTERACAO"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Sessão do alterador: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_SESSION_ALTER"]),0,1,'L',$fill);
			
			$pdf->Cell($w,0.5,utf8_decode("Observação: "),0,0,'R',$fill);
            $pdf->Cell($w,0.5,utf8_decode($row["TER_OBSERVACAO"]),0,1,'L',$fill);
			
			
			
            $pdf->Ln();
            $fill = !$fill;
        }

    $pdf->Output();

	
	
	
	
	
			
		
		
	}
	
	
	
?>
