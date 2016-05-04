<---Connor Sidwell--->
<?php
//Include the connection to the database script
include "connection.php";

//Start the session to make sure the login is logged in
session_start();

//The user variable is the user who is logged into the current session
$user = $_SESSION['login'];
//Created variable to post the itemid from a form with the post method
$itemid = $_POST['itemid'];

//select productdescription and price from catalogue where productdescription is the same as the itemid variable posted from a form
$sql = "SELECT ProductDescription, price FROM catalogue WHERE ProductDescription='$itemid'";

//if there is no connection to the database tell the user the connection failed and give the mysqli error
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}


//Store the results in a new varialbe and create the link to the database
$result = mysqli_query($link,$sql);

//if there is a result in the variable fetch it and store it into a new variable
if ($row = mysqli_fetch_assoc($result))
{
	//store the results from the post form into new seperate variables
	$userid = $user;
	$productid = $row['ProductDescription'];
	$price = $row['price'];
	
	//Insert all of the results into a new table on the database called basket using the variables
	$sql = "INSERT INTO basket ( user,id, price) VALUES ('$userid', '$productid', '$price')";
}

//If the sql has been completed display a message
if (mysqli_query($link, $sql)) {
    echo "Your order has been placed, Thank you. <a href=http://a2172222053.wss01.tcathosting.co.uk/Catalogue.php>Return to Catalogue</a>";
}
//If something failed or the user was there without using the form display a message saying fail (Mostly for debugging)
else
{
echo "Fail";	
}

?>