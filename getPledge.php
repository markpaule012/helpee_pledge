<?php
include("connect.php");
		
$result = mysqli_query($con,"SELECT SUM(amount) FROM pledge where email = '" . $_GET['email']  . "@finastra.com" . "'");
$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo $row[0].".00";					
	
?>