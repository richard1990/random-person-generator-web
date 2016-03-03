<?php
	/**
	 * This file generates a random female full name.
	 */
	session_start();
	$male = False;
	$firstName = "";
	$lastName = "";
	$mothersMaidenName = "";

	/** build arrays with data from TXT files */
	$firstNameArr = file('txt_files/female_first_names.txt');
	$lastNameArr = file('txt_files/last_names.txt');
	
	/** get a random first and last name */
	$firstName = trim($firstNameArr[rand(0, count($firstNameArr) - 1)]);
	$lastName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	
	/** also generate a random maiden name and mother's maiden name */
	$maidenName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	$mothersMaidenName = trim($lastNameArr[rand(0, count($lastNameArr) - 1)]);
	
	/** store session data */
	$_SESSION["firstName"] = $firstName;
	$_SESSION["lastName"] = $lastName;
	$_SESSION["maidenName"] = $maidenName;
	$_SESSION["mothersMaidenName"] = $mothersMaidenName;
	$_SESSION["male"] = $male;

	/** generate full name */
	$femaleFullName = $firstName ." " . $lastName;
	echo $femaleFullName;
?>