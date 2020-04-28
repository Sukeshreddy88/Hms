<?php
include_once('connection.php');
$rnum = $_POST['rnumber'];
$ridd = $_POST['rid'];
$cancel= $_POST['cancel'];
$sql="INSERT INTO login SET rnum='$rnum', ridd='$ridd' ";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result==true)
{
header('Location:admin/index1.html');
}
else
{
echo "error";

}
?>
<?php
$con=mysqli_connect("localhost","root","","mobile") or die(mysqli_error());
$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
?>
