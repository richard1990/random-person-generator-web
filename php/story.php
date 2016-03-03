<?php
	/**
	 * This file generates a story based on all the data that
	 * was generated.
	 */
	session_start();
	/** lot of variables obtained from session */
	$firstName = "";
	$lastName = "";
	$isMale = "";
	$maidenName = "";
	$birthday = "";
	$birthplace = "";
	$age = "";
	$favFood = "";
	$favColour = "";
	$neverMarried = "";
	$mothersMaidenName = "";
	$children = "";
	$occupation = "";
	$residence = "";
	$hairColour = "";
	$eyeColour = "";
	$height = "";
	$weight = "";
	$bloodType = "";
	
	if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["male"]) && isset($_SESSION["maidenName"]) && 
		isset($_SESSION["birthday"]) && isset($_SESSION["birthplace"]) && isset($_SESSION["age"]) && isset($_SESSION["favFood"]) &&
		isset($_SESSION["favColour"]) && isset($_SESSION["neverMarried"]) && isset($_SESSION["mothersMaidenName"]) && isset($_SESSION["children"]) &&
		isset($_SESSION["occupation"]) && isset($_SESSION["residence"]) && isset($_SESSION["hairColour"]) && isset($_SESSION["eyeColour"]) &&
		isset($_SESSION["height"]) && isset($_SESSION["weight"]) && isset($_SESSION["bloodType"])) {
		$firstName = $_SESSION["firstName"];
		$lastName = $_SESSION["lastName"];
		$isMale = $_SESSION["male"];
		$maidenName = $_SESSION["maidenName"];
		$birthday = $_SESSION["birthday"];
		$birthplace = $_SESSION["birthplace"];
		$age = $_SESSION["age"];
		$favFood = $_SESSION["favFood"];
		$favColour = $_SESSION["favColour"];
		$neverMarried = $_SESSION["neverMarried"];
		$mothersMaidenName = $_SESSION["mothersMaidenName"];
		$children = $_SESSION["children"];
		$occupation = $_SESSION["occupation"];
		$residence = $_SESSION["residence"];
		$hairColour = $_SESSION["hairColour"];
		$eyeColour = $_SESSION["eyeColour"];
		$height = $_SESSION["height"];
		$weight = $_SESSION["weight"];
		$bloodType = $_SESSION["bloodType"];
	}
	echo "You are <b>" . $firstName . " " . $lastName . "</b>";
	/** check if female and if they married to display maiden name */
	if (!$isMale and $neverMarried) {
		echo " (n&eacute;e <b>" . $maidenName . "</b>)";
	}
	echo ". You were born on " . $birthday . " in " . $birthplace . " and reside in " . $residence . ". "; 
	echo "You are " . $age. " years old. ";
	echo "You have " . strtolower($eyeColour) . " eyes and " . strtolower($hairColour) . " hair. ";
	echo "You are " . $height . " tall and weigh " . $weight . ". ";
	echo "Your blood type is type " . $bloodType . ". ";
	/** display occupation pending age */
	if ($age > 22 && $age < 65) {
		echo "You work as a(n) " . $occupation . ". ";
	}
	else if ($age > 65) {
		echo "You are retired. ";
	}
	echo "Your favourite food is " . strtolower($favFood) . " and your favourite colour is " . strtolower($favColour) . ". ";
	echo "Your mother's maiden name is " . $mothersMaidenName . ". ";
	if ($children < 1) {
		echo "You have no children. ";
	}
	else if ($children == 1) {
		echo "You have 1 child. ";
	}
	else {
		echo "You have " . $children . " children. ";
	}
?> 