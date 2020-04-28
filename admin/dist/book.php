 <?php
	include_once('connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$check_in = $_POST['in'];
	$check_out = $_POST['out'];
	$rm = $_POST['room'];
	$room_type = $_POST['type'];
	$sql="INSERT INTO book SET name='$name',email='$email',mob='$mob',check_in='$check_in',check_out='$check_out',rm='$rm',room_type='$room_type'";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($result==true)
	{
		header('Location:data.php');
	}
	else
	{
		echo 'error'; 
	}
?>
<? php
	$con=mysqli_connect('localhost','root','','mobile') or die(mysqli_error());
	$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
	?>