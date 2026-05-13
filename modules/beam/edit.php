<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM beams
    WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $party_name = $_POST['party_name'];

    $quality = $_POST['quality'];

    $beam_weight = $_POST['beam_weight'];

    $loom_no = $_POST['loom_no'];

    $status = $_POST['status'];

    mysqli_query(
        $conn,
        "UPDATE beams SET

        party_name='$party_name',

        quality='$quality',

        beam_weight='$beam_weight',

        loom_no='$loom_no',

        status='$status'

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
Edit Beam
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
value="<?php echo $data['party_name']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Quality
</label>

<input
type="text"
name="quality"
class="form-control"
value="<?php echo $data['quality']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Beam Weight
</label>

<input
type="number"
step="0.01"
name="beam_weight"
class="form-control"
value="<?php echo $data['beam_weight']; ?>">

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
Status
</label>

<select
name="status"
class="form-control">

<option value="Running">

Running

</option>

<option value="Completed">

Completed

</option>

<option value="Pending">

Pending

</option>

</select>

</div>

</div>

<button
type="submit"
name="update"
class="btn-theme">

Update Beam

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>