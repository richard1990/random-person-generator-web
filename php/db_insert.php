<?php
	/**
	 * This file simply inserts a row into a table based on information submitted 
	 * by the user in the index.php file.
	 */

	// get database connection
	include "db_connect.php";
	
	/* retrieve values from what user entered in form to
		update table with */
	if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"]) && isset($_SESSION["birthday"]) && isset($_SESSION["email"]) &&
		isset($_SESSION["birthplace"]) && isset($_SESSION["residence"]) && isset($_SESSION["phone"]) && isset($_SESSION["height"]) &&
		isset($_SESSION["weight"]) && isset($_SESSION["martialStatus"]) && isset($_SESSION["bloodType"]) && isset($_SESSION["eyeColour"]) &&
		isset($_SESSION["hairColour"]) && isset($_SESSION["car"]) && isset($_SESSION["maidenName"]) && isset($_SESSION["children"]) && 
		isset($_SESSION["favFood"]) && isset($_SESSION["favColour"]) && isset($_SESSION["mothersMaidenName"])) {
		$sqlQuery = mysqli_prepare($conn, "INSERT INTO randomperson(firstname,lastname,birthday,email,age,occupation,birthplace,residence,phone,height,weight,martialstatus,bloodtype,eyecolour,haircolour,car,maidenname,children,favfood,favcolour,mothersmaiden) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($sqlQuery, 'sssssssssssssssssssss', $_SESSION["firstName"], $_SESSION["lastName"], $_SESSION["birthday"],
			$_SESSION["email"], $_SESSION["age"], $_SESSION["occupation"], $_SESSION["birthplace"], $_SESSION["residence"], $_SESSION["phone"], $_SESSION["height"],
			$_SESSION["weight"], $_SESSION["martialStatus"], $_SESSION["bloodType"], $_SESSION["eyeColour"], $_SESSION["hairColour"], $_SESSION["car"], 
			$_SESSION["maidenName"], $_SESSION["children"], $_SESSION["favFood"], $_SESSION["favColour"], $_SESSION["mothersMaidenName"]);
		$result = mysqli_stmt_execute($sqlQuery);
		if (!$result) {
			die("Invalid query!");
		}
	}
	
	/* close connection */
	mysqli_close($conn);
?>