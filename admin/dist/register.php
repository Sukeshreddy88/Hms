<?php 

include_once('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$email = $_POST['email'];
$sql="INSERT INTO register SET fname='$fname',lname='$lname',pass='$pass',email='$email',cpass='$cpass'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if(result==true)
{
	header('location:login.html');
}
else
{
echo 'error in creating account';
}
?>
<? php
	$con=mysqli_connect('localhost','root','','mobile') or die(mysqli_error());
	$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
	?>