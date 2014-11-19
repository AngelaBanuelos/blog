<?php
//this looks for database.php
require_once(__DIR__ . "/../model/config.php");
//this looks for the indicated varaibles
//$connection = new mysqli($host, $username, $password);

//thsi checks if there is an error i our connection
if($connection->connect_error){
die("<p>Error: " . $connection->connect_error . "</p>");
}
//checks if select exists
$exists = $connection->select_db($database);
//checks if databse doesnt exist 
if(!$exists){
	//if not, then you create one.
	$query = $connection->query("CREATE DATABASE $database");

	if($query){
		//jif it created it prints out the sentance
		echo "<p>Successfully created database: " . $database . "</p>";
	}
}
//database is already there
else{
	echo "<p>Database already exists</p>";
}
//this query creates a table
//table is used to put info in it
//the table is called post and must have id, title, and post text
//the table must be not empty(null)
$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
//checks to see if the table is created successfully
if($query) {
		echo "<p>Successfully created table: posts</p>";
	}
else{
	echo "<p>$connection->error</p>";
}
//closes connection
$connection->close();