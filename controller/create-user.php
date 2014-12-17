<?php
//requires the config file so that this file can use the info in the config page
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");
//this variable stores the emial of a user to the databse 
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//this variable stores the username of a user to the database
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
//this variable stores the passwrod of a user to the database
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//this variable creates a hash so that the passwprds are unique and protected
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);
//creates a query so that i can storethe encrypted passwords in database using sessions
$query = $_SESSION["connection"]->query("INSERT INTO users SET "
	. "email = '$email', "
	. "username = '$username', "
	. "password = '$hashedPassword', "
	. "salt = '$salt'");

if($query) {
	echo "Successfully created user: $username";
}
else{
	echo "<p>" . $_SESSION("connection")->erroe . "</p>";
}