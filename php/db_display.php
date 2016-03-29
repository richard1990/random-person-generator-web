<?php
	/**
	 * This file simply inserts a row into a table based on the randomly 
	 * generated information.
	 */
	
	// get database connection
	include "db_connect.php";
	
	// get data from table
	$query = "SELECT * FROM randomperson";
	$result = mysqli_query($conn, $query);
	if( !$result ) {
		die("Invalid query!");
	}
	
	// display each row if data exists
	if (mysqli_num_rows($result) > 0) {
		// setup table headers
		echo "
		<table class=\"dbtable\">
			<tr>
				<th>
					Delete
				</th>
				<th>
					Full name
				</th>
				<th>
					E-mail
				</th>
				<th>
					Born
				</th>
				<th>
					Age
				</th>
				<th>
					Occupation
				</th>
				<th>
					Birthplace
				</th>
				<th>
					Residence
				</th>
				<th>
					Phone
				</th>
				<th>
					Height
				</th>
				<th>
					Weight
				</th>
				<th>
					Martial status
				</th>
				<th>
					Blood type
				</th>
				<th>
					Eye colour
				</th>
				<th>
					Hair colour
				</th>
				<th>
					Car
				</th>
				<th>
					Maiden name
				</th>
				<th>
					No. of children
				</th>
				<th>
					Fav food
				</th>
				<th>
					Fav colour
				</th>
				<th>
					Mother's maiden name
				</th>
			</tr>
		";
		while ($row = mysqli_fetch_assoc($result)) {
			// each row is displayed within a table
			echo "<tr>";
			echo "<td><img src=\"red_x.png\" height=\"25\" width=\"25\" onclick=deleteRow(\"" . $row["id"] . "\")></img></td>";
			echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["birthday"] . "</td>";
			echo "<td>" . $row["age"] . "</td>";
			echo "<td>" . $row["occupation"] . "</td>";
			echo "<td>" . $row["birthplace"] . "</td>";
			echo "<td>" . $row["residence"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["height"] . "</td>";
			echo "<td>" . $row["weight"] . "</td>";
			echo "<td>" . $row["martialstatus"] . "</td>";
			echo "<td>" . $row["bloodtype"] . "</td>";
			echo "<td>" . $row["eyecolour"] . "</td>";
			echo "<td>" . $row["haircolour"] . "</td>";
			echo "<td>" . $row["car"] . "</td>";
			echo "<td>" . $row["maidenname"] . "</td>";
			echo "<td>" . $row["children"] . "</td>";
			echo "<td>" . $row["favfood"] . "</td>";
			echo "<td>" . $row["favcolour"] . "</td>";
			echo "<td>" . $row["mothersmaiden"] . "</td>";
			echo "</tr>";
		}
		echo "
		</table>";
	}	
	// close connection
	mysqli_close($conn);
?>