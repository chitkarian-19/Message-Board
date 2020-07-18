<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con)
{
	echo "Connection Successful";
}
else{
    
	echo "Connection not suuccessful";
}
mysqli_select_db($con,'sessionpractical');

$fname=$_POST['firstname'];

$password=$_POST['password'];

$q = " select * from alumni where fname = '$fname' && password = '$password' ";
$result = mysqli_query($con , $q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username']=$fname;
	header('location:alumni.php');
} 
else
{
	header('location:index.php');
}

?>