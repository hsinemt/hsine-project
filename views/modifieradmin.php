<?php
	include "../controller/adminC.php";
	include_once '../Model/admin.php';

	$adminC = new adminC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["age"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["pass"])
	){
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
			
            $adminC->modifieradmin($user, $_GET['id']);
            header('refresh:5;url=afficheradmin.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>UPDATE</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/mainmod.css" rel="stylesheet" media="all">
</head>

<body>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_GET['id'])){
$user = $adminC->recupererUtilisateur($_GET['id']);

?>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">UPADTE</h2>
                <form action="" method="POST">
                    <div class="input-group">
                        <input class="input--style-3" type="text" name="id" id="id" value = "<?php echo $user['id']; ?>" disabled>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text"  name="nom" id="nom" value = "<?php echo $user['nom']; ?>">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text"  name="prenom" id="prenom" value = "<?php echo $user['prenom']; ?>">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="number"  name="age" id="age" value = "<?php echo $user['age']; ?>">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email"  name="email" id="email" value = "<?php echo $user['email']; ?>" >
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text"  name="login" id="login" value = "<?php echo $user['login']; ?>">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="password"  name="pass" id="pass" value = "<?php echo $user['password']; ?>">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit" value="Modifier" name = "modifer">Submit</button>
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green"><a href="afficherUtilisateurs.php">Back</a></button>
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor1/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor1/select2/select2.min.js"></script>
<script src="vendor1/datepicker/moment.min.js"></script>
<script src="vendor1/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
