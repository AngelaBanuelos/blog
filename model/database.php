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
	//this function opens the connection to the databse
	//A function will be executed by a call to the function.
	public function openConnection(){
		//establishes a new connection 
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			//this checks if there is an error in our connection
				if($this->connection->connect_error){
					//if thier is an error it outputs Error
		die("<p>Error: " . $this->connection->connect_error . "</p>");
		}

	}
	//this function closes the connection
	public function closeConnection(){
		//checks if the you opened the connection 
		//checks if the variable has been set and isnt NULL
		if(isset ($this->connection)) {
			//if  true, close the connection
				$this->connection->close();

		}

	}
	//every time we call the query we have to write a string 
	//in the end it wil be passed as a variable 
	public function query($string){


	}
}