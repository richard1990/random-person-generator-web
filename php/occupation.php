<?php
	/**
	 * This file randomly generates a person's occupation.
	 */
	 
	$occupationArr = file('txt_files/occupations.txt');
	$studentArr = array("College Student", "University Student", "Unemployed", "NEET");
	$occupation = "";
	$age = "";
	// generate random occupation
	$occupation = trim($occupationArr[rand(0, count($occupationArr) - 1)]);

	if (isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
	}
	
	// people under 18 do not have a job
	if ($age < 18) {
		$occupation = "N/A";
	}
	// people between 18 and 23 will be students, unemployed, or NEETs
	if ($age >= 18 and $age < 23) {
		$occupation = $studentArr[rand(0, count($studentArr) - 1)];
	}
	// people over 65 are retired, but specify their former job
	if ($age > 65) {
		$occupation = "Retired, former " . trim($occupationArr[rand(0, count($occupationArr) - 1)]);
	}
	// everyone else just gets whatever random occupation was generated
	$_SESSION["occupation"] = $occupation;
?>