<?php

include('../../includes/auth_check.php');

include('../../includes/auth_role.php');

$query = mysqli_query(
$conn,
"SELECT * FROM settings
LIMIT 1"
);

$data = mysqli_fetch_assoc($query);

?>