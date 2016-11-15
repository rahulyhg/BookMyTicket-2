<?php

function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lograil";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$email=$_GET['email'];
$password=$_GET['password'];
$confirm=$_GET['confirm_password'];
$name=$_GET['full_name'];
$gender=$_GET['gender'];
    $mobile=$_GET['mobile'];



$sql="INSERT INTO `user_table` (`EmailID`, `Password`, `FullName`, `Gender`, `Mobile`) VALUES ('$email', '$password', '$name', '$gender', '$mobile');";
$result=$conn->query($sql);

/*redirect("");*/
?>