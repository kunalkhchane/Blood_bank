<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$pass = $_POST['pass'];

$query = "INSERT INTO `users`(`name`, `email`, `contact`, `pass`) VALUES('$name', '$email', '$contact', '$pass')";
$result = mysqli_query($conn, $query);

if($result)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
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