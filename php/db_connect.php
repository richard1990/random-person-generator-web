<?php
	/**
	 * This file creates a connection to the database.
	 */

	$servername = "localhost";
	$username = "testuser";
	$password = "testuser1";
	$db = "randperson";
	
	// check MySQL connection
	$conn = new mysqli($servername, $username, $password, $db);
	if (mysqli_connect_errno()) {
		die("Could not connect to the database!");
	}
?>