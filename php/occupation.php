<?php
	/**
	 * This file randomly generates a person's occupation.
	 */
<<<<<<< HEAD
	 
=======
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	$occupationArr = file('txt_files/occupations.txt');
	$studentArr = array("College Student", "University Student", "Unemployed", "NEET");
	$occupation = "";
	$age = "";
<<<<<<< HEAD
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
=======
	if (isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
	}
	$occupation = trim($occupationArr[rand(0, count($occupationArr) - 1)]);
	/** people under 18 do not have a job */
	if ($age < 18) {
		$occupation = "N/A";
	}
	/** people between 18 and 23 will be students, unemployed, or NEETs */
	if ($age >= 18 and $age < 23) {
		$occupation = $studentArr[rand(0, count($studentArr) - 1)];
	}
	/** people over 65 are retired, but specify their former job */
	if ($age > 65) {
		$occupation = "Retired, former " . trim($occupationArr[rand(0, count($occupationArr) - 1)]);
	}
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	$_SESSION["occupation"] = $occupation;
?>