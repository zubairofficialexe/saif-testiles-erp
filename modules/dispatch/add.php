<?php

include('../../includes/auth_check.php');

$success = "";

if(isset($_POST['save'])){

    $party_name = $_POST['party_name'];

    $takha_no = $_POST['takha_no'];

    $dispatch_meter = $_POST['dispatch_meter'];

    $dispatch_weight = $_POST['dispatch_weight'];

    $vehicle_no = $_POST['vehicle_no'];

    $driver_name = $_POST['driver_name'];

    $challan_no = $_POST['challan_no'];

    $dispatch_date = $_POST['dispatch_date'];

    $remarks = $_POST['remarks'];

    mysqli_query(
        $conn,
        "INSERT INTO dispatch(

        party_name,
        takha_no,
        dispatch_meter,
        dispatch_weight,
        vehicle_no,
        driver_name,
        challan_no,
        dispatch_date,
        remarks

        )

        VALUES(

        '$party_name',
        '$takha_no',
        '$dispatch_meter',
        '$dispatch_weight',
        '$vehicle_no',
        '$driver_name',
        '$challan_no',
        '$dispatch_date',
        '$remarks'

        )"
    );

    $success = "Dispatch Added Successfully";
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
Add Dispatch
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
Takha Number
</label>

<input
type="text"
name="takha_no"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Meter
</label>

<input
type="number"
step="0.01"
name="dispatch_meter"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Weight
</label>

<input
type="number"
step="0.01"
name="dispatch_weight"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Vehicle Number
</label>

<input
type="text"
name="vehicle_no"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Driver Name
</label>

<input
type="text"
name="driver_name"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Challan Number
</label>

<input
type="text"
name="challan_no"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Date
</label>

<input
type="date"
name="dispatch_date"
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

Save Dispatch

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>