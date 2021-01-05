<?php
//require "header.php";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Reset Password Form  Responsive Widget Template | Home :: w3layouts</title>
    <link href="styles.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--google fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!--element start here-->
<div class="elelment">
    <h2>Reset Your Password</h2>
    <div class="element-main">
        <h1>Forgot Password</h1>
        <p> </p>
        <form action="newPass.php" method="post">
            <input type="text" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
            <input type="submit" value="Reset my Password" <a href="newPass.php"></a>
        </form>
        <?php
        if (isset($_GET["reset"]))
        {
            if ($_GET["reset"] == "seccess") {
                echo '<p class="signupsuccess">chech your e-mail!</p>';
            }
        }
       ?>
    </div>
</div>

<!--element end here-->
</body>
</html>