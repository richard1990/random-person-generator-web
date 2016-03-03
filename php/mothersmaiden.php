<?php
	/**
	 * This file retrieves a random mother's maiden name.
	 */
	session_start();
	$mothersMaidenName = "";
	if (isset($_SESSION["mothersMaidenName"])) {
		$mothersMaidenName = $_SESSION["mothersMaidenName"];
	}
	echo $mothersMaidenName;
?>