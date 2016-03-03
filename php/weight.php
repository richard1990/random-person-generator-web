<?php
	/**
	 * This file randomly generates a person's weight.
	 */
	session_start();
	$age = "";
	$isMale = True;
	if (isset($_SESSION["male"]) && isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
		/** check if male boolean is true to see if person is a male */
		if (!$_SESSION["male"]) {
			$isMale = False;
		}
	}
	
	/** female weight */
	if (!$isMale) {
		/** under 18 weight */
		if ($age < 18) {
			$weight = rand(100, 140);
		}
		/** 18 to 64 weight */
		if ($age >= 18 and $age < 65) {
			$weight = rand(150, 210);
		}
		/** 65 and up weight */
		if ($age >= 65) {
			$weight = rand(110, 190);
		}
	}
	/** male weight */
	else {
		/** under 18 weight */
		if ($age < 18) {
			$weight = rand(110, 170);
		}
		/** 18 to 64 weight */
		if ($age >= 18 and $age < 65) {
			$weight = rand(170, 250);
		}
		/** 65 and up weight */
		if ($age >= 65) {
			$weight = rand(140, 250);
		}
	}

	$totalWeight = $weight . " lbs (" . round($weight/2.2046, 2) . " kg)";
	$_SESSION["weight"] = $totalWeight;
	echo $totalWeight;
?>