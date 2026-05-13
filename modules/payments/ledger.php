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

<div class="container-fluid p-4">

<h3 class="mb-4">
Party Ledger
</h3>

<table class="table table-bordered">

<thead>

<tr>

<th>Party</th>



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

<?php include('../../includes/footer.php'); ?>