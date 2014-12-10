<?php
	require_once(__DIR__ . "/../config.php");
require_once(__DIR__ . "/../contorller/login-verify.php");

	unset($_SESSION[authenticated]);

	session_destroy();
	header("Location: " . $path . "index.php");