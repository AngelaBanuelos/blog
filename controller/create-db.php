<?php
//this looks for database.php
require_once(__DIR__ . "/../model/config.php");

//this query creates a table
//table is used to put info in it
//the table is called post and must have id, title, and post text
//the table must be not empty(null)
//this table echos date and time
//Added a session variable
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "DateTime datetime NOT NULL, " 
	. "PRIMARY KEY (id))");
//checks to see if the table is created successfully
/*if($query) {
		echo "<p>Successfully created table: posts</p>";
	}
else{
	//Added a session variable, which preserves info.
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	*/
	//this query creates a tbale 
	//the table stores users
	//this table is called users
	//this tbael must not be empty
	//added a session variable
	
	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT, "
		. "username varchar(30) NOT NULL, "
		. "email varchar(50) NOT NULL, "
		. "password char(128) NOT NULL, "
		. "salt char(128) NOT NULL, "
		. "PRIMARY KEY (id))");

	/*if($query) {
		//checks if the table was created successfully
		echo "<p> Successfully created table users</p>";
	}
	else{
		//added a session variable, which preserves info
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	
	*/