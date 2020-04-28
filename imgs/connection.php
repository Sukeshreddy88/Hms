<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
@mysqli_connect($localhost,$username,$password) or die ("could not connect to MySQL");
@mysqli_select_db($dbname) or die ("No database");

?>
