<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
$conn,
"SELECT * FROM payments
ORDER BY party_name ASC"
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

<h3 class="mb-4">
Party Ledger Report
</h3>

<div class="table-responsive">

<table
id="partyTable"
class="table table-bordered">

<thead>

<tr>

<th>Party</th>



<th>Meter</th>

<th>Total</th>

<th>Received</th>

<th>Pending</th>

</tr>

</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($query)){ ?>

<tr>

<td>
<?php echo $row['party_name']; ?>
</td>



<td>
<?php echo $row['total_meter']; ?>
</td>

<td>
₹<?php echo $row['total_amount']; ?>
</td>

<td>
₹<?php echo $row['received_amount']; ?>
</td>

<td>
₹<?php echo $row['pending_amount']; ?>
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

$('#partyTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>