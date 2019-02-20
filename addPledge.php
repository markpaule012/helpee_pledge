<?php
include("connect.php");
	
$email = $_GET['email'] . "@finastra.com";
if(!empty($_GET['email'])){
mysqli_query($con,"INSERT into pledge (email, amount) VALUES('".$email."','".$_GET['amount']."')")or die(mysqli_error($con));

$result = mysqli_query($con,"SELECT SUM(amount) FROM pledge where email = '$email'");
$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo $row[0].".00";	
}

?>