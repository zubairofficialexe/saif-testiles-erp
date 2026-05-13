<?php

function logActivity($conn,$activity){

$user =
$_SESSION['user_name'];

mysqli_query(
$conn,
"INSERT INTO activity_logs(

user_name,
activity

)

VALUES(

'$user',
'$activity'

)"
);

}
?>