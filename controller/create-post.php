<?php
//require database file
require_once(__DIR__ . "/../model/config.php");
//able to create connection using mysqli object
//all these parameters are in the database.php
$connection = new mysqli($host, $username, $password, $database);
//the variable filters the input and gets the post from title and filters it to make sure its a string
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//the post means to get the data and filter it
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//run query to insert things into table
//sql command starts off with an active/verb
$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
//use conditional statement to see if its true or false
// to see we are successful in inserting info into the database
if($query){
		// if successful outputs a title 
		echo "<p>Successfully inserted post: $title and $post</p>";

}
else{
	// if not successful dusplay and error
	echo "<p>$connection->error</p>";
}
//it closes the connection
$connection->close();

