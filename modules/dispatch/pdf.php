<?php

require('../../fpdf/fpdf.php');

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM dispatch
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial','B',18);

$pdf->Cell(190,10,'SAIF TEXTILES',0,1,'C');

$pdf->SetFont('Arial','',11);

$pdf->Cell(
190,
8,
'Contact: 8564968922',
0,
1,
'C'
);

$pdf->Cell(
190,
8,
'Email: zubair@gmail.com',
0,
1,
'C'
);

$pdf->MultiCell(
190,
8,
'Address: Sambhu Compound Khan Compound Gaibi Nagar Bhiwandi',
0,
'C'
);

$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(60,10,'Party Name',1);

$pdf->Cell(
130,
10,
$data['party_name'],
1
);

$pdf->Ln();

$pdf->Cell(60,10,'Takha Number',1);

$pdf->Cell(
130,
10,
$data['takha_no'],
1
);

$pdf->Ln();

$pdf->Cell(60,10,'Dispatch Meter',1);

$pdf->Cell(
130,
10,
$data['dispatch_meter'].' m',
1
);

$pdf->Ln();

$pdf->Cell(60,10,'Vehicle Number',1);

$pdf->Cell(
130,
10,
$data['vehicle_no'],
1
);

$pdf->Ln();

$pdf->Cell(60,10,'Dispatch Date',1);

$pdf->Cell(
130,
10,
$data['dispatch_date'],
1
);

$pdf->Output();

?>