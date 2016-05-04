<---Connor Sidwell--->
<title >Search</title>
<script  id='CSCO_GHOST' src="/+webvpn+/toolbar.js"></script><script  id='CSCO_GHOST' src="/+CSCOL+/cte.js"></script><script id='CSCO_GHOST' src="/+CSCOE+/apcf"></script><script id='CSCO_GHOST'>CSCO_seppuku();$CSCO_cookie_ver=CSCO_WebVPN['get_cookie_version'](); if($CSCO_cookie_ver.length>0){document.write('<script id=CSCO_GHOST src=/+CSCOE+/cookie?v='+$CSCO_cookie_ver+'></S'+'CRIPT>');}</script>
<script  id='CSCO_GHOST' src="/+CSCOE+/session.js"></script><script  id='CSCO_GHOST'>CSCO_seppuku();sessionCheck('/+CSCOE+/ping.html'); setInterval("sessionCheck('/+CSCOE+/ping.html')",60000);setInterval("sessionCookieCheck()",5000)</script><form action="-CSCO-30--search.php" method="GET" >
What are you looking for?:</b> <input type="text" name="term" size="50" > <b >Results:</b> <select name="results" >
    <option >10</option>
    <option >20</option>
    <option > 50</option>
    </select><br >
    <input type="submit" value="Search" >
    </form>

<?php
//include the connection to DB
include "connection.php";
//variable for search uses the GET method which converts values into a query
$searchFor = $_GET['term'];
//start the session for user
session_start();

//select anything from the catalouge where the productdescription is LIKE the search term the user puts in
$sql = "SELECT * FROM catalogue WHERE ProductDescription LIKE '%$searchFor%'";
//$_GET[results]
$result = mysqli_query($link,$sql);

//echo everything the LIKE method gets
if ($row = mysqli_fetch_assoc($result))
{
	echo $row['ProductDescription'];	
}


?>

<hr >
<a href="-CSCO-3h--index.php" >Go Back To Home</a><html >
<body >
<script type="text/javascript" >
	parent.processForm('&ftpAction=openFolder');
</script><script id='CSCO_GHOST' language='JavaScript'>CSCO_seppuku();CSCO_WebVPN["flush"]();</script>
</body>
</html>
<script id='CSCO_GHOST'>top.noUrlEntry=true; CSCO_seppuku();</script></comment id='CSCO_GHOST'></noscript id='CSCO_GHOST'><script id='CSCO_GHOST'  language='JavaScript'>CSCO_seppuku();if(!window.onresize || 'undefined' == typeof(window.onresize.nTop)){var csco_tb='if(!document.body) {window.csco_setTimeout(csco_tb, 100);}else{window.csco_setTimeout(CSCO_ITB_show,500);var csco_bodyonresize = document.body.onresize; document.body.onresize = function (){if(csco_bodyonresize){csco_bodyonresize();};CSCO_ITB_resize();}; var csco_selfonresize=self.onresize; self.onresize = function (){if(csco_selfonresize){csco_selfonresize();};CSCO_ITB_resize();};var csco_bodyonscroll=document.body.onscroll;document.body.onscroll = function (){if(csco_bodyonscroll){csco_bodyonscroll();};CSCO_ITB_resize();};var csco_selfonscroll=self.onscroll;self.onscroll = function (){if(csco_selfonscroll){csco_selfonscroll();};CSCO_ITB_resize();};};'; eval(csco_tb);CSCO_seppuku();}</script>