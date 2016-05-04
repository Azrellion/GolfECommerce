<---Connor Sidwell--->
<?php
//Include the connection.php script
include "connection.php";

//Start the session
session_start();

//Create variables for the session and a get variable
$user = $_SESSION['login'];
$itemid = $_GET['itemid'];
//$price = $_POST

//If there is no connection to the database display an error.
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}

//variable that deletes items from DB Basket where the rows are equal to the variables.
$sql = "DELETE FROM basket WHERE id ='$itemid' AND user='$user'";


//Echo the items that have been deleted to show you deleted the correct ones.
if (mysqli_query($link, $sql)) {
	echo "'$itemid'" . "<br>";
	echo "'$user'" . "<br>";
	echo "Your item has been deleted. <a href=http://a2172222053.wss01.tcathosting.co.uk/Basket.php>Return to Catalogue</a>";

}
else
{
echo "Fail";	
}

?>