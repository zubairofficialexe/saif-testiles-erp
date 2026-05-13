<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM weft_inventory
    WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $used = $_POST['used_weight'];

    $new_used =
    $data['used_weight'] + $used;

    $remaining =
    $data['received_weight'] - $new_used;

    mysqli_query(
        $conn,
        "UPDATE weft_inventory SET

        used_weight='$new_used',

        remaining_weight='$remaining'

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
Update Yarn Usage
</h3>

<form method="POST">

<div class="mb-3">

<label>
Current Remaining
</label>

<input
type="text"
class="form-control"
value="<?php echo $data['remaining_weight']; ?> KG"
readonly>

</div>

<div class="mb-3">

<label>
Used Weight
</label>

<input
type="number"
step="0.01"
name="used_weight"
class="form-control"
required>

</div>

<button
type="submit"
name="update"
class="btn-theme">

Update Usage

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>