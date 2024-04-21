<?php
include 'connection.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1)
{
    header("Location: ./home.html");
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Try Again !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
}
?>