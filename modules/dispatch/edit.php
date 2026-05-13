<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM dispatch
    WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

$success = "";

if(isset($_POST['update'])){

    $beam_no = $_POST['beam_no'];

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
        "UPDATE dispatch SET

        beam_no='$beam_no',

        party_name='$party_name',

        takha_no='$takha_no',

        dispatch_meter='$dispatch_meter',

        dispatch_weight='$dispatch_weight',

        vehicle_no='$vehicle_no',

        driver_name='$driver_name',

        challan_no='$challan_no',

        dispatch_date='$dispatch_date',

        remarks='$remarks'

        WHERE id='$id'"
    );

    $success = "Dispatch Updated Successfully";

    header("refresh:1;url=view.php");
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
Edit Dispatch
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
Beam Number
</label>

<input
type="text"
name="beam_no"
class="form-control"
value="<?php echo $data['beam_no']; ?>"
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
value="<?php echo $data['party_name']; ?>"
required>

</div>

<div class="col-md-6 mb-3">

<label>
Takha Number
</label>

<input
type="text"
name="takha_no"
class="form-control"
value="<?php echo $data['takha_no']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Meter
</label>

<input
type="number"
step="0.01"
name="dispatch_meter"
class="form-control"
value="<?php echo $data['dispatch_meter']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Weight
</label>

<input
type="number"
step="0.01"
name="dispatch_weight"
class="form-control"
value="<?php echo $data['dispatch_weight']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Vehicle Number
</label>

<input
type="text"
name="vehicle_no"
class="form-control"
value="<?php echo $data['vehicle_no']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Driver Name
</label>

<input
type="text"
name="driver_name"
class="form-control"
value="<?php echo $data['driver_name']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Challan Number
</label>

<input
type="text"
name="challan_no"
class="form-control"
value="<?php echo $data['challan_no']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Dispatch Date
</label>

<input
type="date"
name="dispatch_date"
class="form-control"
value="<?php echo $data['dispatch_date']; ?>">

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

Update Dispatch

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