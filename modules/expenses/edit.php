<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM expenses
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

$expense_name = $_POST['expense_name'];

$amount = $_POST['amount'];

$expense_date = $_POST['expense_date'];

$remarks = $_POST['remarks'];

mysqli_query(
$conn,
"UPDATE expenses SET

expense_name='$expense_name',

amount='$amount',

expense_date='$expense_date',

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
Edit Expense
</h3>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>
Expense Name
</label>

<input
type="text"
name="expense_name"
class="form-control"
value="<?php echo $data['expense_name']; ?>"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Amount
</label>

<input
type="number"
step="0.01"
name="amount"
class="form-control"
value="<?php echo $data['amount']; ?>"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Expense Date
</label>

<input
type="date"
name="expense_date"
class="form-control"
value="<?php echo $data['expense_date']; ?>">

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
class="btn btn-dark">

Update Expense

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