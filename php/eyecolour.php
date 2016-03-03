<?php
	/**
	 * This file generates a random eye colour.
	 */
	session_start();
	$eyeColourArr = array("Blue", "Green", "Brown", "Hazel", "Amber");
	$eyeColour = $eyeColourArr[rand(0, count($eyeColourArr) - 1)];
	$_SESSION["eyeColour"] = $eyeColour;
	echo $eyeColour;
?>