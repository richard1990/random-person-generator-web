<?php
	/**
	 * This file generates a random birthday.
	 */
	 
	// get values for min/max birth years by getting current year and subtracting 
	$maxYear = date('Y')- 14;
	$minYear = date('Y') - 90;
	
	// generate random birth year between min/max years
	$year = rand($minYear, $maxYear);
	
	// generate random birth month
	$monthsArr = array("January","February","March","April","May","June","July","August","September","October","November","December");
	$monthNum = rand(1,12);
	$month = $monthsArr[$monthNum - 1];

	// generate random birth day based on birth month
	if ($month == "January" or $month == "March" or $month == "May" or $month == "July" or $month == "August" or $month == "October" or $month == "December") {
		$day = rand(1, 31);
	}
	if ($month == "April" or $month == "June" or $month == "September" or $month == "November") {
		$day = rand(1, 30);
	}
	
	// rough guess of which February has 28 or 29 days
	if ($month == "February" and $year%4 == 0) {
		$day = rand(1, 29);
	}
	if ($month == "February" and $year%4 != 0) {
		$day = rand(1, 28);
	}
	
	// store session variables
	$_SESSION["year"] = $year;
	$_SESSION["month"] = $month;
	$_SESSION["day"] = $day;
	$_SESSION["monthNum"] = $monthNum;
	$birthday = $month . " " . $day . ", " . $year;
	$_SESSION["birthday"] = $birthday;
?>