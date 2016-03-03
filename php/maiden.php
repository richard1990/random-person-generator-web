<?php
	/**
	 * This file generates a maiden name (for females).
	 */
	session_start();
	$neverMarried = False;
	$isMale = True;
	$maidenName = "";
	$lastName = "";
	$generatedMaidenName = "";
	if (isset($_SESSION["male"]) && isset($_SESSION["lastName"]) && isset($_SESSION["maidenName"])) {
		$isMale = $_SESSION["male"];
		$lastName = $_SESSION["lastName"];
		$generatedMaidenName = $_SESSION["maidenName"];
	}
	/** males do not get a maiden name */
	if ($isMale) {
		$maidenName = "N/A";
	}
	else {
		/** if the person is listed as Single, then they never married
			so their maiden name is same as their last name */
		if ($neverMarried) {
			$maidenName = $lastName;
		}
		/** otherwise get the maiden name generated in male/female_full_name.php */
		else {
			$maidenName = $generatedMaidenName;
		}
	}
	echo $maidenName;
?>