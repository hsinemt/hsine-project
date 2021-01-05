<?php

if(!isset($_SESSION)) {
// On prolonge la session
    session_start();
}
// On teste si la variable de session existe et contient une valeur

if(empty($_SESSION['login']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: connexion.php');
   }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Utilisateur</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <style>
        #test1 {
            width: 100%;
            height: 1250px;
            display:none;
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="assets/css/eeee.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    #txt{
        color: white;
        font-weight: bold;
    }
</style>
</head>
<body>
<?php include "navbar.php"; ?>


<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header" >
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/profile-img.jpg"  alt="" class="img-fluid rounded-circle" style="border-radius:50%;">
            <h1 class="text-light"><a href="profil.php"><?PHP echo $_SESSION['nom'];  ?>&nbsp;<?PHP echo $_SESSION['prenom']; ?></a></h1>
            <div class="social-links mt-3 text-center">
                <!--    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>  !-->
                <a href="https://www.facebook.com/mohamed.derbali.mohamed" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/derbalios.hama/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--
                 <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
                 !--><a href="https://www.linkedin.com/in/derbali-mohamed-29b797142/" class="linkedin"><i class="bx bxl-linkedin"></i></a>

            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
                <li><a href="logout.php"><i class="bx bx-envelope"></i> logout</a></li>


            </ul>
        </nav>
        <!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1><?PHP echo $_SESSION['nom']; ?> <?PHP echo $_SESSION['prenom']; ?></h1>
        <p>you are &nbsp;<span class="typed" data-typed-items="client,viwer , tourist"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>

            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/profile-img.jpg"  class="img-fluid" style="border-radius:10px;" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Nom:</strong> <?PHP echo $_SESSION['nom']; ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Prenom:</strong> <?PHP echo $_SESSION['prenom']; ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Login:</strong> <?PHP echo $_SESSION['login']; ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> <?PHP echo $_SESSION['age']; ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?PHP echo $_SESSION['email']; ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Mot de passe:</strong> <?PHP echo $_SESSION['password']; ?></li>

                            </ul>
                        </div>
                    </div>
                    <p>
                        Make it work, make it right, make it fast.” – Kent Beck </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Don't hesitate to contact me, you can use the form bellow if you wanna send me an email <span style="font-size:20px">&#128512;</span> </p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Ariana, Tunisia</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><?PHP echo $_SESSION['email']; ?></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+216 22 326 677</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="emailto" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="button" id="sendmail">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script>
    $(document).ready(function() {
        $(".btn").click(function() {
            $("#test1").show();
        });
    });
</script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script >
    $("#sendmail").click(function() {
        var name= $("#name").val();
        var mailto= $("#emailto").val();
        var message= $("#message").val();
        Email.send({
            Host:"smtp.gmail.com",

            Username : "derbalios.mohamed@gmail.com",
            Password : "Mm2232667788",
            To : "mohamed.derbali@esprit.tn",
            From : "derbalios.mohamed@gmail.com",
            Subject : "Mail from "+name,
            Body : "<html><h2>Hey My Name : "+name+"</h2><strong>My Email "+mailto+"</strong><br></br><em>"+message+"</em></html>"
        }).then(
            message => alert("mail sent successfully")
        );
    });
</script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>