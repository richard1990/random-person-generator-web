<?php
	/**
	 * This file randomly generates a person's height.
	 */
<<<<<<< HEAD
	 
	$age = "";
	$isMale = "";
	if (isset($_SESSION["isMale"]) && isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
		$isMale = $_SESSION["isMale"];
	}
	
	// female height
	if (!$isMale) {
		// under 18 height
		if ($age < 18) {
			// can only be 4 or 5 feet tall
=======
	$age = "";
	$isMale = True;
	if (isset($_SESSION["male"]) && isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
		/** check if male boolean is true which means person is male */
		if (!$_SESSION["male"]) {
			$isMale = False;
		}
	}
	
	/** female height */
	if (!$isMale) {
		/** under 18 height */
		if ($age < 18) {
			/** can only be 4 or 5 feet tall */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
			$feet = rand(4, 5);
			$inches = rand(0, 11);
			if ($feet == 4) {
				$inches = rand(8, 11);
			}
		}
<<<<<<< HEAD
		// 18 to 64 height
		if ($age >= 18 and $age < 65) {
			// can be 4, 5, or 6 feet tall
=======
		/** 18 to 64 height */
		if ($age >= 18 and $age < 65) {
			/** can be 4, 5, or 6 feet tall */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
			$feet = rand(4, 6);
			$inches = rand(0, 4);
			if ($feet == 4) {
				$inches = rand(7, 11);
			}
			if ($feet == 5) {
				$inches = rand(0, 11);
			}
		}
<<<<<<< HEAD
		// 65 and up height
		if ($age >= 65) {
			// can only be 4 or 5 feet tall
=======
		/** 65 and up height */
		if ($age >= 65) {
			/** can only be 4 or 5 feet tall */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
			$feet = rand(4, 5);
			$inches = rand(0, 5);
			if ($feet == 4) {
				$inches = rand(7, 11);
			}
<<<<<<< HEAD
			else {
				$inches = rand(0, 5);
			}
		}
	}
	
	// male height
	else {
		// under 18 height 
		if ($age < 18) {
			// can only be 4 or 5 feet tall 
=======
		}
	}
	/** male height */
	else {
		/** under 18 height */
		if ($age < 18) {
			/** can only be 4 or 5 feet tall */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
			$feet = rand(4, 5);
			$inches = rand(0, 11);
			if ($feet == 4) {
				$inches = rand(10, 11);
			}
		}
<<<<<<< HEAD
		// 18 to 64 height
		if ($age >= 18 and $age < 65) {
			// can be 5 or 6 feet tall
			$feet = rand(5, 6);
			$inches = rand(0, 11);
		}
		// 65 and up height
		if ($age >= 65) {
			// can only be 4 or 5 feet tall
			$feet = rand(5, 6);
			if ($feet == 5) {
				$inches = rand(0, 11);
			}
			else {
=======
		/** 18 to 64 height */
		if ($age >= 18 and $age < 65) {
			/** can be 5 or 6 feet tall */
			$feet = rand(5, 6);
			$inches = rand(0, 11);
		}
		/** 65 and up height */
		if ($age >= 65) {
			/** can only be 4 or 5 feet tall */
			$feet = rand(5, 6);
			$inches = rand(0, 11);
			if ($feet == 6) {
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
				$inches = rand(0, 5);
			}
		}
	}

<<<<<<< HEAD
	// generate height in feet and cm
=======
	/** generate height in feet and cm */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	$totalFeet = ($feet * 12) + $inches;
	$totalcm = $totalFeet * 2.54;
	$height = $feet . "'" . $inches . "''". " (" . $totalcm . " cm)";
	$_SESSION["height"] = $height;
?>