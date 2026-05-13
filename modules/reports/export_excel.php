<?php

include('../../includes/auth_check.php');

header("Content-Type: application/vnd.ms-excel");

header(
"Content-Disposition: attachment; filename=monthly_master_report.xls"
);

header("Pragma: no-cache");

header("Expires: 0");

echo "\xEF\xBB\xBF";

$month = $_GET['month'];

?>

<!-- COMPANY HEADER -->

<table border="1">

<tr>

<th colspan="8">

<h1>
SAIF TEXTILES
</h1>

<br>

Contact:
9766000321


<br><br>

Email:
madsaif64@gmail.com

<br><br>

Address:
Sambhu Compound Khan Compound,
Gaibi Nagar,
Bhiwandi

<br><br>

GST No:
27AZVPA5511A1ZP   

<br><br>

MONTHLY MASTER ERP REPORT

<br><br>

Month:
<?php echo $month; ?>

</th>

</tr>

</table>

<br><br>





<!-- BEAM REPORT -->

<h2>
Beam Report
</h2>

<table border="1">

<tr>

<th>ID</th>

<th>Party</th>

<th>Quality</th>

<th>Weight</th>

<th>Status</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM beams
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['id']; ?>
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
<?php echo $row['status']; ?>
</td>

</tr>

<?php } ?>

</table>

<br><br>





<!-- WEFT REPORT -->

<h2>
Weft Inventory Report
</h2>

<table border="1">

<tr>

<th>Party</th>

<th>Yarn</th>

<th>Received</th>

<th>Used</th>

<th>Remaining</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM weft_inventory
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['party_name']; ?>
</td>

<td>
<?php echo $row['yarn_type']; ?>
</td>

<td>
<?php echo $row['received_weight']; ?>
</td>

<td>
<?php echo $row['used_weight']; ?>
</td>

<td>
<?php echo $row['remaining_weight']; ?>
</td>

</tr>

<?php } ?>

</table>

<br><br>





<!-- PRODUCTION REPORT -->

<h2>
Production Report
</h2>

<table border="1">

<tr>

<th>Loom</th>

<th>Worker</th>

<th>Takha</th>

<th>Meter</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM production
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['loom_no']; ?>
</td>

<td>
<?php echo $row['worker_name']; ?>
</td>

<td>
<?php echo $row['takha_no']; ?>
</td>

<td>
<?php echo $row['meter_produced']; ?>
</td>

</tr>

<?php } ?>

</table>

<br><br>





<!-- DISPATCH REPORT -->

<h2>
Dispatch Report
</h2>

<table border="1">

<tr>

<th>Party</th>

<th>Takha</th>

<th>Meter</th>

<th>Vehicle</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM dispatch
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['party_name']; ?>
</td>

<td>
<?php echo $row['takha_no']; ?>
</td>

<td>
<?php echo $row['dispatch_meter']; ?>
</td>

<td>
<?php echo $row['vehicle_no']; ?>
</td>

</tr>

<?php } ?>

</table>

<br><br>





<!-- PAYMENT REPORT -->

<h2>
Payment Report
</h2>

<table border="1">

<tr>

<th>Party</th>

<th>Total</th>

<th>Received</th>

<th>Pending</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM payments
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['party_name']; ?>
</td>

<td>
Rs <?php echo number_format($row['total_amount'],2); ?>
</td>

<td>
Rs <?php echo number_format($row['received_amount'],2); ?>
</td>

<td>
Rs <?php echo number_format($row['pending_amount'],2); ?>
</td>

</tr>

<?php } ?>

</table>

<br><br>





<!-- SALARY REPORT -->

<h2>
Salary Report
</h2>

<table border="1">

<tr>

<th>Worker</th>

<th>Total</th>

<th>Advance</th>

<th>Pending</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM salary
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['worker_name']; ?>
</td>

<td>
Rs <?php echo number_format($row['total_amount'],2); ?>
</td>

<td>
Rs <?php echo number_format($row['advance_amount'],2); ?>
</td>

<td>
Rs <?php echo number_format($row['pending_amount'],2); ?>
</td>

</tr>

<?php } ?>

</table>
<!-- EXPENSE REPORT -->
<h2>
Expense Report
</h2>

<table border="1">

<tr>

<th>Expense</th>

<th>Amount</th>

<th>Date</th>

<th>Remarks</th>

</tr>

<?php

$query = mysqli_query(
$conn,
"SELECT * FROM expenses
WHERE DATE_FORMAT(created_at,'%Y-%m')='$month'"
);

while($row=mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $row['expense_name']; ?>
</td>

<td>
Rs <?php echo $row['amount']; ?>
</td>

<td>
<?php echo $row['expense_date']; ?>
</td>

<td>
<?php echo $row['remarks']; ?>
</td>

</tr>

<?php } ?>

</table>