<?php
	/**
	 * This file randomly generates a person's martial status.
	 */
	session_start();
	$martialArr = array("Married", "Divorced", "Single", "Widowed");
	$neverMarried = False;
	$martialStatus = "";
	$age = "";
	if (isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
	}
	/** people under 19 years of age are always single */
	if ($age < 19) {
		$martialStatus = "Single";
	}
	/** people over 19 and under 29 can never be widowed */
	else if ($age < 29 && $age >= 19 ) {
		$martialStatus = $martialArr[rand(0, count($martialArr) - 2)];
	}
	/** everyone else can have any status */
	else {
		$martialStatus = $martialArr[rand(0, count($martialArr) - 1)];
	}
	
	/** determine if the person is single to help determine if they 
		will have a maiden name (women only) */
	if ($martialStatus == "Single") {
		$neverMarried = True;
	}
	$_SESSION["neverMarried"] = $neverMarried;
	echo $martialStatus;
?>