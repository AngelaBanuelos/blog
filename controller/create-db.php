<?php
//this looks for database.php
require_once(__DIR__ . "/../model/database.php");
//this looks for the indicated varaibles
$connection = new mysqli($host, $username, $password);

//thsi checks if there is an error i our connection
if($connection->connect_error){
die("Error: " . $connection->connect_error);
}
//checks if select exists
$exists = $connection->select_db($database);
//checks if databse doesnt exist 
if(!$exists){
	//if not, then you create one.
	$query = $connection->query("CREATE DATABASE $database");
	if($query){
		//jif it created it prints out the sentance
		echo "Successfully created database: " . $database;
	}
}
//database is already there
else{
	echo "Database already exists";
}
$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");

if($query) {
		echo "<p>Successfully created table: posts</p>";
	}
else{
	echo "<p>$connection->error</p>";
}
//closes connection
$connection->close();