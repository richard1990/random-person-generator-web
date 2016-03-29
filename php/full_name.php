<?php
	/**
	 * This file generates a random full name.
	 */
	 
	$isMale = "";
	$firstName = "";
	$lastName = "";
	$mothersMaidenName = "";

	// get value from "scripts.js" file to determine gender
	if (isset($_POST["post_ismale"])) {
		if ($_POST["post_ismale"] == "true") {
			$isMale = True;
		}
		else {
			$isMale = False;
		}
	}
	
	// build arrays with data from TXT files
	if ($isMale) {
		$firstNameArr = file('txt_files/male_first_names.txt');
	}
	else {
		$firstNameArr = file('txt_files/female_first_names.txt');
	}
	$lastNameArr = file('txt_files/last_names.txt');
	
	// generate a random first and last name
	$firstName = trim($firstNameArr[rand(0, count($firstNameArr) - 1)]);
	$lastName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	
	// generate maiden names
	$mothersMaidenName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	$maidenName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);

	// concatenate first name and last name 
	$fullName = $firstName . " " . $lastName;
	
	// store session data
	$_SESSION["firstName"] = $firstName;
	$_SESSION["lastName"] = $lastName;
	$_SESSION["maidenName"] = $maidenName;
	$_SESSION["mothersMaidenName"] = $mothersMaidenName;
	$_SESSION["isMale"] = $isMale;
?>