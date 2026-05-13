<?php

include('../../includes/auth_check.php');

$success = "";

if(isset($_POST['save'])){

    $worker_name = $_POST['worker_name'];

    $loom_no = $_POST['loom_no'];

    $total_meter = $_POST['total_meter'];

    $rate_per_meter = $_POST['rate_per_meter'];

    $advance_amount = $_POST['advance_amount'];

    $salary_date = $_POST['salary_date'];

    $remarks = $_POST['remarks'];

    $total_amount =
    $total_meter * $rate_per_meter;

    $pending_amount =
    $total_amount - $advance_amount;

    mysqli_query(
        $conn,
        "INSERT INTO salary(

        worker_name,
        loom_no,
        total_meter,
        rate_per_meter,
        total_amount,
        advance_amount,
        pending_amount,
        salary_date,
        remarks

        )

        VALUES(

        '$worker_name',
        '$loom_no',
        '$total_meter',
        '$rate_per_meter',
        '$total_amount',
        '$advance_amount',
        '$pending_amount',
        '$salary_date',
        '$remarks'

        )"
    );

    $success = "Salary Added Successfully";
}

?>

<?php include('../../includes/header.php'); ?>

<body>

<div class="main-container">

<?php include('../../includes/sidebar.php'); ?>

<div class="content">

<?php include('../../includes/navbar.php'); ?>

<div class="container-fluid p-4">

<div class="card border-0 shadow-sm rounded-4">

<div class="card-body">

<h3 class="mb-4">
Add Worker Salary
</h3>

<?php if($success!=""){ ?>

<div class="alert alert-success">

<?php echo $success; ?>

</div>

<?php } ?>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>
Worker Name
</label>

<input
type="text"
name="worker_name"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Loom Number
</label>

<input
type="text"
name="loom_no"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Total Meter
</label>

<input
type="number"
step="0.01"
name="total_meter"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Rate Per Meter
</label>

<input
type="number"
step="0.01"
name="rate_per_meter"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Advance Amount
</label>

<input
type="number"
step="0.01"
name="advance_amount"
class="form-control"
value="0">

</div>

<div class="col-md-6 mb-3">

<label>
Salary Date
</label>

<input
type="date"
name="salary_date"
class="form-control">

</div>

<div class="col-md-12 mb-3">

<label>
Remarks
</label>

<textarea
name="remarks"
class="form-control">
</textarea>

</div>

</div>

<button
type="submit"
name="save"
class="btn-theme">

Save Salary

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>