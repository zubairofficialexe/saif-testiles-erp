<?php

include('../../includes/auth_check.php');

$success = "";

if(isset($_POST['save'])){

    $expense_name = $_POST['expense_name'];

    $amount = $_POST['amount'];

    $expense_date = $_POST['expense_date'];

    $remarks = $_POST['remarks'];

    mysqli_query(
        $conn,
        "INSERT INTO expenses(

        expense_name,
        amount,
        expense_date,
        remarks

        )

        VALUES(

        '$expense_name',
        '$amount',
        '$expense_date',
        '$remarks'

        )"
    );

    $success = "Expense Added Successfully";
}

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
                        Add Factory Expense
                    </h3>

                    <?php if($success!=""){ ?>

                    <div class="alert alert-success">

                        <?php echo $success; ?>

                    </div>

                    <?php } ?>

                    <form method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>
                                    Expense Name
                                </label>

                                <input
                                type="text"
                                name="expense_name"
                                class="form-control"
                                required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>
                                    Amount
                                </label>

                                <input
                                type="number"
                                step="0.01"
                                name="amount"
                                class="form-control"
                                required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>
                                    Expense Date
                                </label>

                                <input
                                type="date"
                                name="expense_date"
                                class="form-control">

                            </div>

                            <div class="col-md-12 mb-3">

                                <label>
                                    Remarks
                                </label>

                                <textarea
                                name="remarks"
                                class="form-control"></textarea>

                            </div>

                        </div>

                        <button
                        type="submit"
                        name="save"
                        class="btn-theme">

                            Save Expense

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('../../includes/footer.php'); ?>