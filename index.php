<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<header id="header">
<h1 id="para1">J.</h1> 
<h1 id="para2">Cole</h1>
<div id="line"></div>
</header>
<section id="section">
<div id="div1"></div>
<div id="div2" >
	<div class="circular"></div>
</div>
</section>
</body>
</html>
	<?php
	require_once(__DIR__ . "/controller/login-verify.php");
	//uisng the header file
	//it stores the header html code in the header.php file 
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser() ) {
		//using the navigation file 
		//it stores the info in navigation.
		require_once(__DIR__ . "/view/navigation.php");
	}
	//this is where youll have html code and get info from the model
	//the DIR concatinates 
	require_once(__DIR__ . "/controller/create-db.php");
	//using the footer file
	//it stores the footer html code in the footer.php file
	require_once(__DIR__ . "/view/footer.php");
	require_once(__DIR__ . "/controller/read-posts.php");

	
	?>
