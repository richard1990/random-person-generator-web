<?php
	/**
	 * This file randomly generates a person's weight.
	 */
	$age = "";
<<<<<<< HEAD
	$isMale = "";
	if (isset($_SESSION["isMale"]) && isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
		$isMale = $_SESSION["isMale"];
	}
	
	// female weight
	if (!$isMale) {
		// under 18 weight
		if ($age < 18) {
			$weight = rand(100, 140);
		}
		// 18 to 64 weight
		if ($age >= 18 and $age < 65) {
			$weight = rand(150, 210);
		}
		// 65 and up weight
=======
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
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
		if ($age >= 65) {
			$weight = rand(110, 190);
		}
	}
<<<<<<< HEAD
	// male weight
	else {
		// under 18 weight
		if ($age < 18) {
			$weight = rand(110, 170);
		}
		// 18 to 64 weight	
		if ($age >= 18 and $age < 65) {
			$weight = rand(170, 250);
		}
		// 65 and up weight
=======
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
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
		if ($age >= 65) {
			$weight = rand(140, 250);
		}
	}

	$totalWeight = $weight . " lbs (" . round($weight/2.2046, 2) . " kg)";
	$_SESSION["weight"] = $totalWeight;
?>