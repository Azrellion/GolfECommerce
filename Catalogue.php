﻿<---Connor Sidwell--->
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
      
    <a href="-CSCO-3h--search.php" ><img src="-CSCO-31--Images/Search.png" width="54" height="48" alt="Search" /></a> </div>
    
    <p >&nbsp;</p>
    <p >&nbsp;</p>
  </div>
  
  <div id="Navigation" >
    <p > <a href="-CSCO-3h--index.php" >Home</a> | <a href="-CSCO-3h--Catalogue.php" >Catalogue</a> | <a href="-CSCO-3h--Contactus.php" >Contact Us</a> | <a href="-CSCO-3h--Aboutus.php" >About Us</a></p>
    <p >
    <b ></p>
  </div>
  
  <div id="Content" >
  <!---This is a table that displays all of the items in the catalouge and adds a submit button this is the post form that will link to the basket when the user hits submit--->
    <table width="200" border="0" cellspacing="4" >
      <tr >
        <td ><p ><img src="-CSCO-31--Images/Callaway.jpg" width="225" height="225" alt="Callaway" /></p>
        <p ><form action="-CSCO-30--addtocart.php" method="post" >
          £90
            <input name="itemid" type="hidden" value="Callaway White" >
          <input type="submit" value="Add To Cart" >
        </form></p></td>
        <td ><p ><img src="-CSCO-31--Images/Titlelist.jpg" width="190" height="299" alt="Titleist Bag" /></p>
        <h3 ><strong ><form action="-CSCO-30--addtocart.php" method="post" >
          £70
                <input name="itemid" type="hidden" value="Titleist Black" >
          <input type="submit" value="Add To Cart" >
        </form></strong></h3></td>
        <td ><p ><img src="-CSCO-31--Images/Outlanderwithclubs.jpg" width="190" height="299" alt="Ping Bag" /></p>
        <p ><form action="-CSCO-30--addtocart.php" method="post" >
          £60
            <input name="itemid" type="hidden" value="Ping White" >
          <input type="submit" value="Add To Cart" >
        </form></p></td>
        <td ><p ><img src="-CSCO-31--Images/Callaway-Black.jpg" width="184" height="274" alt="Callaway Black" /></p>
          <form action="-CSCO-30--addtocart.php" method="post" >
          £90
            <input name="itemid" type="hidden" value="Callaway Black" >
          <input type="submit" value="Add To Cart" >
        </form></td>
        <td ><p ><img src="-CSCO-31--Images/Dragon.jpg" width="204" height="300" alt="Dragon" /></p>
        <p ><form action="-CSCO-30--addtocart.php" method="post" >
          £90
            <input name="itemid" type="hidden" value="Dragon" >
          <input type="submit" value="Add To Cart" >
        </form></p></td>
      </tr>
      <tr >
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
      </tr>
    </table>
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
<script id='CSCO_GHOST'>top.noUrlEntry=true; CSCO_seppuku();</script></comment id='CSCO_GHOST'></noscript id='CSCO_GHOST'><script id='CSCO_GHOST'  language='JavaScript'>CSCO_seppuku();if(!window.onresize || 'undefined' == typeof(window.onresize.nTop)){var csco_tb='if(!document.body) {window.csco_setTimeout(csco_tb, 100);}else{window.csco_setTimeout(CSCO_ITB_show,500);var csco_bodyonresize = document.body.onresize; document.body.onresize = function (){if(csco_bodyonresize){csco_bodyonresize();};CSCO_ITB_resize();}; var csco_selfonresize=self.onresize; self.onresize = function (){if(csco_selfonresize){csco_selfonresize();};CSCO_ITB_resize();};var csco_bodyonscroll=document.body.onscroll;document.body.onscroll = function (){if(csco_bodyonscroll){csco_bodyonscroll();};CSCO_ITB_resize();};var csco_selfonscroll=self.onscroll;self.onscroll = function (){if(csco_selfonscroll){csco_selfonscroll();};CSCO_ITB_resize();};};'; eval(csco_tb);CSCO_seppuku();}</script>