<?php
	/**
	 * This file generates a random hair colour.
	 */
<<<<<<< HEAD
	 
	$hairColourArr = array("Black","Brown","Blond","Red","Grey","White");
	$hairColour = "";
	$age = "";
	$isMale = "";
	
	if (isset($_SESSION["age"]) && isset($_SESSION["isMale"])) {
		$age = $_SESSION["age"];
		$isMale = $_SESSION["isMale"];
	}
	
	// if person is female, then hair colour is "blonde" rather than "blond"
=======
	$hairColourArr = array("Black","Brown","Blond","Red","Grey","White");
	$hairColour = "";
	$age = "";
	$isMale = True;
	if (isset($_SESSION["age"]) && isset($_SESSION["male"])) {
		$age = $_SESSION["age"];
		/** check if male boolean is true to see if person is a male */
		if (!$_SESSION["male"]) {
			$isMale = False;
		}
	}
	/** if person is female, then hair colour is "blonde" rather than "blond" */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	if (!$isMale) {
		for ($i = 0; $i < count($hairColourArr); $i++) {
			if ($hairColourArr[$i] == "Blond") {
				$hairColourArr[$i] = "Blonde";
			}
		}
	}
<<<<<<< HEAD
	
	// do not give people under 35 grey or white hair
=======
	/** do not give people under 35 grey or white hair */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	if ($age < 35) {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 3)];
	}
	else {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 1)];
	}
	$_SESSION["hairColour"] = $hairColour;
?>