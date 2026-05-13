<?php

include('../../includes/auth_check.php');

/*
|--------------------------------------------------------------------------
| RESET ALL MONTHLY DATA
|--------------------------------------------------------------------------
|
| WARNING:
| This will permanently delete ALL operational data.
|
*/

mysqli_query($conn,"TRUNCATE beams");

mysqli_query($conn,"TRUNCATE weft_inventory");

mysqli_query($conn,"TRUNCATE production");

mysqli_query($conn,"TRUNCATE dispatch");

mysqli_query($conn,"TRUNCATE payments");

mysqli_query($conn,"TRUNCATE salary");

mysqli_query($conn,"TRUNCATE expenses");

?>

<?php include('../../includes/header.php'); ?>

<body>

<div class="main-container">

<?php include('../../includes/sidebar.php'); ?>

<div class="content">

<?php include('../../includes/navbar.php'); ?>

<div class="container-fluid p-4">

<div class="card border-0 shadow-sm rounded-4">

<div class="card-body text-center">

<h2 class="text-success mb-4">

System Reset Successfully

</h2>

<h4>

ERP Ready For Next Month

</h4>

<br>

<a
href="../../dashboard.php"
class="btn btn-dark">

Go To Dashboard

</a>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>