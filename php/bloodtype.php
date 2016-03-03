<?php
	/**
	 * This file randomly generates a person's blood type.
	 */
	$bloodTypeArr = array("A","B","AB","O");
	/** generate blood type */
	$bloodType = $bloodTypeArr[rand(0, count($bloodTypeArr) - 1)];
	$_SESSION["bloodType"] = $bloodType;
?>