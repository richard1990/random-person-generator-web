<?php
	/**
	 * This file generates a random e-mail based on the person's full name.
	 */
	
	$emailArr = array("@outlook.com", "@hotmail.com", "@yahoo.com", "@gmail.com", "@msn.com", "@aol.com");
	// e-mails will have up to 5 random numbers included in it 
	$randomEmailNum = rand(0, 99999);
	$firstName = "";
	$lastName = "";
	
	if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) {
		$firstName = $_SESSION["firstName"];
		$lastName = $_SESSION["lastName"];
	}
	
	// generate email, will be something like "firstname.lastname55555@aol.com"
	$email = $firstName . "." . $lastName . $randomEmailNum . $emailArr[rand(0, count($emailArr) - 1)];
	$_SESSION["email"] = $email;
?>