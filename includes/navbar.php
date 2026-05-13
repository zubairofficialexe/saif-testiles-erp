<?php include('notification.php'); ?>

<nav class="top-navbar">

    <!-- LEFT SIDE -->
    <div>

        <h4>
            Dashboard
        </h4>

    </div>

    <!-- RIGHT SIDE -->
    <div class="user-area d-flex align-items-center gap-3">

        <!-- LOW STOCK NOTIFICATION -->
        <div class="notification-badge">

            <i class="fa fa-bell"></i>

            Low Stock:
            <?php echo $count; ?>

        </div>

        <!-- DARK MODE BUTTON -->
        <button
        onclick="toggleDarkMode()"
        class="btn btn-dark btn-sm">

            <i class="fa fa-moon"></i>

            Dark Mode

        </button>

        <!-- USER NAME -->
        <span>

            <?php echo $_SESSION['user_name']; ?>

        </span>

        <!-- USER ICON -->
        <i class="fa fa-user-circle fa-2x"></i>

    </div>

</nav>