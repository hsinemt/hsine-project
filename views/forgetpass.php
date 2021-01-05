<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

if(isset($_POST["email"]))
{



    $email=$_POST['email'];
    $cli = new UtilisateurC();



    $listcli = $cli->forgotPass($email);
    foreach($listcli as $row)
    {
        $mdp=$row['mdp'];
    }
    $mailto =$email;
    $mailSub = "mot de passe";
    $mailMsg = "Votre nouveau mdp est : $mdp";
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "amirmti1@gamil.com";
    $mail ->Password = "blackopps3";
    $mail ->SetFrom("amirmti1@gamil.com");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);

    if(!$mail->Send())
    {
        echo "Mail Not Sent";
    }
    else
    {
        echo "check your email";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Your new password</title>
</head>
<body>
<div>
    <form  method="GET" action="resetpassword.php">
        </br>

        <center>
            </br>
            <button type="submit" >try to connect with your new password</button>
        </center>
    </form>
</div>
</body>
</html>