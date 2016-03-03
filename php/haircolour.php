<?php
	/**
	 * This file generates a random hair colour.
	 */
	session_start();
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
	if (!$isMale) {
		for ($i = 0; $i < count($hairColourArr); $i++) {
			if ($hairColourArr[$i] == "Blond") {
				$hairColourArr[$i] = "Blonde";
			}
		}
	}
	/** do not give people under 35 grey or white hair */
	if ($age < 35) {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 3)];
	}
	else {
		$hairColour = $hairColourArr[rand(0, count($hairColourArr) - 1)];
	}
	$_SESSION["hairColour"] = $hairColour;
	echo $hairColour;
?>