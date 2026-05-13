<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
    $conn,
    "SELECT * FROM weft_inventory
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
Weft Inventory
</h3>

<a
href="add.php"
class="btn btn-dark">

Add Yarn

</a>

</div>

<div class="table-responsive">

<table
id="weftTable"
class="table table-bordered align-middle">

<thead>

<tr>

<th>ID</th>


<th>Party</th>

<th>Yarn</th>

<th>Count</th>

<th>Received</th>

<th>Used</th>

<th>Remaining</th>

<th>Status</th>

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

<?php echo $row['yarn_type']; ?>

</td>

<td>

<?php echo $row['yarn_count']; ?>

</td>

<td>

<?php echo $row['received_weight']; ?> KG

</td>

<td>

<?php echo $row['used_weight']; ?> KG

</td>

<td>

<?php echo $row['remaining_weight']; ?> KG

</td>

<td>

<?php

if($row['remaining_weight'] < 20){

echo "<span class='badge bg-danger'>
Low Stock
</span>";

}else{

echo "<span class='badge bg-success'>
Available
</span>";

}

?>

</td>

<td>

<a
href="usage.php?id=<?php echo $row['id']; ?>"
class="btn btn-primary btn-sm">

Usage

</a>

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

$('#weftTable').DataTable();

});

</script>

<?php include('../../includes/footer.php'); ?>