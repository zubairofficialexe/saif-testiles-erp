<?php

include('../../includes/auth_check.php');

$error = "";

$success = "";

if(isset($_POST['save'])){

    $beam_no = trim($_POST['beam_no']);

    $party_name = trim($_POST['party_name']);

    $quality = trim($_POST['quality']);

    $warp_type = trim($_POST['warp_type']);

    $warp_count = trim($_POST['warp_count']);

    $beam_weight = trim($_POST['beam_weight']);

    $expected_meter = trim($_POST['expected_meter']);

    $loom_no = trim($_POST['loom_no']);

    $status = trim($_POST['status']);

    $received_date = trim($_POST['received_date']);

    $remarks = trim($_POST['remarks']);

    $check = mysqli_query(
        $conn,
        "SELECT * FROM beams
        WHERE beam_no='$beam_no'"
    );

    if(mysqli_num_rows($check)>0){

        $error = "Beam Number Already Exists";

    }

    else{

        mysqli_query(
            $conn,
            "INSERT INTO beams(

            beam_no,
            party_name,
            quality,
            warp_type,
            warp_count,
            beam_weight,
            expected_meter,
            loom_no,
            status,
            received_date,
            remarks

            )

            VALUES(

            '$beam_no',
            '$party_name',
            '$quality',
            '$warp_type',
            '$warp_count',
            '$beam_weight',
            '$expected_meter',
            '$loom_no',
            '$status',
            '$received_date',
            '$remarks'

            )"
        );

        $success = "Beam Added Successfully";
    }
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
Add Beam
</h3>

<?php if($error!=""){ ?>

<div class="alert alert-danger">

<?php echo $error; ?>

</div>

<?php } ?>

<?php if($success!=""){ ?>

<div class="alert alert-success">

<?php echo $success; ?>

</div>

<?php } ?>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>
Beam Number
</label>

<input
type="text"
name="beam_no"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Party Name
</label>

<input
type="text"
name="party_name"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Quality
</label>

<input
type="text"
name="quality"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Warp Type
</label>

<input
type="text"
name="warp_type"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Warp Count
</label>

<input
type="text"
name="warp_count"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Beam Weight
</label>

<input
type="number"
step="0.01"
name="beam_weight"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Expected Meter
</label>

<input
type="number"
step="0.01"
name="expected_meter"
class="form-control">

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

<div class="col-md-6 mb-3">

<label>
Received Date
</label>

<input
type="date"
name="received_date"
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

Save Beam

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>