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

$yarn_type = $_POST['yarn_type'];

$yarn_count = $_POST['yarn_count'];

$color = $_POST['color'];

mysqli_query(
$conn,
"UPDATE weft_inventory SET

yarn_type='$yarn_type',

yarn_count='$yarn_count',

color='$color'

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
Edit Weft Yarn
</h3>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>
Yarn Type
</label>

<input
type="text"
name="yarn_type"
class="form-control"
value="<?php echo $data['yarn_type']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Yarn Count
</label>

<input
type="text"
name="yarn_count"
class="form-control"
value="<?php echo $data['yarn_count']; ?>">

</div>

<div class="col-md-6 mb-3">

<label>
Color
</label>

<input
type="text"
name="color"
class="form-control"
value="<?php echo $data['color']; ?>">

</div>

</div>

<button
type="submit"
name="update"
class="btn-theme">

Update Yarn

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>