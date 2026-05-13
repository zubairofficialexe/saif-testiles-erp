<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM salary
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<html>

<head>

<title>Salary Slip</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body onload="window.print()">

<div class="container p-5">

<h2 class="text-center">
SAIF TEXTILES
</h2>

<hr>

<h4>
Salary Slip
</h4>

<table class="table table-bordered">

<tr>
<td>Worker</td>
<td><?php echo $data['worker_name']; ?></td>
</tr>

<tr>
<td>Total Meter</td>
<td><?php echo $data['total_meter']; ?></td>
</tr>

<tr>
<td>Rate</td>
<td>₹<?php echo $data['rate_per_meter']; ?></td>
</tr>

<tr>
<td>Total Amount</td>
<td>₹<?php echo $data['total_amount']; ?></td>
</tr>

<tr>
<td>Advance</td>
<td>₹<?php echo $data['advance_amount']; ?></td>
</tr>

<tr>
<td>Pending</td>
<td>₹<?php echo $data['pending_amount']; ?></td>
</tr>

</table>

</div>

</body>

</html>