<?php
	/**
<<<<<<< HEAD
	 * This file determines a person's age based on their birthday.
	 */
	 
	// get current year, month, and day and setup necessary variables
	$currentYear = date('Y');
	$currentMonth = date('n');
	$currentDay = date('j');
	$birthMonth = "";
	$birthDay = "";
	$birthYear = "";
	$age = "";
	
	// get necessary session variables
	if (isset($_SESSION["monthNum"]) && isset($_SESSION["day"]) && isset($_SESSION["year"])) {
		$birthMonth = $_SESSION["monthNum"];
		$birthDay = $_SESSION["day"];
		$birthYear = $_SESSION["year"];
	}
	// e.g. person born in January and current month is March
	if ($birthMonth - $currentMonth < 0) {
		$age = $currentYear - $birthYear;
	}
	// e.g. person born March 25, 1990 and current date is March 26, 1990
	else if ($birthMonth - $currentMonth == 0 && $birthDay - $currentDay <= 0 ) {
		$age = $currentYear - $birthYear;
	}
	// e.g. person born March 25, 1990 and current date is March 24, 1990,
	// therefore person is still awaiting birthday this year so subtract 
	// 1 from age
	else if ($birthMonth - $currentMonth == 0 && $birthDay - $currentDay > 0 ) {
		$age = $currentYear - $birthYear - 1;
	}
	// e.g. person born in April and current month is March (4-3), therefore
	// person is still awaiting birthday this year so subtract 1 from age
	else if ($birthMonth - $currentMonth > 0) {
		$age = $currentYear - $birthYear - 1;
=======
	 * This file determines a person's age based on their birthdate.
	 */
	/** get current year, month, and day as numbers */
	$currentYear = date('Y');
	$currentMonth = date('n');
	$currentDay = date('j');
	$monthNum = "";
	$day = "";
	$year = "";
	$age = "";
	if (isset($_SESSION["monthNum"]) && isset($_SESSION["day"]) && isset($_SESSION["year"])) {
		$monthNum = $_SESSION["monthNum"];
		$day = $_SESSION["day"];
		$year = $_SESSION["year"];
	}
	/** determine if the person has reached a full year based on
	    the current month and day and their birth month and day */
	if ((($currentMonth - $monthNum) > 0) && ($currentDay - $day > 0) || (($currentMonth - $monthNum) <= 0)) {
		$age = $currentYear - $year - 1;
	}
	else if ((($currentMonth - $monthNum) > 0) && ($currentDay - $day <= 0)) {
		$age = $currentYear - $year;
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	}
	$_SESSION["age"] = $age;
?>