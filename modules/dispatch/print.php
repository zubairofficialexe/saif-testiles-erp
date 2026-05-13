<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM dispatch
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>

<html>

<head>

<title>
Print Challan
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
padding:40px;
}

.header{
text-align:center;
margin-bottom:30px;
}

.table td{
padding:12px;
}

</style>

</head>

<body onload="window.print()">

<div class="header">

<h2>
SAIF TEXTILES
</h2>

<p>
8564968922
</p>

<p>
Sambhu Compound Khan Compound
Gaibi Nagar Bhiwandi
</p>

<p>
zubair@gmail.com
</p>

<hr>

<h4>
Dispatch Challan
</h4>

</div>

<table class="table table-bordered">

<tr>





</tr>

<tr>

<td>
Party Name
</td>

<td>
<?php echo $data['party_name']; ?>
</td>

</tr>

<tr>

<td>
Takha Number
</td>

<td>
<?php echo $data['takha_no']; ?>
</td>

</tr>

<tr>

<td>
Dispatch Meter
</td>

<td>
<?php echo $data['dispatch_meter']; ?>
m
</td>

</tr>

<tr>

<td>
Vehicle Number
</td>

<td>
<?php echo $data['vehicle_no']; ?>
</td>

</tr>

<tr>

<td>
Driver Name
</td>

<td>
<?php echo $data['driver_name']; ?>
</td>

</tr>

<tr>

<td>
Dispatch Date
</td>

<td>
<?php echo $data['dispatch_date']; ?>
</td>

</tr>

</table>

</body>

</html>