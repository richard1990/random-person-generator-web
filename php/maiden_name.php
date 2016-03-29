<?php
	/**
	 * This file generates a maiden name (for females).
	 */
	 
	$neverMarried = "";
	$isMale = "";
	$maidenName = "";
	$lastName = "";
	$generatedMaidenName = "";
	
	if (isset($_SESSION["isMale"]) && isset($_SESSION["lastName"]) && isset($_SESSION["maidenName"]) && isset($_SESSION["neverMarried"])) {
		$isMale = $_SESSION["isMale"];
		$lastName = $_SESSION["lastName"];
		$generatedMaidenName = $_SESSION["maidenName"];
		$neverMarried = $_SESSION["neverMarried"];
	}
	
	// males do not get a maiden name
	if ($isMale) {
		$maidenName = "N/A";
	}
	else {
		// if the person is listed as Single, then they never married
		// so their maiden name is same as their last name
		if ($neverMarried) {
			$maidenName = $lastName;
		}
		else {
			$maidenName = $generatedMaidenName;
		}
	}
?>