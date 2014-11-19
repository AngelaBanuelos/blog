<?php
$path = "/blog/";

//you store information here
//closing tag isnt needed when only php
//this is where you store database server information
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
//created a new object
$connection = new Database($host, $username, $password, $database);
