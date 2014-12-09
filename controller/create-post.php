<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
	<title></title>
</head>
<body>


<?php
//require database file
require_once(__DIR__ . "/../model/config.php");
//the variable filters the input and gets the post from title and filters it to make sure its a string
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//the post means to get the data and filter it
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//Makes a variable for date
$date = new DateTime('today');
//makes a variable for time
$time = new DateTime('America/Los_Angeles');


//run query to insert things into table
//sql command starts off with an active/verb
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
//use conditional statement to see if its true or false
// to see we are successful in inserting info into the database
if($query){
		// if successful outputs a title 
		echo "<p>Successfully inserted post: $title and $post</p>";
		//echos out the date and time
		echo  " Posted on: " . $date->format("m/d/y") . "at" . $time->format("g:i");
}
else{
	// if not successful dusplay and error
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

?>
</body>
</html>