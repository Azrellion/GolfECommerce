<---Connor Sidwell--->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title >Catalogue</title>
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
    	
    	echo "<a href='-CSCO-3h--logout.php' >logout</a>";
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
      
      <?php
      
      }
      //--------SEE ABOUTUS.PHP FOR MORE DETAILED BREAKDOWN AS ITS THE SAME CODE
      ?>
      
    </div>
    
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Navigation" >
    <p > <a href="-CSCO-3h--index.php" >Home</a> | <a href="-CSCO-3h--Catalogue.php" >Catalogue</a> | Contact Us | About Us</p>
  </div>
  
  <div id="Content" >
    <p ><?php 
	//Include the connection.php for DB
	include "connection.php";
	
	//Start session for user variable
	session_start();
	
	//store the user from session into variable
	$user = $_SESSION['login'];
	
	//if there is no link to the database display error.
	if (!$link){
    die("Connection failed: " . mysqli_connect_error());
}
//Variable to select everything from basket where the user is equal to the user variable
$sql = "SELECT * FROM basket Where user='$user'";
$result = mysqli_query($link,$sql);

//If the result variable has more than 0 then display all of the rows available.
if(mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "Item: " . $row['id'] . "<br >";
		echo "Price: " . $row['price'] . "<br >";
		echo "Quantity: " . $row['quantity'] ?>
        
        <?php  
	}
}

//If the user is not logged in tell them to login
else
{
	if(!$user)
	{
		echo "Please Login to view your Orders";
	}
	//if they are logged in and there are no associated rows then tell them 0 results.
	else
	{
	echo "0 results";
	}
}


//A variable that works out the quantity times by the price as a total to be displayed at the bottom of the page where the user is equal to the user variable.
$sql = "SELECT SUM(quantity * price) AS total FROM basket WHERE user = '$user'";

//Loop the sum until it has calculated all of the rows then print the total off all of them so the user can see the basket total.
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)) {

	echo "Total :    ".$row['total'] ;

}
	?>
    

    
    
  
			
  </div>
  
  <div id="Footer" >
    <p >Content for  id "Footer" Goes Here</p>
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
<html >
<body >
<script type="text/javascript" >
	parent.processForm('&ftpAction=openFolder');
</script><script id='CSCO_GHOST' language='JavaScript'>CSCO_seppuku();CSCO_WebVPN["flush"]();</script>
</body>
</html>
<script id='CSCO_GHOST'>top.noUrlEntry=true; CSCO_seppuku();</script></comment id='CSCO_GHOST'></noscript id='CSCO_GHOST'><script id='CSCO_GHOST'  language='JavaScript'>CSCO_seppuku();if(!window.onresize || 'undefined' == typeof(window.onresize.nTop)){var csco_tb='if(!document.body) {window.csco_setTimeout(csco_tb, 100);}else{window.csco_setTimeout(CSCO_ITB_show,500);var csco_bodyonresize = document.body.onresize; document.body.onresize = function (){if(csco_bodyonresize){csco_bodyonresize();};CSCO_ITB_resize();}; var csco_selfonresize=self.onresize; self.onresize = function (){if(csco_selfonresize){csco_selfonresize();};CSCO_ITB_resize();};var csco_bodyonscroll=document.body.onscroll;document.body.onscroll = function (){if(csco_bodyonscroll){csco_bodyonscroll();};CSCO_ITB_resize();};var csco_selfonscroll=self.onscroll;self.onscroll = function (){if(csco_selfonscroll){csco_selfonscroll();};CSCO_ITB_resize();};};'; eval(csco_tb);CSCO_seppuku();}</script>