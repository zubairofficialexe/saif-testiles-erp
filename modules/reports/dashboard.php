<?php

include('../../includes/auth_check.php');

$total_beam = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT COUNT(*) AS total_beam
FROM beams"
)
);

$total_production = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT SUM(meter_produced)
AS total_meter
FROM production"
)
);

$total_dispatch = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT SUM(dispatch_meter)
AS total_dispatch
FROM dispatch"
)
);

$total_payment = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT SUM(received_amount)
AS total_payment
FROM payments"
)
);

?>

<?php include('../../includes/header.php'); ?>

<body>

<div class="main-container">

<?php include('../../includes/sidebar.php'); ?>

<div class="content">

<?php include('../../includes/navbar.php'); ?>

<div class="container-fluid p-4">

<h2 class="mb-4">
Reports Dashboard
</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="stat-card">

<h5>
Total Beams
</h5>

<h2>

<?php echo $total_beam['total_beam']; ?>

</h2>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h5>
Production
</h5>

<h2>

<?php echo $total_production['total_meter']; ?>

m

</h2>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h5>
Dispatch
</h5>

<h2>

<?php echo $total_dispatch['total_dispatch']; ?>

m

</h2>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h5>
Payments
</h5>

<h2>

₹<?php echo $total_payment['total_payment']; ?>

</h2>

</div>

</div>

</div>

<div class="row mt-5">

<div class="col-md-6">

<div class="card border-0 shadow-sm rounded-4">

<div class="card-body">

<h4 class="mb-3">
Export Monthly Reports
</h4>

<!-- EXCEL EXPORT -->

<form
action="export_excel.php"
method="GET"
class="mb-3">

<div class="row">

<div class="col-md-6">

<input
type="month"
name="month"
class="form-control"
required>

</div>

<div class="col-md-6">

<button
type="submit"
class="btn btn-success w-100">

Export Full Excel Report

</button>

</div>

</div>

</form>





<!-- PDF EXPORT -->

<form
action="export_pdf.php"
method="GET">

<div class="row">

<div class="col-md-6">

<input
type="month"
name="month"
class="form-control"
required>

</div>

<div class="col-md-6">

<button
type="submit"
class="btn btn-danger w-100">

Export Full PDF Report

</button>

</div>

</div>

</form>
</div>

</div>

</div>

<div class="col-md-6">

<div class="card border-0 shadow-sm rounded-4">

<div class="card-body">

<h4 class="mb-3">
Analytics
</h4>

<a
href="profit_loss.php"
class="btn btn-dark me-2">

Profit / Loss

</a>

<a
href="party_report.php"
class="btn btn-primary">

Party Reports

</a>
<br><br>
<a
href="reset_month.php"
class="btn btn-dark mt-3"

onclick="return confirm(
'Are you sure? This will delete monthly operational data.'
)">

Reset For Next Month

</a>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>