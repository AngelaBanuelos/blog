	<?php
	//uisng the header file
	//it stores the header html code in the header.php file 
	require_once(__DIR__ . "/view/header.php");
	//using the navigation file 
	//it stores the info in navigation.
	require_once(__DIR__ . "/view/navigation.php");
	//this is where youll have html code and get info from the model
	//the DIR concatinates 
	require_once(__DIR__ . "/controller/create-db.php");
	//using the footer file
	//it stores the footer html code in the footer.php file
	require_once(__DIR__ . "/view/footer.php");

	$date = new  DateTime('today');

	?>

	<p> the output date is: <?php echo $date->format("m.d.y"); ?></p>

