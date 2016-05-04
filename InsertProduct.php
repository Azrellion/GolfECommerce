<---Connor Sidwell--->
<?php
//Include the connection.php script
include "connection.php";

//Start the session for the user
session_start();

//This is the script that runs with the Insert on the admin page it stores the posts from the insert form and puts them into the catalouge DB
$ID = $_POST['ID'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];

$sql = "INSERT INTO catalogue (Itemid, ProductDescription ,price ) VALUES ('$ID', '$Description', '$Price')";

//if the link is not working give an error.
if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}

//Display a message saying its been added successfully.
if (mysqli_query($link, $sql)) {
    echo "The item has been added to the catalogue. <a href=http://a2172222053.wss01.tcathosting.co.uk/admin.php>Return to Admin Page</a>";
}
//(debugging)
else
{
echo "Fail";	
}

?>