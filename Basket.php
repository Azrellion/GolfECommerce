<---Connor Sidwell--->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title >Basket</title>
<script  id='CSCO_GHOST' src="/+webvpn+/toolbar.js"></script><script  id='CSCO_GHOST' src="/+CSCOL+/cte.js"></script><script id='CSCO_GHOST' src="/+CSCOE+/apcf"></script><script id='CSCO_GHOST'>CSCO_seppuku();$CSCO_cookie_ver=CSCO_WebVPN['get_cookie_version'](); if($CSCO_cookie_ver.length>0){document.write('<script id=CSCO_GHOST src=/+CSCOE+/cookie?v='+$CSCO_cookie_ver+'></S'+'CRIPT>');}</script>
<script  id='CSCO_GHOST' src="/+CSCOE+/session.js"></script><script  id='CSCO_GHOST'>CSCO_seppuku();sessionCheck('/+CSCOE+/ping.html'); setInterval("sessionCheck('/+CSCOE+/ping.html')",60000);setInterval("sessionCookieCheck()",5000)</script><script id='CSCO_GHOST'>CSCO_seppuku();CSCO_dblcode=3</script><link href="-CSCO-33--style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<div id="Envelope" >
    
  <div id="Header" >
  
    <div id="logo" >
    
      <img src="-CSCO-31--GolfyGoodiesLogo.png" alt="GolfyGoodies Logo" width="200" height="200" />
      <p >&nbsp;</p>
      <p >&nbsp;</p>
    </div>
    
   <div id="form" >
    <?php
	//SEE ABOUTUS.PHP FOR MORE DETAILED BREAKDOWN AS ITS THE SAME CODE --------
    session_start();
    if(isset($_SESSION['login']))
    {
    	$username = $_SESSION['login'];
    	echo "Welcome " . $username . "";
    	
    	echo "<a href='-CSCO-3h--logout.php' >logout</a>" . "<br >";
		
		echo "<a href=https://vpn.tcat.ac.uk/+CSCO+0h756767633A2F2F6E323137323232323035332E6A666630312E67706E67756266677661742E70622E6878++/Userpage.php >Account Page</a>";
    }
    
    if(!isset($_SESSION['login']))
    {
    
    ?>
   
    
      <form id="form1" name="form1" method="post" action="-CSCO-30--Login.php" >
        <p >
          <label for="username" >Username:</label>
          <input type="text" name="username" id="username" />
        </p>
        <p >
          <label for="password" >Password:</label>
          <input type="text" name="password" id="password" />
          <input type="submit" name="login2" id="login2" value="Login" />
        </p>
      </form>
      
      <form id="form1" name="form1" method="post" action="-CSCO-30--Register.php" >
        <p > Not Signed up Yet? <input type="submit" name="register" id register value="Sign Up" /> </p>
      </form>
      
      <?php
      
	}
	  
      include "connection.php";
	  
	  $sql = "SELECT * FROM Login Where Username='$username'";
	  
	  $result = mysqli_query($link,$sql);
	  $row = mysqli_fetch_assoc($result);
	  
	  if($row['Security'] == "1")

	  {
		  
		  ?>
		 <a href="-CSCO-3h--admin.php" ><img src="-CSCO-31--Images/gear-512.png" width="54" height="48" alt="Admin Button" /></a>
         <?php

	  }
	  else
	  {
		  echo "";
	  }
	  
	 
	  //--------SEE ABOUTUS.PHP FOR MORE DETAILED BREAKDOWN AS ITS THE SAME CODE
      ?>
      
    <a href="-CSCO-3h--Basket.php" ><img src="-CSCO-31--Images/shopping-cart-button.png" width="54" height="48" alt="Shopping Cart" /></a>
     
     <a href="-CSCO-3h--search.php" ><img src="-CSCO-31--Images/Search.png" width="54" height="48" alt="Search" /></a>
      
    </div>
    
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Navigation" >
    <p > <a href="-CSCO-3h--index.php" >Home</a> | <a href="-CSCO-3h--Catalogue.php" >Catalogue</a> | <a href="-CSCO-3h--Contactus.php" >Contact Us</a> | <a href="-CSCO-3h--Aboutus.php" >About Us</a></p>
  </div>
  
  <div id="Content" >
    <p ><?php 

	//Start the session to make sure the login is logged in
	session_start();
	
	//Set the user variable to the session
	$user = $_SESSION['login'];
	
	//If the connection is not working display an error message
	if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}
//Select everything from the table basket where the user is equal too the user variable
$sql = "SELECT * FROM basket Where user='$user'";
//store the sql variable and create a database connection in result
$result = mysqli_query($link,$sql);

//if the result variable fetches more than 0 rows (Not empty) then fetch them and echo them while there is still rows to fetch
if(mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "Item: " . $row['id'] . "<br >";
		echo "Price: £" . $row['price'] . "<br >";
		echo "Quantity: " . $row['quantity'] ?>
        <!---This form allows you to edit the quantity of the item and displays a javascript box to confirm your adjustment to the product--->
        <form action="-CSCO-30--quantity.php" method="post" >
          <input name="quantity" type="text" value="0" >
          <input name="itemid" type="hidden" value="<?php echo $row['id'];?>" >
          <input type="submit" value="Add" >
        </form>
        
        <button onclick="Areyousure('<?php echo $row['id'];?>')" >Delete</button><br >
        
        <?php  
	}
}
//If the user variable is not set (User isnt logged in via session) it displays a message telling the user to login to view there cart as the cart is user specific
else
{
	if(!$user)
	{
		echo "Please Login to view your cart" . "<br >";
	}
	//If the user is logged in and the basket is empty it displays a message telling the user its empty.
	else
	{
	echo "0 results" . "<br >";
	}
}

//A variable that works out the quantity times by the price as a total to be displayed at the bottom of the page where the user is equal to the user variable.
$sql = "SELECT SUM(quantity * price) AS total FROM basket WHERE user = '$user'";

$result = mysqli_query($link, $sql);
//Loop the sum until it has calculated all of the rows then print the total off all of them so the user can see the basket total.
while ($row = mysqli_fetch_array($result)) {

	echo "Total : £   ".$row['total'];

}
	?>
    
    <form action="-CSCO-30--completedorder.php" method="post" >
          <input name="postuser" type="hidden" value="<?php echo $user;?>" >
           <input name="complete" type="submit" value="Complete Order" >
        </form>
    
    
    <p id="demo" > </p>
	<!---This is the javascript that displays the message when the user wants to add a total.--->
    <script >
	function Areyousure(itemid){
		var Option;
		if(confirm("Are you sure?")==true)
		{
			Option = "Item Deleted";
			CSCO_WebVPN["call"](CSCO_WebVPN["get"](window,"location"),"replace")("delete.php?itemid=" + itemid);
		}
		else
		{
			Option = "Cancelled";
		}
		CSCO_Util["nope"]((csco_tmp_9336=document.getElementById("demo"),csco_tmp_9336.innerHTML=CSCO_WebVPN["put"](csco_tmp_9336,"innerHTML",Option)));
	}
	</script><script id='CSCO_GHOST' language='JavaScript'>CSCO_seppuku();CSCO_WebVPN["flush"]();</script>
			
  </div>
  
  <div id="Footer" >
    <p >Copyright Connor Sidwell <strong >©</strong> 2015</p>
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
  <p >&nbsp;</p>
</div>

</body>
</html>
<script id='CSCO_GHOST'>top.noUrlEntry=true; CSCO_seppuku();</script></comment id='CSCO_GHOST'></noscript id='CSCO_GHOST'><script id='CSCO_GHOST'  language='JavaScript'>CSCO_seppuku();if(!window.onresize || 'undefined' == typeof(window.onresize.nTop)){var csco_tb='if(!document.body) {window.csco_setTimeout(csco_tb, 100);}else{window.csco_setTimeout(CSCO_ITB_show,500);var csco_bodyonresize = document.body.onresize; document.body.onresize = function (){if(csco_bodyonresize){csco_bodyonresize();};CSCO_ITB_resize();}; var csco_selfonresize=self.onresize; self.onresize = function (){if(csco_selfonresize){csco_selfonresize();};CSCO_ITB_resize();};var csco_bodyonscroll=document.body.onscroll;document.body.onscroll = function (){if(csco_bodyonscroll){csco_bodyonscroll();};CSCO_ITB_resize();};var csco_selfonscroll=self.onscroll;self.onscroll = function (){if(csco_selfonscroll){csco_selfonscroll();};CSCO_ITB_resize();};};'; eval(csco_tb);CSCO_seppuku();}</script>