<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<header id="header">
<h1 id="para1">J.</h1> 
<h1 id="para2">Cole
<a class="link1" href="http://www.instagram.com">
<img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Instagram-128.png" alt="IG" width="42" height="42" border="0"></a>
<a class="link2" href="http://www.instagram.com">
<img src="https://cdn2.iconfinder.com/data/icons/social-media-2/512/Facebook_Button-128.png" alt="IG" width="42" height="42" border="0"></a>
<a class="link2" href="http://www.instagram.com">
<img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_black-128.png" alt="IG" width="42" height="42" border="0"></a>
</h1>

<div id="line"></div>
</header>

<section id="section">
<div id="div1"></div>
<div id="div2" >
	<div class="circular"></div>
</div>
</section>
<footer id="footer">
	&copy angela banuelos
</footer>
</body>
</html>

	<?php
	require_once(__DIR__ . "/controller/login-verify.php");
	//uisng the header file
	//it stores the header html code in the header.php file 
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser()) {
		//using the navigation file 
		//it stores the info in navigation.
		require_once(__DIR__ . "/view/navigation.php");
	}
	//this is where youll have html code and get info from the model
	//the DIR concatinates 
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/controller/read-posts.php");
		//using the footer file
	//it stores the footer html code in the footer.php file
	require_once(__DIR__ . "/view/footer.php");

	?>
