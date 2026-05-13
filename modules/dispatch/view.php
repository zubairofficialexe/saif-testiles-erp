<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
    $conn,
    "SELECT * FROM dispatch
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
Dispatch History
</h3>

<a
href="add.php"
class="btn btn-dark">

Add Dispatch

</a>

</div>

<div class="table-responsive">

<table
id="dispatchTable"
class="table table-bordered align-middle">

<thead>

<tr>

<th>ID</th>



<th>Party</th>

<th>Takha</th>

<th>Meter</th>

<th>Vehicle</th>

<th>Challan</th>

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
<?php echo $row['party_name']; ?>
</td>

<td>
<?php echo $row['takha_no']; ?>
</td>

<td>
<?php echo $row['dispatch_meter']; ?> m
</td>

<td>
<?php echo $row['vehicle_no']; ?>
</td>

<td>
<?php echo $row['challan_no']; ?>
</td>

<td>
<?php echo $row['dispatch_date']; ?>
</td>

<td>

<a
href="print.php?id=<?php echo $row['id']; ?>"
class="btn btn-primary btn-sm">

Print

</a>

<a
href="pdf.php?id=<?php echo $row['id']; ?>"
class="btn btn-success btn-sm">

PDF

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

$('#dispatchTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>