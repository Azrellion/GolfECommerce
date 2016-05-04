<---Connor Sidwell--->
<?php
//Include the Connection.php script this script connects to the database
include "connection.php";
//Start the session to make sure the login is logged in
session_start();

//Create a variable for the user who is logged into the current session
$user = $_SESSION['login'];
//Create a variable that stores the post link from a form
$postuser = $_POST['postuser'];

//Variable that selects things from basket where the user row is equal to the postuser variable
$sql = "SELECT user, id, quantity, price FROM basket WHERE user='$postuser'";

//If there is no connection to the database display an error.
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}


//Store the sql variable and the connection to database into the result variable
$result = mysqli_query($link,$sql);

//loop the information gathered from the result variable while there is an association 
while ($row = mysqli_fetch_assoc($result))
{
	
	$userid = $user;
	$productid = $row['id'];
	$price = $row['price'];
	$quantity = $row['quantity'];
	
	//Insert everything gathered from the row variable into the completed order database
	$sql = "INSERT INTO completedorder ( user,description, price,quantity) VALUES ('$userid', '$productid', '$price', $quantity)";
	
	//If there is a link and the sql is inserted echo the sql to show what was stored.
	if (mysqli_query($link, $sql)) {
    /*echo "Thank you for placing your order you will get a confirmation email soon. <a href=http://a2172222053.wss01.tcathosting.co.uk/Catalogue.php>Return to Catalogue</a>";*/
        echo "$sql";
    } else {
        echo "Fail";	
    }
	//Delete the information from the basket database as its been moved to completed order and is now redundant data
	$sql = "DELETE FROM basket WHERE user = '$user'";
	
	//Echo to the user that the order has been completed
 	if (mysqli_query($link, $sql)) {
		echo "Your order has been placed, you can review past orders in your profile thank you for ordering."."<br>";
	}
	//(Debug message for coding)
	else{
		echo "Not working";
	}
	
	

}





?>