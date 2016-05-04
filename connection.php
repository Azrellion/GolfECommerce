<---Connor Sidwell--->
<?php

//$dbname is the variable to hold the name of the database

$dbname="a2172222053_Simple_Hosting_1417111862";    

 

//Open a new connection to MySQL AND database

$link = mysqli_connect ("localhost","a2172222053","f7k2xwux", $dbname);

 

//Control errors and give feedback

if (mysqli_connect_errno())    {

   echo mysqli_connect_errno(). ": Failed to connect to MySQL: " . mysqli_connect_error();

 }  

//alert user if not connected $link will be TRUE or FALSE so !FALSE is TRUE  

if (!$link)  {

    print ("error connecting to database<br>");

}

else  {

  //echo "Connected";

}

?>
