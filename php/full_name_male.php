<?php
	/**
	 * This file generates a random male full name.
	 */
	$male = True;
	$female = False;
	$firstName = "";
	$lastName = "";
	$mothersMaidenName = "";
	
	/** build arrays with data from TXT files */
	$firstNameArr = file('txt_files/male_first_names.txt');
	$lastNameArr = file('txt_files/last_names.txt');
	
	/** get a random first and last name */
	$firstName = trim($firstNameArr[rand(0, count($firstNameArr) - 1)]);
	$lastName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	
	/** also generate a random mother's maiden name */
	$mothersMaidenName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	
	/** store session data */
	$_SESSION["firstName"] = $firstName;
	$_SESSION["lastName"] = $lastName;
	$_SESSION["maidenName"] = $lastName;
	$_SESSION["mothersMaidenName"] = $mothersMaidenName;
	$_SESSION["male"] = $male;

	/** generate male full name */
	$maleFullName = $firstName . " " . $lastName;
?>