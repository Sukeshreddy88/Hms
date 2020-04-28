
<!DOCTYPE html>
<html>
	<title>
		<head>Booking DATA</head>
	</title>
<body>
<table align="center" border="1px",style="width:300px; line-height:30px;">

<tr>
<th clspan="6"> <h2>Room Bookings</h2> </th>
</tr>
<t>
	<th>NAME</th>
	<th>Email</th>
	<th>MObile NUmber</th>
	<th>Check_in</th>
	<th>Check_out</th>
	<th>Room Type</th>
	<th> Room Categery</th>
</t>
<?php
include_once('connection.php');
$mysqli = new mysqli("localhost", "root", "", "mobile");

/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * from book ";

if ($result = $mysqli->query($query)) 
{

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) 
	{
	
			<tr>
				<td><?php echo $rows[name] ;?></td>
				<td><?php echo $rows[email] ;?></td>
				<td><?php echo $rows[mob] ;?></td>
				<td><?php echo $rows[check_in] ;?></td>
				<td><?php echo $rows[check_out] ;?></td>
				<td><?php echo $rows[rm] ;?></td>
				<td><?php echo $rows[room_type] ;?></td>
			</tr>
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>



</table>
</body>
</html>
