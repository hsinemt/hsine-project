<?php
if (isset($_POST["reset-request-submit"]))
{
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "********/create-new-password.php?selector= ".$selector . "&validator" . bin2hex($token);
    $expires = date("U") + 1800;
require 'dbh.inc.php'
$userEmail = $_POST["email"];
$sql = "DELETE FROM pwdReset WHERE  pwdResetEmail=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql))
{
    echo "error";
    exit();

}else{
    mysqli_stmt_bind_param($stmt,"s",$userEmail);
    mysqli_stmt_execute($stmt);
}
$sql="INSERT INTO pwdreset (pwdResetEmail,pwdResetselector,pwdResetToken,pwdReserExpires) VALUES (?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql))
{
    echo "error";
    exit();

}else{
    $hashedToken = password_hash($token,PASSWORD_DEFAULT)
    mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt)
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
$to = $userEmail;
$subject ='reset your password';
$message ='<p>anything to say</p>';
$message ='<br>here is your password link :</br>';
$message ='<a href="" '.$url  .'">'. $url .'</a></p>';

$headers = "from: mmtuts <usemmtus@gmail.com>\r\n";
$headers .= "reply-to: <usemmtus@gmail.com>\r\n";
$headers .= "content-type:text/html\r\n";
mail($to,$subject,$message,$headers);
header("Location: ../resetpassword.php?reset=seccess");


}else{
    header("Location: ../index.php");
}