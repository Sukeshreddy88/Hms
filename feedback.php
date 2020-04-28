<?php
include_once('connection.php');
$fd = $_POST['feed'];
$sql="INSERT INTO feedback SET fd='$fd'";
$result=mysqli_query($con,$sql) or die (mysqli_error($con));
if($result==true)
{
echo "Thank you for your feedback ";
}
else 
{
echo "error";
}
?>
<? php
	$con=mysqli_connect('localhost','root','','mobile') or die(mysqli_error());
	$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
?>


