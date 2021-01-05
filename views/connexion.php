<?php

require ('../vendor/autoload.php');
session_start();
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';
$message="";
$userC = new UtilisateurC();


if (isset($_POST['submitpost'])) {
    if (!empty($_POST['g-recaptcha-response']))
    {   $connected=$userC->connexionUser($_POST["email"],$_POST["password"]);
  if($connected!=null) {

          $recaptcha = new \ReCaptcha\ReCaptcha('6Lff3RwaAAAAANlX_zHvYf-MggdnxuMaLTc04JHI');
          $resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
              ->verify($_POST['g-recaptcha-reponse']);
          if ($resp->isSuccess()) {
              var_dump('captcha valide');
          } else {
              $errors = $resp->getErrorCodes();
              var_dump('captcha invalide');
              var_dump($errors);
          }

          var_dump($connected);

          $_SESSION['login'] = $connected['login'];
          $_SESSION['email'] = $connected['email'];
          $_SESSION['id'] = $connected['id'];
          $_SESSION['prenom'] = $connected['prenom'];
          $_SESSION['nom'] = $connected['nom'];
          $_SESSION['age'] = $connected['age'];
          $_SESSION['password'] = $connected['password'];

      header('location:profil.php');
  }

    else

        $message = "verifier votre login et mot de passe or captcha invalid";}
    else
        $message = "verifier votre login et mot de passe or captcha invalid";}
$error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
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
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['age'],
                $_POST['email'],
                $_POST['login'],
                $_POST['pass']
            );
            $userC->ajouterUtilisateur($user);
            header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="loginstyle.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="Post" class="sign-in-form">

                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="email" required="required" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required="required" />
                </div>
                <div class="alert alert-danger">
                    <?php if($message!="") { echo $message; } ?>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lff3RwaAAAAACAnYjOf9zPeuukG6u6_OLtrbAgb"></div>
                <br/>
                <input type="submit" name="submitpost" value="Login" class="btn solid" />

                <a href="resetpassword.php" >Forget password</a>
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <form action="" method="Post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="login" placeholder="Username" required="required"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nom" placeholder="Name" required="required" />
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="prenom" placeholder="First name"  required="required"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="age" placeholder="Age"  required="required"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required="required"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" required="required" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="passw" placeholder="Confirm password" required="required" />
                </div>
                <input type="submit" class="btn" value="Sign up" />
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="img/register.svg" class="image" alt="" />
        </div>
    </div>
</div>

<script src="app.js"></script>
</body>
</html>
