<---Connor Sidwell--->
<?php
//Include the connection.php script
include "connection.php";

//Start the session for the user
session_start();

//This is the script that runs with the edit on admin page it stores the posts from the edit form and puts them into the catalouge DB
$EditID = $_POST['EditID'];
$ID = $_POST['NewID'];
$Description = $_POST['NewDescription'];
$Price = $_POST['NewPrice'];

$sql = "UPDATE catalogue SET Itemid='$ID', ProductDescription='$Description' ,price='$Price' WHERE
Itemid='$EditID'"; 

//if the link is not working give an error.
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}

//Display a message saying its been edited successfully.
if (mysqli_query($link, $sql)) {
    /*echo "The item has been Edited. <a href=http://a2172222053.wss01.tcathosting.co.uk/admin.php>Return to Admin Page</a>";*/
	
	echo $sql;
}
//(Debugging)
else
{
echo "Fail";	
}

?>