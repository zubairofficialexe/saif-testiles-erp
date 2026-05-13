<?php

include(__DIR__.'/../config/db.php');

if(!isset($_SESSION['user_id'])){

    if(isset($_COOKIE['remember_token'])){

        $token = $_COOKIE['remember_token'];

        $query = mysqli_query(
            $conn,
            "SELECT * FROM users
            WHERE remember_token='$token'"
        );

        if(mysqli_num_rows($query)>0){

            $user = mysqli_fetch_assoc($query);

            $_SESSION['user_id'] = $user['id'];

            $_SESSION['user_name'] = $user['name'];

            $_SESSION['user_email'] = $user['email'];

            $_SESSION['user_role'] = $user['role'];

        }

        else{

            header("Location:/saif-textiles-erp/login.php");
        }

    }

    else{

        header("Location:/saif-textiles-erp/login.php");
    }
}
?>