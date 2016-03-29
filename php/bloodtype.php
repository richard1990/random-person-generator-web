<?php
	/**
	 * This file randomly generates a person's blood type.
	 */
	$bloodTypeArr = array("A","B","AB","O");
<<<<<<< HEAD
=======
	/** generate blood type */
>>>>>>> 49d3e11697d2bb815fc2107bc1d49d07e0bef59b
	$bloodType = $bloodTypeArr[rand(0, count($bloodTypeArr) - 1)];
	$_SESSION["bloodType"] = $bloodType;
?>