<?php

/* DATABASE CONNECTION */

$con = mysqli_connect("localhost","root","")or die("could not connect to mysql");
mysqli_select_db($con, "helpeedb")or die("no database");
date_default_timezone_set('Asia/Taipei');
error_reporting(0);
session_start();


/*$con = mysqli_connect("sql202.epizy.com","epiz_23130053","geltVy0vDNzd")or die("could not connect to mysql");
mysqli_select_db($con, "epiz_23130053_helpee")or die("no database");
date_default_timezone_set('Asia/Taipei');
error_reporting(0);
session_start();*/

?>