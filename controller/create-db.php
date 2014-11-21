<?php
//this looks for database.php
require_once(__DIR__ . "/../model/config.php");

//this query creates a table
//table is used to put info in it
//the table is called post and must have id, title, and post text
//the table must be not empty(null)
//Added a session variable
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
//checks to see if the table is created successfully
if($query) {
		echo "<p>Successfully created table: posts</p>";
	}
else{
	//Added a session variable, which preserves info.
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
