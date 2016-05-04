<---Connor Sidwell--->
<?php
//Start the session
session_start();
//Destroy the session
session_destroy();
//Clear anything the session may save
session_unset();
//Destroy again just to make sure
session_destroy();
//Send back to index so user isnt greeted with blank screen
header("location:index.php");

?>