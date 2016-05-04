<---Connor Sidwell--->
<?php
include "connection.php";

//Username and password from Form on Website
$Username = $_POST['username'];
$Password = $_POST['password'];

//if there is no link to the database display error.
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}

//Variable to insert the values created from form into the Login DB
$sql="INSERT INTO Login (Username, Password) VALUES ('$Username', '$Password')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully <a href=http://a2172222053.wss01.tcathosting.co.uk/index.php>Login</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
	
?>