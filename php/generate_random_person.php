<?php
	/** 
	 * This file generates a random male. It also includes HTML data to
	 * draw a table and buttons. Note that it pulls all data from various
	 * other PHP files.
	 */
	 
	 // when a row is deleted, the value "post_null" is sent, which
	 // allows the MySQL table to be refreshed without refreshing the whole
	 // page or creating another random person by displaying an empty
	 // randomly generated person. this only occurs when a row is deleted.
	 if (isset($_POST["post_null"])) {
		 if ($_POST["post_null"] == "true") {
			 include "empty_table.php";
			 include "db_display.php";
			 exit(0);
		 }
	 }
	 
	session_start();
	// include all PHP files, note story.php is included further down, 
	// note that these files must be in a certain order due to values 
	// being passed between them, otherwise you will end up with empty
	// fields (e.g. age.php requires data from birthday.php)
	include "full_name.php";
	include "birthday.php";
	include "age.php";
	include "birthplace.php";
	include "bloodtype.php";
	include "car.php";
	include "children.php";
	include "eyecolour.php";
	include "favcolour.php";
	include "favfood.php";
	include "haircolour.php";
	include "height.php";
	include "martial_status.php";
	include "maiden_name.php";
	include "mothers_maiden_name.php";
	include "occupation.php";
	include "residence.php";
	include "phone.php";
	include "weight.php";
	include "email.php";
	include "db_insert.php";

	echo "
		<table class=\"cooltable\">
			<tr>
				<td class=\"leftcell\">
					Full name
				</td>
				<td class=\"rightcell\" id=\"fullname\">" . $fullName . "		
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					E-mail
				</td>
				<td class=\"rightcell\" id=\"email\">" . $email . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Born
				</td>
				<td class=\"rightcell\" id=\"birthdate\">" . $birthday . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Age
				</td>
				<td class=\"rightcell\" id=\"age\">" . $age . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Occupation
				</td>
				<td class=\"rightcell\" id=\"occupation\">" . $occupation . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Birthplace
				</td>
				<td class=\"rightcell\" id=\"birthplace\">" . $birthplace . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Residence
				</td>
				<td class=\"rightcell\" id=\"residence\">" . $residence . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Phone
				</td>
				<td class=\"rightcell\" id=\"phone\">" . $phone . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Height
				</td>
				<td class=\"rightcell\" id=\"height\">" . $height . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Weight
				</td>
				<td class=\"rightcell\" id=\"weight\">" . $totalWeight . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Martial status
				</td>
				<td class=\"rightcell\" id=\"martial\">" . $martialStatus . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Blood type
				</td>
				<td class=\"rightcell\" id=\"bloodtype\">" . $bloodType . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Eye colour
				</td>
				<td class=\"rightcell\" id=\"eyecolour\">" . $eyeColour . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Hair colour
				</td>
				<td class=\"rightcell\" id=\"haircolour\">" . $hairColour . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Car
				</td>
				<td class=\"rightcell\" id=\"car\">" . $car . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Maiden name
				</td>
				<td class=\"rightcell\" id=\"maiden\">" . $maidenName . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					No. of children
				</td>
				<td class=\"rightcell\" id=\"children\">" . $children . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Favourite food
				</td>
				<td class=\"rightcell\" id=\"favfood\">" . $favFood . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Favourite colour
				</td>
				<td class=\"rightcell\" id=\"favcolour\">" . $favColour . "
				</td>
			</tr>
			<tr>
				<td class=\"leftcell\">
					Mother's maiden name
				</td>
				<td class=\"rightcell\" id=\"mothersmaiden\">" . $mothersMaidenName . "
				</td>
			</tr>
			<tr>
				<td id=\"story\" colspan=\"2\">
	";
	// include story.php here at bottom of table data
	include "story.php";
	// resume making table, add buttons at bottom
	echo "
				</td>
			</tr>
		</table>
	";
	include "db_display.php";
	session_destroy();
?>