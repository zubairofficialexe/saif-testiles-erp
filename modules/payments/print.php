<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM payments
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<body onload="window.print()">

<div class="container p-5">

<h2 class="text-center">
SAIF TEXTILES
</h2>

<hr>

<h4>
Payment Receipt
</h4>

<table class="table table-bordered">

<tr>
<td>Party</td>
<td><?php echo $data['party_name']; ?></td>
</tr>



<tr>
<td>Received</td>
<td>₹<?php echo $data['received_amount']; ?></td>
</tr>

<tr>
<td>Method</td>
<td><?php echo $data['payment_method']; ?></td>
</tr>

</table>

</div>