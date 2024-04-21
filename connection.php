<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bloodbank";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    echo "Yes";
}
else{
    echo "No";
}

?>