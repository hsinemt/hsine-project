<?php
include_once '../Model/admin.php';
include_once '../Controller/adminC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new adminC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["age"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["pass"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["age"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["pass"])
    ) {
        $user = new admin(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['age'],
            $_POST['email'],
            $_POST['login'],
            $_POST['pass']
        );
        $userC->ajouteradmin($user);
        header('Location:dashboard.php');
    }
    else
        $error = "Missing information";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css1/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="img1/wave.png">
<div class="container">
    <div class="img">
        <img src="img/bg.svg">
    </div>
    <div class="login-content">
        <form action="" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="login" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Name</h5>
                    <input type="text" name="nom" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Last Name</h5>
                    <input type="text" name="prenom" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="div">
                    <h5>Age</h5>
                    <input type="text" name="age" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="text" name="email" class="input">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="pass" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Confirm Password</h5>
                    <input type="password" class="input">
                </div>
            </div>
            <input type="submit" class="btn" value="Sing up">
            <a href="connexionadmin.php">Login</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="js1/main.js"></script>
</body>
</html>

