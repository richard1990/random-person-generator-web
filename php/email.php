<?php
	/**
	 * This file generates a random e-mail based on the person's full name.
<<<<<<< HEAD
	 */
	
	$emailArr = array("@outlook.com", "@hotmail.com", "@yahoo.com", "@gmail.com", "@msn.com", "@aol.com");
	// e-mails will have up to 5 random numbers included in it 
	$randomEmailNum = rand(0, 99999);
	$firstName = "";
	$lastName = "";
	
=======
	 * It requires a session to get the first name and last name of the
	 * person from male_full_name.php or female_full_name.php.
	 */
	
	$emailArr = array("@outlook.com", "@hotmail.com", "@yahoo.com", "@gmail.com", "@msn.com", "@aol.com");
	/** e-mails will have up to 5 random numbers included in it */
	$randomEmailNum = rand(0, 99999);
	$firstName = "";
	$lastName = "";
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) {
		$firstName = $_SESSION["firstName"];
		$lastName = $_SESSION["lastName"];
	}
	
<<<<<<< HEAD
	// generate email, will be something like "firstname.lastname55555@aol.com"
	$email = $firstName . "." . $lastName . $randomEmailNum . $emailArr[rand(0, count($emailArr) - 1)];
	$_SESSION["email"] = $email;
=======
	/* generate email */
	$email = $firstName . "." . $lastName . $randomEmailNum . $emailArr[rand(0, count($emailArr) - 1)];
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
?>