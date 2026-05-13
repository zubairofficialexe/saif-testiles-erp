<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
$conn,
"SELECT * FROM salary
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
Salary Records
</h3>

<a
href="add.php"
class="btn btn-dark">

Add Salary

</a>

</div>

<div class="table-responsive">

<table
id="salaryTable"
class="table table-bordered">

<thead>

<tr>

<th>ID</th>

<th>Worker</th>


<th>Meter</th>

<th>Rate</th>

<th>Total</th>

<th>Advance</th>

<th>Pending</th>

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
<?php echo $row['worker_name']; ?>
</td>



<td>
<?php echo $row['total_meter']; ?>
</td>

<td>
₹<?php echo $row['rate_per_meter']; ?>
</td>

<td>
₹<?php echo $row['total_amount']; ?>
</td>

<td>
₹<?php echo $row['advance_amount']; ?>
</td>

<td>
₹<?php echo $row['pending_amount']; ?>
</td>

<td>
<?php echo $row['salary_date']; ?>
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

$('#salaryTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>