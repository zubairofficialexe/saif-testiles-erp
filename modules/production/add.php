<?php

include('../../includes/auth_check.php');

$success = "";

if(isset($_POST['save'])){

    $loom_no = $_POST['loom_no'];

    $party_name = $_POST['party_name'];

    $worker_name = $_POST['worker_name'];

    $shift_name = $_POST['shift_name'];

    $takha_no = $_POST['takha_no'];

    $meter_produced = $_POST['meter_produced'];

    $production_date = $_POST['production_date'];

    $remarks = $_POST['remarks'];

    mysqli_query(
        $conn,
        "INSERT INTO production(

        loom_no,
        party_name,
        worker_name,
        shift_name,
        takha_no,
        meter_produced,
        production_date,
        remarks

        )

        VALUES(

        '$loom_no',
        '$party_name',
        '$worker_name',
        '$shift_name',
        '$takha_no',
        '$meter_produced',
        '$production_date',
        '$remarks'

        )"
    );

    $success = "Production Added Successfully";
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
Add Production
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
Loom Number
</label>

<input
type="text"
name="loom_no"
class="form-control">

</div>

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
Worker Name
</label>

<input
type="text"
name="worker_name"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Shift Name
</label>

<select
name="shift_name"
class="form-control">

<option value="Morning">
Morning
</option>

<option value="Night">
Night
</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>
Takha Number
</label>

<input
type="text"
name="takha_no"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Meter Produced
</label>

<input
type="number"
step="0.01"
name="meter_produced"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Production Date
</label>

<input
type="date"
name="production_date"
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

Save Production

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>