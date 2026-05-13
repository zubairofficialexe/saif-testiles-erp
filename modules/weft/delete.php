<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM weft_inventory
    WHERE id='$id'"
);

header("Location:view.php");

?>