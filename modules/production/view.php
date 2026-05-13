<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
    $conn,
    "SELECT * FROM production
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
Production History
</h3>

<a
href="add.php"
class="btn btn-dark">

Add Production

</a>

</div>

<div class="table-responsive">

<table
id="productionTable"
class="table table-bordered align-middle">

<thead>

<tr>

<th>ID</th>


<th>Loom</th>

<th>Worker</th>

<th>Shift</th>

<th>Takha</th>

<th>Meter</th>

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
<?php echo $row['loom_no']; ?>
</td>

<td>
<?php echo $row['worker_name']; ?>
</td>

<td>

<span class="badge bg-primary">

<?php echo $row['shift_name']; ?>

</span>

</td>

<td>
<?php echo $row['takha_no']; ?>
</td>

<td>
<?php echo $row['meter_produced']; ?> m
</td>

<td>
<?php echo $row['production_date']; ?>
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

$('#productionTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>