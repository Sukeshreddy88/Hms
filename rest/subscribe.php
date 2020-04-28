<?php
include_oncw('connection.php')
$sub=$_POST['sub'];
$sql="INSERT INTO subscribe SET sub='$sub';
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result=true)
{
echo "Your Successfully Subscribed to our Hotel You will get All notificaations to your mail";
}
else {
echo" Error in Subscription please try after 10 minutes"
}
?>
<?php
$con=mysqli_connect("localhost","root","","mobile") or die(mysqli_error());
$select_db=mysqli_select_db($con,'mobile') or die(mysqli_error());
?>
