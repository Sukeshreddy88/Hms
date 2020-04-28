<?php
include_once('connection.php');
$card_type = $_POST['type'];
$m = $_POST['month'];
$y = $_POST['year'];
$card_no = $_POST['num'];
$card_name = $_POST['name'];
$c_no = $_POST['cvv'];
$name = $_POST['name'];
$sql="INSERT INTO payment SET card_type='$card_type',m='$m',y='$y',card_no='$card_no',card_name='$card_name',c_no='$c_no',name='$name'";
$result=mysqli_query($con,$sql) or die (mysqli_error($con));
if(result==true)
{
header('location:pay.php');
}
else
{
echo 'error';
}
?>
<?php
$con=mysqli_connect('localhost','root','','mobile') or die(mysqli_error());
$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
?>
