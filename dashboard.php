<?php

include('includes/auth_check.php');

/*
|--------------------------------------------------------------------------
| DASHBOARD QUERIES
|--------------------------------------------------------------------------
*/

$total_beam = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total_beam
        FROM beams"
    )
);

$total_production = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT SUM(meter_produced)
        AS total_production
        FROM production"
    )
);

$total_dispatch = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT SUM(dispatch_meter)
        AS total_dispatch
        FROM dispatch"
    )
);

$total_pending = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT SUM(pending_amount)
        AS total_pending
        FROM payments"
    )
);

$total_salary = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT SUM(total_amount)
        AS total_salary
        FROM salary"
    )
);

$total_payment = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT SUM(received_amount)
        AS total_payment
        FROM payments"
    )
);

?>

<?php include('includes/header.php'); ?>

<body>

<div class="main-container">

    <!-- SIDEBAR -->
    <?php include('includes/sidebar.php'); ?>

    <!-- CONTENT -->
    <div class="content">

        <!-- NAVBAR -->
        <?php include('includes/navbar.php'); ?>

        <!-- DASHBOARD AREA -->
        <div class="dashboard-cards">

            <div class="container-fluid">

                <!-- FIRST ROW -->
                <div class="row g-4">

                    <!-- TOTAL BEAM -->
                    <div class="col-md-3 col-sm-6">

                        <div class="stat-card">

                            <h5>
                                Total Beam
                            </h5>

                            <h2>

                                <?php
                                echo
                                $total_beam['total_beam']
                                ?? 0;
                                ?>

                            </h2>

                        </div>

                    </div>

                    <!-- TOTAL PRODUCTION -->
                    <div class="col-md-3 col-sm-6">

                        <div class="stat-card">

                            <h5>
                                Production
                            </h5>

                            <h2>

                                <?php
                                echo
                                $total_production['total_production']
                                ?? 0;
                                ?>

                                m

                            </h2>

                        </div>

                    </div>

                    <!-- TOTAL DISPATCH -->
                    <div class="col-md-3 col-sm-6">

                        <div class="stat-card">

                            <h5>
                                Dispatch
                            </h5>

                            <h2>

                                <?php
                                echo
                                $total_dispatch['total_dispatch']
                                ?? 0;
                                ?>

                                m

                            </h2>

                        </div>

                    </div>

                    <!-- PENDING PAYMENT -->
                    <div class="col-md-3 col-sm-6">

                        <div class="stat-card">

                            <h5>
                                Pending Amount
                            </h5>

                            <h2>

                                ₹<?php
                                echo
                                $total_pending['total_pending']
                                ?? 0;
                                ?>

                            </h2>

                        </div>

                    </div>

                </div>

                <!-- SECOND ROW -->
                <div class="row g-4 mt-1">

                    <!-- TOTAL SALARY -->
                    <div class="col-md-6">

                        <div class="stat-card">

                            <h5>
                                Total Salary
                            </h5>

                            <h2>

                                ₹<?php
                                echo
                                $total_salary['total_salary']
                                ?? 0;
                                ?>

                            </h2>

                        </div>

                    </div>

                    <!-- RECEIVED PAYMENTS -->
                    <div class="col-md-6">

                        <div class="stat-card">

                            <h5>
                                Received Payments
                            </h5>

                            <h2>

                                ₹<?php
                                echo
                                $total_payment['total_payment']
                                ?? 0;
                                ?>

                            </h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('includes/footer.php'); ?>

</body>

</html>