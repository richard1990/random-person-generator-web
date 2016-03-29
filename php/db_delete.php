<?php
	/**
	 * This file deletes a row from the database based on which
	 * row was clicked.
	 */
	
	// get database connection
	include "db_connect.php";
	
	// retrieve row ID to delete respective row from db
	$query = mysqli_prepare($conn, "DELETE FROM randomperson WHERE id = ?");
	mysqli_stmt_bind_param($query, 's', $_POST["rowToBeDeleted"]);
	$result = mysqli_stmt_execute($query);
	if (!$result) {
		die("Invalid query!");
	}
	// close connection
	mysqli_close($conn);
?>