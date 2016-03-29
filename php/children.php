<?php
	/**
	 * This file generates a random number of children born to a person.
	 */
	$age = "";
	if (isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
	}
<<<<<<< HEAD
	// everyone can have kids except people under 20 years of age, 
	// and people aged 20 to 25 will only have up to 2 kids
=======
	/** everyone can have kids except people under 20 years of age, 
		and people aged 20 to 25 will only have up to 2 kids */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	if ($age < 20) {
		$children = "0";
	}
	else if ($age >= 20 and $age < 25) {
		$children = rand(0, 2);
	}
	else {
		$children = rand(0, 4);
	}
	$_SESSION["children"] = $children;
?>