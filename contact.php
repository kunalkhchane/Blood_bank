<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$query = "INSERT INTO `contact`(`name`, `email`, `contact`, `message`) VALUES('$name', '$email', '$contact', '$message')";
$result = mysqli_query($conn, $query);

if($result)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./home.html");
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Try Again !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./contact.html");
}
?>