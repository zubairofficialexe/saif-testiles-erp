<?php

include('../../includes/auth_check.php');

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM dispatch
    WHERE id='$id'"
);

header("Location:view.php");

?>