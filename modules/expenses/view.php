<?php

include('../../includes/auth_check.php');

$query = mysqli_query(
$conn,
"SELECT * FROM expenses
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

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h3>
                            Expense Records
                        </h3>

                        <a
                        href="add.php"
                        class="btn btn-dark">

                            Add Expense

                        </a>

                    </div>

                    <table class="table table-bordered align-middle">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Expense</th>

                                <th>Amount</th>

                                <th>Date</th>

                                <th>Remarks</th>

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
                                    <?php echo $row['expense_name']; ?>
                                </td>

                                <td>
                                    Rs <?php echo number_format($row['amount'],2); ?>
                                </td>

                                <td>
                                    <?php echo $row['expense_date']; ?>
                                </td>

                                <td>
                                    <?php echo $row['remarks']; ?>
                                </td>

                                <td>

                                    <a
                                    href="edit.php?id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning btn-sm">

                                        Edit

                                    </a>

                                    <a
                                    href="delete.php?id=<?php echo $row['id']; ?>"
                                    class="btn btn-danger btn-sm"

                                    onclick="return confirm(
                                    'Delete this expense?'
                                    )">

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

<?php include('../../includes/footer.php'); ?>