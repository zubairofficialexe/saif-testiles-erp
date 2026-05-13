<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
    $conn,
    "SELECT * FROM beams
    ORDER BY id DESC"
);

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

<div class="d-flex justify-content-between mb-4">

<h3>
Beam Inventory
</h3>

<a
href="add.php"
class="btn btn-dark">

Add Beam

</a>

</div>

<div class="table-responsive">

<table
id="beamTable"
class="table table-bordered align-middle">

<thead>

<tr>

<th>ID</th>

<th>Beam No</th>

<th>Party</th>

<th>Quality</th>

<th>Weight</th>

<th>Loom</th>

<th>Status</th>

<th>Date</th>

<th>Actions</th>

</tr>

</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($query)){ ?>

<tr>

<td>

<?php echo $row['id']; ?>

</td>

<td>

<?php echo $row['beam_no']; ?>

</td>

<td>

<?php echo $row['party_name']; ?>

</td>

<td>

<?php echo $row['quality']; ?>

</td>

<td>

<?php echo $row['beam_weight']; ?>

</td>

<td>

<?php echo $row['loom_no']; ?>

</td>

<td>

<span class="badge bg-primary">

<?php echo $row['status']; ?>

</span>

</td>

<td>

<?php echo $row['received_date']; ?>

</td>

<td>

<a
href="edit.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="delete.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

$(document).ready(function(){

    $('#beamTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>