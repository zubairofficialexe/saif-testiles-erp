<?php

include('config/db.php');

$error = "";

if(isset($_POST['login'])){

    $email = trim($_POST['email']);

    $password = $_POST['password'];

    $remember = isset($_POST['remember']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($query)>0){

        $user = mysqli_fetch_assoc($query);

        if(
            password_verify(
                $password,
                $user['password']
            )
        ){

            $_SESSION['user_id'] = $user['id'];

            $_SESSION['user_name'] = $user['name'];

            $_SESSION['user_email'] = $user['email'];

            $_SESSION['user_role'] = $user['role'];

            if($remember){

                $token = bin2hex(random_bytes(32));

                setcookie(
                    "remember_token",
                    $token,
                    time() + (86400 * 30),
                    "/"
                );

                mysqli_query(
                    $conn,
                    "UPDATE users SET
                    remember_token='$token'
                    WHERE id='".$user['id']."'"
                );
            }

            header("Location:dashboard.php");

        }

        else{

            $error = "Invalid Password";
        }

    }

    else{

        $error = "Email Not Found";
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
Power Loom ERP Software
</p>

</div>

<?php if($error!=""){ ?>

<div class="alert-box alert-danger">

<?php echo $error; ?>

</div>

<?php } ?>

<form method="POST">

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

<div class="mb-3 form-check">

<input
type="checkbox"
name="remember"
class="form-check-input">

<label class="form-check-label">

Remember Me

</label>

</div>

<button
type="submit"
name="login"
class="btn-theme">

Login

</button>

<div class="auth-link">

Don't have account?

<a href="signup.php">

Signup

</a>

</div>

</form>

</div>

</div>

<?php include('includes/footer.php'); ?>