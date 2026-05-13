<?php

include('../../includes/auth_check.php');

/*
|--------------------------------------------------------------------------
| TOTAL INCOME
|--------------------------------------------------------------------------
*/

$income = mysqli_fetch_assoc(

mysqli_query(

$conn,

"SELECT SUM(received_amount)
AS total_income
FROM payments"

)

);

/*
|--------------------------------------------------------------------------
| SALARY EXPENSE
|--------------------------------------------------------------------------
*/

$salary = mysqli_fetch_assoc(

mysqli_query(

$conn,

"SELECT SUM(total_amount)
AS total_salary
FROM salary"

)

);

/*
|--------------------------------------------------------------------------
| FACTORY EXPENSES
|--------------------------------------------------------------------------
*/

$factory_expense = mysqli_fetch_assoc(

mysqli_query(

$conn,

"SELECT SUM(amount)
AS total_factory_expense
FROM expenses"

)

);

/*
|--------------------------------------------------------------------------
| CALCULATIONS
|--------------------------------------------------------------------------
*/

$total_income =
$income['total_income'] ?? 0;

$total_salary =
$salary['total_salary'] ?? 0;

$total_factory_expense =
$factory_expense['total_factory_expense'] ?? 0;

$total_expense =
$total_salary + $total_factory_expense;

$profit =
$total_income - $total_expense;

?>

<?php include('../../includes/header.php'); ?>

<body>

<div class="main-container">

<?php include('../../includes/sidebar.php'); ?>

<div class="content">

<?php include('../../includes/navbar.php'); ?>

<div class="container-fluid p-4">

<h2 class="mb-4">
Profit / Loss Report
</h2>

<div class="row g-4">

<!-- TOTAL INCOME -->

<div class="col-md-3">

<div class="stat-card">

<h5>
Total Income
</h5>

<h2>

₹<?php echo number_format($total_income,2); ?>

</h2>

</div>

</div>





<!-- SALARY EXPENSE -->

<div class="col-md-3">

<div class="stat-card">

<h5>
Salary Expense
</h5>

<h2>

₹<?php echo number_format($total_salary,2); ?>

</h2>

</div>

</div>





<!-- FACTORY EXPENSE -->

<div class="col-md-3">

<div class="stat-card">

<h5>
Factory Expense
</h5>

<h2>

₹<?php echo number_format($total_factory_expense,2); ?>

</h2>

</div>

</div>





<!-- NET PROFIT -->

<div class="col-md-3">

<div class="stat-card">

<h5>
Net Profit
</h5>

<h2>

₹<?php echo number_format($profit,2); ?>

</h2>

</div>

</div>

</div>

</div>

</div>

</div>

<?php include('../../includes/footer.php'); ?>