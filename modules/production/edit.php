<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM production
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

$worker_name = $_POST['worker_name'];

$loom_no = $_POST['loom_no'];

$meter_produced = $_POST['meter_produced'];

mysqli_query(
$conn,
"UPDATE production SET

worker_name='$worker_name',

loom_no='$loom_no',

meter_produced='$meter_produced'

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

<div class="card shadow-sm border-0 rounded-4">

<div class="card-body">

<h3 class="mb-4">
Edit Production
</h3>

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
value="<?php echo $data['worker_name']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Loom Number
</label>

<input
type="text"
name="loom_no"
class="form-control"
value="<?php echo $data['loom_no']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Meter Produced
</label>

<input
type="number"
step="0.01"
name="meter_produced"
class="form-control"
value="<?php echo $data['meter_produced']; ?>">

</div>

</div>

<button
type="submit"
name="update"
class="btn-theme">

Update Production

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>