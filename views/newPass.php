<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

if(isset($_POST["email"]))
{
    
    

   $email=$_POST['email'];
    $userC = new UtilisateurC();



$listeuser = $utlisateurC->forgotPass($email);
foreach($listeuser as $user)
{
   $password=$user['password'];
}
 $mailto =$email;
    $mailSub = "mot de passe";
    $mailMsg = "Votre nouveau mdp est : $pass";
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "amirmti1@gmail.com";
    $mail ->Password = "blackopps3";
    $mail ->SetFrom("hsinemt1899@gmail.com");
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
     <form  method="GET" action="connexion.php">
       </br>
       
    <center>  
</br>
   <button type="submit" style="background-color: #808e9b ; height: 70px ; width: 300px;">try to connect with your new password</button>
    </center>
 </form>
 </div>
</body>
</html>