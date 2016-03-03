<?php
	/**
	 * This file retrieves a random mother's maiden name.
	 */
	$mothersMaidenName = "";
	if (isset($_SESSION["mothersMaidenName"])) {
		$mothersMaidenName = $_SESSION["mothersMaidenName"];
	}
?>