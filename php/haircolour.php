<?php
	/**
	 * This file generates a random hair colour.
	 */
	 
	$hairColourArr = array("Black","Brown","Blond","Red","Grey","White");
	$hairColour = "";
	$age = "";
	$isMale = "";
	
	if (isset($_SESSION["age"]) && isset($_SESSION["isMale"])) {
		$age = $_SESSION["age"];
		$isMale = $_SESSION["isMale"];
	}
	
	// if person is female, then hair colour is "blonde" rather than "blond"
	if (!$isMale) {
		for ($i = 0; $i < count($hairColourArr); $i++) {
			if ($hairColourArr[$i] == "Blond") {
				$hairColourArr[$i] = "Blonde";
			}
		}
	}
	
	// do not give people under 35 grey or white hair
	if ($age < 35) {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 3)];
	}
	else {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 1)];
	}
	$_SESSION["hairColour"] = $hairColour;
?>