<?php

include('../../includes/auth_check.php');

$error = "";

$success = "";

if(isset($_POST['save'])){

    $party_name = $_POST['party_name'];

    $yarn_type = $_POST['yarn_type'];

    $yarn_count = $_POST['yarn_count'];

    $color = $_POST['color'];

    $received_weight = $_POST['received_weight'];

    $received_date = $_POST['received_date'];

    $remarks = $_POST['remarks'];

    mysqli_query(
        $conn,
        "INSERT INTO weft_inventory(

        party_name,
        yarn_type,
        yarn_count,
        color,
        received_weight,
        remaining_weight,
        received_date,
        remarks

        )

        VALUES(

        '$party_name',
        '$yarn_type',
        '$yarn_count',
        '$color',
        '$received_weight',
        '$received_weight',
        '$received_date',
        '$remarks'

        )"
    );

    $success = "Weft Added Successfully";
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
Add Weft Yarn
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
Yarn Type
</label>

<input
type="text"
name="yarn_type"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Yarn Count
</label>

<input
type="text"
name="yarn_count"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Color
</label>

<input
type="text"
name="color"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>
Received Weight (KG)
</label>

<input
type="number"
step="0.01"
name="received_weight"
class="form-control">

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

Save Yarn

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>