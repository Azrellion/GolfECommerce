<---Connor Sidwell--->
<?php
//Include the connection.php script
include "connection.php";

//Start the session for the user
session_start();

//Set variables
$user = $_SESSION['login'];
$quantity = $_POST['quantity'];
$itemid = $_POST['itemid'];

//Set variable sql to select the quantity from basket DB where variables equal itemid and user.
$sql = "SELECT quantity FROM basket WHERE id='$itemid' AND user='$user'";

//if the connection fails display error
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}


//Result variable stores the sql and DB link
$result = mysqli_query($link,$sql);

//If result has data update basket set a new quantity
if ($row = mysqli_fetch_assoc($result))
{	
	$sql = "UPDATE basket SET quantity = '$quantity' WHERE id='$itemid' AND user='$user'";
}



//if it works display done to user
if (mysqli_query($link, $sql)) {
  echo  "Done";
}
//debug
else
{
echo "Fail";	
}

?>