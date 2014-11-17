<?php
// this class serves as a packet and holds all the private variables
// a class is a collection of variables
//it creates an object that connects to the database 
class Database {
	//private makes the variables unavailable to other classes. 
	private $connection;
	//private makes the variables unavailable to other classes. 
	private $host;
	//private makes the variables unavailable to other classes. 
	private $password;
	//private makes the variables unavailable to other classes. 
	private $database;
	//local variables
	//this is the constructor of the class
	//this construct function is needed in order to make the objects 
	public function __construct($host, $username, $password, $database) {
		//setting our global variables to our local variables 
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	//this function opens the connection
	public function openConnection(){

	}
	//this function closes the connection
	public function closeConnection(){


	}
	//every time we call the query we have to write a string 
	//in the end it wil be passed as a variable 
	public function query($string){


	}
}