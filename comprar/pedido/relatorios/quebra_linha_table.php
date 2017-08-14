<?php
 
   require('fpdf.php');
  
   class PDF extends FPDF
   {
   var $widths;
   var $aligns;
  
   function SetWidths($w)
   {
     //Set the array of column widths
     $this->widths=$w;
   }
  
   function SetAligns($a)
   {
     //Set the array of column alignments
     $this->aligns=$a;
   }
  
   function Row($data)
   {
     //Calculate the height of the row
     $nb=0;
     for($i=0;$i< count($data);$i++)
         $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
     $h=5*$nb;
     //Issue a page break first if needed
     $this->CheckPageBreak($h);
     //Draw the cells of the row
     for($i=0;$i< count($data);$i++)
     {
         $w=$this->widths[$i];
         $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
         //Save the current position
         $x=$this->GetX();
         $y=$this->GetY();
         //Draw the border
         $this->Rect($x,$y,$w,$h);
         //Print the text
         $this->MultiCell($w,5,$data[$i],0,$a);
         //Put the position to the right of the cell
         $this->SetXY($x+$w,$y);
     }
     //Go to the next line
     $this->Ln($h);
   }
  
   function CheckPageBreak($h)
   {
     //If the height h would cause an overflow, add a new page immediately
     if($this->GetY()+$h>$this->PageBreakTrigger)
         $this->AddPage($this->CurOrientation);
   }
  
   function NbLines($w,$txt)
   {
     //Computes the number of lines a MultiCell of width w will take
     $cw=&$this->CurrentFont['cw'];
     if($w==0)
         $w=$this->w-$this->rMargin-$this->x;
     $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
     $s=str_replace("\r",'',$txt);
     $nb=strlen($s);
     if($nb>0 and $s[$nb-1]=="\n")
         $nb--;
     $sep=-1;
     $i=0;
     $j=0;
     $l=0;
     $nl=1;
     while($i<$nb)
     {
         $c=$s[$i];
         if($c=="\n")
         {
             $i++;
             $sep=-1;
             $j=$i;
             $l=0;
             $nl++;
             continue;
         }
         if($c==' ')
             $sep=$i;
         $l+=$cw[$c];
         if($l>$wmax)
         {
             if($sep==-1)
             {
                 if($i==$j)
                     $i++;
             }
             else
                 $i=$sep+1;
             $sep=-1;
             $j=$i;
             $l=0;
             $nl++;
         }
         else
             $i++;
     }
     return $nl;
   }
   
   // Page header
    function Header()
    {
        $this->Image('febec.jpg',10,7,35);
        $this->SetFont('Arial','B',15);
        $this->Cell(1);
        //$this->Cell(10,0.7,utf8_decode('Relatório de voluntários por cidade'),0,1,'C');
        $this->Cell(220,0,utf8_decode('Relatório de entidades por cidade'),10,10,'C');
        $this->Cell(5);
        $this->SetFont('Arial','B',9);
        $this->Cell(215,10,utf8_decode('Emissão: ').date ("d/m/Y H:i:s").' - '.@$_SESSION['cd_usuario'],0,0,'C');
        $this->Ln(9);  
        
        $this->SetFont('Arial','B',8);
        $header = array('Entidade', 'Cidade', 'Contato / Presidente', utf8_decode('Endereço'), 'Telefone');

        $this->SetFillColor(255,255,255);
        
         $w = array(45, 35, 40, 50,25);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],5,$header[$i],1,0,'C',true);
        $this->Ln(5);        
        
    }
   
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-6);
        //$this->Line(20, 27.7, 1, 27.7);
        $this->Image('sisge.jpg',10,290,18);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(200,2,utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'R');
    }
   
   }

?>