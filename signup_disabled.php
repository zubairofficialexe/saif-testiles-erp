<?php

include('config/db.php');

$error = "";

$success = "";

if(isset($_POST['signup'])){

    $name = trim($_POST['name']);

    $email = trim($_POST['email']);

    $password = $_POST['password'];

    $confirm_password = $_POST['confirm_password'];

    if(
        empty($name) ||
        empty($email) ||
        empty($password)
    ){

        $error = "All fields required";

    }

    elseif($password != $confirm_password){

        $error = "Passwords do not match";

    }

    else{

        $check = mysqli_query(
            $conn,
            "SELECT * FROM users WHERE email='$email'"
        );

        if(mysqli_num_rows($check)>0){

            $error = "Email already exists";

        }

        else{

            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            mysqli_query(
                $conn,
                "INSERT INTO users
                (name,email,password)

                VALUES
                (
                '$name',
                '$email',
                '$hashed_password'
                )"
            );

            $success = "Account Created Successfully";
        }
    }
}

?>

<?php include('includes/header.php'); ?>

<body>

<div class="auth-wrapper">

<div class="auth-card">

<div class="auth-logo">

<h2>
Saif Textiles
</h2>

<p>
ERP Management System
</p>

</div>

<?php if($error!=""){ ?>

<div class="alert-box alert-danger">

<?php echo $error; ?>

</div>

<?php } ?>

<?php if($success!=""){ ?>

<div class="alert-box alert-success">

<?php echo $success; ?>

</div>

<?php } ?>

<form method="POST">

<div class="mb-3">

<label>
Full Name
</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>
Email Address
</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>
Password
</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<div class="mb-3">

<label>
Confirm Password
</label>

<input
type="password"
name="confirm_password"
class="form-control"
required>

</div>

<button
type="submit"
name="signup"
class="btn-theme">

Create Account

</button>

<div class="auth-link">

Already have account?

<a href="login.php">

Login

</a>

</div>

</form>

</div>

</div>

<?php include('includes/footer.php'); ?>