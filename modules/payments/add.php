<?php

include('../../includes/auth_check.php');

$success = "";

if(isset($_POST['save'])){

    $party_name = $_POST['party_name'];

    $total_meter = $_POST['total_meter'];

    $rate_per_meter = $_POST['rate_per_meter'];

    $received_amount = $_POST['received_amount'];

    $payment_date = $_POST['payment_date'];

    $payment_method = $_POST['payment_method'];

    $remarks = $_POST['remarks'];

    $total_amount =
    $total_meter * $rate_per_meter;

    $pending_amount =
    $total_amount - $received_amount;

    mysqli_query(
        $conn,
        "INSERT INTO payments(

        party_name,
        total_meter,
        rate_per_meter,
        total_amount,
        received_amount,
        pending_amount,
        payment_date,
        payment_method,
        remarks

        )

        VALUES(

        '$party_name',
        '$total_meter',
        '$rate_per_meter',
        '$total_amount',
        '$received_amount',
        '$pending_amount',
        '$payment_date',
        '$payment_method',
        '$remarks'

        )"
    );

    $success = "Payment Added Successfully";
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
Add Payment
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
Party Name
</label>

<input
type="text"
name="party_name"
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
Received Amount
</label>

<input
type="number"
step="0.01"
name="received_amount"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Payment Method
</label>

<select
name="payment_method"
class="form-control">

<option value="Cash">
Cash
</option>

<option value="Bank">
Bank
</option>

<option value="UPI">
UPI
</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>
Payment Date
</label>

<input
type="date"
name="payment_date"
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

Save Payment

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>