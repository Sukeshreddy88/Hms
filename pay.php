<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Hotel Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets1/css/fontawesome.css">
    <link rel="stylesheet" href="assets1/css/tooplate-main.css">
    <link rel="stylesheet" href="assets1/css/owl.css">
<link rel="stylesheet" type="text/css" href="index.css"/>
<style>
table{
border-style:solid;
border-width:2px;
border-color:green;
}
</style>
</head>
<body bgcolor="white">
<div id="holder"><a href="https://www.facebook.com/profile.php?id=100008014115308"><img src="images/22.png" width="200px" height="100px"/></a>
	 <div id="header">
     
	<ul>
    	<li><a href="login.html">Admin</a></li>
    	<li><a href="overview.html">About Us</a></li>
    	<li><a href="rest/menu.html">Food Menu</a></li>
    	<li><a href="book.html">Booking</a></li>
        <li><a href="index.html">Home</a></li>
    	</ul>
    </div><!--header -->
	

<?php
include_once('connection.php');
$mysqli = new mysqli("localhost", "root", "", "mobile");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT name,S_NO from payment  ";
echo "<table border='1'>
<tr>
<th>Name</th>

</tr>";



if ($result = $mysqli->query($query)) 
{

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		
		echo "</tr>";

    }
echo"</table>";

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
</body>
</html>
