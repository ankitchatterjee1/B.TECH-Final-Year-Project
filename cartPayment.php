<?php
    
$con = mysqli_connect("localhost","root","","shopping_cart");
if(!$con)
{
    echo "database not connected".mysqli_connect_error($con);
}

require('fpdf/fpdf.php');

$pdf = new FPDF('P','pt','A4');
$pdf->SetMargins(30.725, 20.725, 15.725);
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(220);
$pdf->Cell(20,20,'Hello World!',1,0,'C');
$pdf->Ln();
$pdf->Output();
?>