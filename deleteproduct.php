<---Connor Sidwell--->
<?php
//Include the connection.php script
include "connection.php";

//Get the post from a form
$Delete = $_POST['Number'];

//Delete from the catalogue where the itemid is equal too the delete variable
$sql = "DELETE FROM catalogue WHERE Itemid = '$Delete'";

//If the item is successfully deleted give the admin a link back to admin page and a confirmation 
if (mysqli_query($link, $sql)) {
    echo "The item has been deleted from the catalogue. <a href=http://a2172222053.wss01.tcathosting.co.uk/admin.php>Return to Admin Page</a>";
}
//(Debugging)
else
{
echo "Fail";	
}
?>