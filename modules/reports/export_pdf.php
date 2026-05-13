<?php

require('../../fpdf/fpdf.php');

include('../../includes/auth_check.php');

$month = $_GET['month'];

$pdf = new FPDF();

$pdf->AddPage();





/*
|--------------------------------------------------------------------------
| COMPANY HEADER
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',18);

$pdf->Cell(190,10,'SAIF TEXTILES',0,1,'C');

$pdf->SetFont('Arial','',11);

$pdf->Cell(
190,
8,
'Contact: 9766000321',
0,
1,
'C'
);

$pdf->Cell(
190,
8,
'Email: madsaif64@gmail.com',
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

$pdf->Ln(5);

$pdf->SetFont('Arial','B',14);

$pdf->Cell(
190,
10,
'MONTHLY MASTER ERP REPORT',
0,
1,
'C'
);

$pdf->Cell(
190,
8,
'Month: '.$month,
0,
1,
'C'
);

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| BEAM REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Beam Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15,10,'ID',1);

$pdf->Cell(50,10,'Party',1);

$pdf->Cell(45,10,'Quality',1);

$pdf->Cell(40,10,'Weight',1);

$pdf->Cell(40,10,'Status',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM beams
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(15,10,$row['id'],1);

$pdf->Cell(50,10,$row['party_name'],1);

$pdf->Cell(45,10,$row['quality'],1);

$pdf->Cell(40,10,$row['beam_weight'],1);

$pdf->Cell(40,10,$row['status'],1);

$pdf->Ln();

}

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| WEFT REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Weft Inventory Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(45,10,'Party',1);

$pdf->Cell(45,10,'Yarn',1);

$pdf->Cell(35,10,'Received',1);

$pdf->Cell(30,10,'Used',1);

$pdf->Cell(35,10,'Remaining',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM weft_inventory
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(45,10,$row['party_name'],1);

$pdf->Cell(45,10,$row['yarn_type'],1);

$pdf->Cell(35,10,$row['received_weight'],1);

$pdf->Cell(30,10,$row['used_weight'],1);

$pdf->Cell(35,10,$row['remaining_weight'],1);

$pdf->Ln();

}

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| PRODUCTION REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Production Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(45,10,'Loom',1);

$pdf->Cell(55,10,'Worker',1);

$pdf->Cell(45,10,'Takha',1);

$pdf->Cell(45,10,'Meter',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM production
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(45,10,$row['loom_no'],1);

$pdf->Cell(55,10,$row['worker_name'],1);

$pdf->Cell(45,10,$row['takha_no'],1);

$pdf->Cell(45,10,$row['meter_produced'],1);

$pdf->Ln();

}

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| DISPATCH REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Dispatch Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(50,10,'Party',1);

$pdf->Cell(40,10,'Takha',1);

$pdf->Cell(40,10,'Meter',1);

$pdf->Cell(60,10,'Vehicle',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM dispatch
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(50,10,$row['party_name'],1);

$pdf->Cell(40,10,$row['takha_no'],1);

$pdf->Cell(40,10,$row['dispatch_meter'],1);

$pdf->Cell(60,10,$row['vehicle_no'],1);

$pdf->Ln();

}

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| PAYMENT REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Payment Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(55,10,'Party',1);

$pdf->Cell(45,10,'Total',1);

$pdf->Cell(45,10,'Received',1);

$pdf->Cell(45,10,'Pending',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM payments
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(55,10,$row['party_name'],1);

$pdf->Cell(45,10,'Rs '.$row['total_amount'],1);

$pdf->Cell(45,10,'Rs '.$row['received_amount'],1);

$pdf->Cell(45,10,'Rs '.$row['pending_amount'],1);

$pdf->Ln();

}

$pdf->Ln(10);





/*
|--------------------------------------------------------------------------
| SALARY REPORT
|--------------------------------------------------------------------------
*/

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Salary Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(55,10,'Worker',1);

$pdf->Cell(45,10,'Total',1);

$pdf->Cell(45,10,'Advance',1);

$pdf->Cell(45,10,'Pending',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM salary
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(55,10,$row['worker_name'],1);

$pdf->Cell(45,10,'Rs '.$row['total_amount'],1);

$pdf->Cell(45,10,'Rs '.$row['advance_amount'],1);

$pdf->Cell(45,10,'Rs '.$row['pending_amount'],1);

$pdf->Ln();

}

/*
|--------------------------------------------------------------------------
| Expense Report
|--------------------------------------------------------------------------
*/
$pdf->Ln(10);

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'Expense Report',1,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(60,10,'Expense',1);

$pdf->Cell(40,10,'Amount',1);

$pdf->Cell(40,10,'Date',1);

$pdf->Cell(50,10,'Remarks',1);

$pdf->Ln();

$query = mysqli_query(
$conn,
"SELECT * FROM expenses
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

$pdf->SetFont('Arial','',9);

while($row=mysqli_fetch_assoc($query)){

$pdf->Cell(60,10,$row['expense_name'],1);

$pdf->Cell(40,10,'Rs '.$row['amount'],1);

$pdf->Cell(40,10,$row['expense_date'],1);

$pdf->Cell(50,10,$row['remarks'],1);

$pdf->Ln();

}

/*
|--------------------------------------------------------------------------
| FINAL OUTPUT
|--------------------------------------------------------------------------
*/

$pdf->Output();

?>