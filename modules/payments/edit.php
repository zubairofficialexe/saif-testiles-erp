<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM payments
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

$party_name = $_POST['party_name'];

$total_meter = $_POST['total_meter'];

$rate_per_meter = $_POST['rate_per_meter'];

$received_amount = $_POST['received_amount'];

$payment_method = $_POST['payment_method'];

$payment_date = $_POST['payment_date'];

$remarks = $_POST['remarks'];

$total_amount =
$total_meter * $rate_per_meter;

$pending_amount =
$total_amount - $received_amount;

mysqli_query(
$conn,
"UPDATE payments SET

party_name='$party_name',

total_meter='$total_meter',

rate_per_meter='$rate_per_meter',

total_amount='$total_amount',

received_amount='$received_amount',

pending_amount='$pending_amount',

payment_method='$payment_method',

payment_date='$payment_date',

remarks='$remarks'

WHERE id='$id'"
);

header("Location:view.php");

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
Edit Payment
</h3>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>
Party Name
</label>

<input
type="text"
name="party_name"
class="form-control"
value="<?php echo $data['party_name']; ?>"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Total Meter
</label>

<input
type="number"
step="0.01"
name="total_meter"
class="form-control"
value="<?php echo $data['total_meter']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Rate Per Meter
</label>

<input
type="number"
step="0.01"
name="rate_per_meter"
class="form-control"
value="<?php echo $data['rate_per_meter']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Received Amount
</label>

<input
type="number"
step="0.01"
name="received_amount"
class="form-control"
value="<?php echo $data['received_amount']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Payment Method
</label>

<select
name="payment_method"
class="form-control">

<option value="Cash"
<?php if($data['payment_method']=="Cash"){ echo "selected"; } ?>>

Cash

</option>

<option value="Bank"
<?php if($data['payment_method']=="Bank"){ echo "selected"; } ?>>

Bank

</option>

<option value="UPI"
<?php if($data['payment_method']=="UPI"){ echo "selected"; } ?>>

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
class="form-control"
value="<?php echo $data['payment_date']; ?>">

</div>

<div class="col-md-12 mb-3">

<label>
Remarks
</label>

<textarea
name="remarks"
class="form-control"><?php echo $data['remarks']; ?></textarea>

</div>

</div>

<button
type="submit"
name="update"
class="btn-theme">

Update Payment

</button>

<a
href="view.php"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>