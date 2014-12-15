<?php
	require_once(__DIR__ . "/../model/config.php");
	
	//to verify if user has logged in
	function authenticateUser() {
		if(!isset($_SESSION["authenticated"])) {
			return false;
		}
		
		else{
			if($_SESSION["authenticated"] != true){
				return false;
			}
			else{
				return true;
			}
		}


	}