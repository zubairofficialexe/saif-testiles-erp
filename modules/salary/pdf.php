<?php

require('../../fpdf/fpdf.php');

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM salary
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial','B',18);

$pdf->Cell(190,10,'SAIF TEXTILES',0,1,'C');

$pdf->Ln(10);

$pdf->SetFont('Arial','',12);

$pdf->Cell(60,10,'Worker',1);

$pdf->Cell(130,10,$data['worker_name'],1);

$pdf->Ln();

$pdf->Cell(60,10,'Meter',1);

$pdf->Cell(130,10,$data['total_meter'],1);

$pdf->Ln();

$pdf->Cell(60,10,'Total Amount',1);

$pdf->Cell(130,10,'Rs '.$data['total_amount'],1);

$pdf->Ln();

$pdf->Output();

?>