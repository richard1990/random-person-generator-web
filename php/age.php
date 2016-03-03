<?php
	/**
	 * This file determines a person's age based on their birthdate.
	 */
	session_start();
	/** get current year, month, and day as numbers */
	$currentYear = date('Y');
	$currentMonth = date('n');
	$currentDay = date('j');
	$monthNum = "";
	$day = "";
	$year = "";
	$age = "";
	if (isset($_SESSION["monthNum"]) && isset($_SESSION["day"]) && isset($_SESSION["year"]) && isset($_SESSION["age"])) {
		$monthNum = $_SESSION["monthNum"];
		$day = $_SESSION["day"];
		$year = $_SESSION["year"];
		$age = $_SESSION["age"];
	}
	/** determine if the person has reached a full year based on
	    the current month and day and their birth month and day */
	if ((($currentMonth - $monthNum) > 0) && ($currentDay - $day > 0) || (($currentMonth - ($monthNum + 1)) <= 0)) {
		$age = $currentYear - $year - 1;
	}
	if ((($currentMonth - $monthNum) > 0) && ($currentDay - $day <= 0)) {
		$age = $currentYear - $year;
	}
	$_SESSION["age"] = $age;
	echo $age;
?>