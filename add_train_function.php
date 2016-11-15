<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 11/10/16
 * Time: 5:20 AM
 */
function redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$servername="localhost";
$username="lafitte";
$password="joelhrishirahul";

$dbname="lograil";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$id=$_GET['train_id'];
$name=$_GET['train_name'];
$type=$_GET['train_type'];
$source=$_GET['source'];
$dest=$_GET['dest'];

$sql="INSERT INTO `train` (`Train_ID`, `Train_name`, `Train_type`, `Source_stn`, `Destination_stn`, `Source_ID`, `Destination_ID`) VALUES ('$id', '$name', '$type', '$source', '$dest',/* '3', '2'*/);";

$result=$conn->query($sql);

redirect("add_train.php?msg=Success!");
?>