<?php
require "header.php";
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
        <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];
        if (empty($selector)|| empty($validator))
        {
            echo "could not validate your request";
        }else{
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !==false)
            {
                ?>
                <form action="includes/reset-password.inc.php"method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector?>">
                    <input type="hidden" name="validator" value="<?php echo $validator?>">
                    <input type="password" name="pwd" placeholder="enter a new password ..">
                    <input type="password" name="pwd-repead" placeholder="repeat a new password ..">
                    <button type="submit" name="reset password">Reset password</button>

                </form>
        <?php
            }
        }
        ?>
    </div>
</div>

<!--element end here-->
</body>
</html>