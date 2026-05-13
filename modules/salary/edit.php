<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM salary WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

$worker_name = $_POST['worker_name'];

$total_meter = $_POST['total_meter'];

$rate_per_meter = $_POST['rate_per_meter'];

$advance_amount = $_POST['advance_amount'];

$total_amount =
$total_meter * $rate_per_meter;

$pending_amount =
$total_amount - $advance_amount;

mysqli_query(
$conn,
"UPDATE salary SET

worker_name='$worker_name',

total_meter='$total_meter',

rate_per_meter='$rate_per_meter',

total_amount='$total_amount',

advance_amount='$advance_amount',

pending_amount='$pending_amount'

WHERE id='$id'"
);

header("Location:view.php");

}

?>

<?php include('../../includes/header.php'); ?>

<body>

<div class="container p-4">

<h3>Edit Salary</h3>

<form method="POST">

<input type="text" name="worker_name"
class="form-control mb-3"
value="<?php echo $data['worker_name']; ?>">

<input type="number" step="0.01"
name="total_meter"
class="form-control mb-3"
value="<?php echo $data['total_meter']; ?>">

<input type="number" step="0.01"
name="rate_per_meter"
class="form-control mb-3"
value="<?php echo $data['rate_per_meter']; ?>">

<input type="number" step="0.01"
name="advance_amount"
class="form-control mb-3"
value="<?php echo $data['advance_amount']; ?>">

<button
type="submit"
name="update"
class="btn btn-dark">

Update

</button>

</form>

</div>