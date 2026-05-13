<?php

include('../../includes/auth_check.php');

$total = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT SUM(meter_produced)
AS total_meter
FROM production"
)
);

$today = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT SUM(meter_produced)
AS today_meter
FROM production
WHERE production_date=CURDATE()"
)
);

?>

<div class="row g-4">

<div class="col-md-6">

<div class="stat-card">

<h5>
Total Production
</h5>

<h2>

<?php echo $total['total_meter']; ?>

m

</h2>

</div>

</div>

<div class="col-md-6">

<div class="stat-card">

<h5>
Today's Production
</h5>

<h2>

<?php echo $today['today_meter']; ?>

m

</h2>

</div>

</div>

</div>