<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM production
    WHERE id='$id'"
);

header("Location:view.php");

?>