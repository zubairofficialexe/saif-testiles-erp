<?php

include('config/db.php');

session_destroy();

setcookie(
    "remember_token",
    "",
    time()-3600,
    "/"
);

header("Location:login.php");

?>