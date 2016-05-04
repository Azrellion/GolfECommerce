<---Connor Sidwell--->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title >Golfy Goodies Home</title>
<script  id='CSCO_GHOST' src="/+webvpn+/toolbar.js"></script><script  id='CSCO_GHOST' src="/+CSCOL+/cte.js"></script><script id='CSCO_GHOST' src="/+CSCOE+/apcf"></script><script id='CSCO_GHOST'>CSCO_seppuku();$CSCO_cookie_ver=CSCO_WebVPN['get_cookie_version'](); if($CSCO_cookie_ver.length>0){document.write('<script id=CSCO_GHOST src=/+CSCOE+/cookie?v='+$CSCO_cookie_ver+'></S'+'CRIPT>');}</script>
<script  id='CSCO_GHOST' src="/+CSCOE+/session.js"></script><script  id='CSCO_GHOST'>CSCO_seppuku();sessionCheck('/+CSCOE+/ping.html'); setInterval("sessionCheck('/+CSCOE+/ping.html')",60000);setInterval("sessionCookieCheck()",5000)</script><script id='CSCO_GHOST'>CSCO_seppuku();CSCO_dblcode=3</script><link href="/+CSCO+03756767633A2F2F67757275686F2E67706E672E6172676A626578++/apps/style.css" rel="stylesheet" type="text/css" />
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
      
      <form id="form2" name="form2" method="post" action="-CSCO-30--Register.php" >
        <p > Not Signed up Yet? <input type="submit" name="register" id= "register" value="Sign Up" > </p>
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
      ?>
      
    <a href="-CSCO-3h--Basket.php" ><img src="-CSCO-31--Images/shopping-cart-button.png" width="54" height="48" alt="Shopping Cart" /></a>
    
     <a href="-CSCO-3h--search.php" ><img src="-CSCO-31--Images/Search.png" width="54" height="48" alt="Search" /></a></div>
    
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Navigation" >
    <p > <a href="-CSCO-3h--index.php" >Home</a> | <a href="-CSCO-3h--Catalogue.php" >Catalogue</a> | <a href="-CSCO-3h--Contactus.php" >Contact Us</a> | <a href="-CSCO-3h--Aboutus.php" >About Us</a></p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Content" >
  <p >&nbsp;</p>
    <p >Welcome to Golfy Goodies, Please select an option from the list to make a purchase</p>
    <p >&nbsp;</p>
    <p >If you are not logged in please login using the form at the top of the page.</p>
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Footer" >
    <p >Copyright Connor Sidwell <strong >©</strong> 2015</p>
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