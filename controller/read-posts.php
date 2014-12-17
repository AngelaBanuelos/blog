<?php
//connects to the directory 
require_once(__DIR__ . "/../model/config.php");
// using query variable to select from the posts table 
$query = "SELECT * FROM posts";
//results gets the posts from database
$result = $_SESSION["connection"]->query($query);
// this if satement makes it so you can actaully post your post on your page. 
if($result){
	while($row = mysqli_fetch_array($result)) {
		//making a div named post
		echo "<div class='post'>";
		//using h2 so the title larger and were grabbing from the row the title is in 
		echo "<h2>" . $row['title'] . "</h2>";
		//this is to post the time and date 
	    echo "<p>" . $row['DateTime'] . "</p>";
	    // this is for space
		echo "<br />";
		//this is grabbing from the row our posts are in
		echo "<p>" . $row['post'] . "</p>";
		// for space 
		echo "<br/>";
		// this closes the div
		echo "</div>";
	}
}

