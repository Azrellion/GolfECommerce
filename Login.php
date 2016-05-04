<---Connor Sidwell--->
<?php
include "connection.php";

//Username and password from Form on Website
$Username = $_POST['username'];
$Password = $_POST['password'];

//Protection from SQL Injection
$Username = stripslashes($Username);
$Password = stripslashes($Password);
$Username = mysqli_real_escape_string($link,$Username);
$Password = mysqli_real_escape_string($link,$Password);
$sql="SELECT * FROM Login Where Username='$Username' and Password='$Password'";
$result=mysqli_query($link,$sql);
$num_rows = mysqli_num_rows($result);
//Mysql_num_rows counts table row


if($num_rows==1){
	
	
	//Register both username and password and redirect to login-correct.php
	session_start();
	
	$_SESSION['login']= "$Username";
	//echo "YAYY";
	header("location:index.php");
}
else
{
	echo "Wrong Username or Password <a href=http://a2172222053.wss01.tcathosting.co.uk/index.php>Try Again</a>";  	
}

?>