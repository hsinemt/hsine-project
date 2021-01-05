<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "traveldream";
//create connection
$conn = mysqli_connect($dBServername, $dBUsername ,$dBPassword, $dBName);
//check connection
if (!$conn)
{
    die("connection failed :" . mysqli_error());
}