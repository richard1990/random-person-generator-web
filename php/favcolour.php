<?php
	/**
	 * This file generates a person's random favourite colour.
	 */
	session_start();
	$favColourArr = array("Blue", "Black", "Green", "Pink", "Red", "Orange", "Yellow", "Cyan", "White", "Grey");
	$favColour = $favColourArr[rand(0, count($favColourArr) - 1)];
	$_SESSION["favColour"] = $favColour;
	echo $favColour;
?>