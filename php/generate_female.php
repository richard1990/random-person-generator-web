<?php
	/** 
	 * This file generates a random female. It also includes HTML data to
	 * draw a table and buttons. Note that it pulls all data from various
	 * other PHP files.
	 */
	session_start();
	/** include all PHP files, note story.php is included further down, 
		note that these files must be in a certain order due to values 
		being passed between them, otherwise you will end up with empty
		fields (e.g. age.php requires data from birthdate.php) */
	include "birthdate.php";
	include "age.php";
	include "birthplace.php";
	include "bloodtype.php";
	include "car.php";
	include "children.php";
	include "eyecolour.php";
	include "favcolour.php";
	include "favfood.php";
	include "full_name_female.php";
	include "haircolour.php";
	include "height.php";
	include "maiden.php";
	include "martial.php";
	include "mothersmaiden.php";
	include "occupation.php";
	include "residence.php";
	include "phone.php";
	include "weight.php";
	include "email.php";

	echo "
		<table class=\"cooltable\">
			<tr>
				<td>
					Full name
				</td>
				<td id=\"fullname\">" . $femaleFullName . "		
				</td>
			</tr>
			<tr>
				<td>
					E-mail
				</td>
				<td id=\"email\">" . $email . "
				</td>
			</tr>
			<tr>
				<td>
					Born
				</td>
				<td id=\"birthdate\">" . $birthday . "
				</td>
			</tr>
			<tr>
				<td>
					Age
				</td>
				<td id=\"age\">" . $age . "
				</td>
			</tr>
			<tr>
				<td>
					Occupation
				</td>
				<td id=\"occupation\">" . $occupation . "
				</td>
			</tr>
			<tr>
				<td>
					Birthplace
				</td>
				<td id=\"birthplace\">" . $birthplace . "
				</td>
			</tr>
			<tr>
				<td>
					Residence
				</td>
				<td id=\"residence\">" . $residence . "
				</td>
			</tr>
			<tr>
				<td>
					Phone
				</td>
				<td id=\"phone\">" . $phone . "
				</td>
			</tr>
			<tr>
				<td>
					Height
				</td>
				<td id=\"height\">" . $height . "
				</td>
			</tr>
			<tr>
				<td>
					Weight
				</td>
				<td id=\"weight\">" . $totalWeight . "
				</td>
			</tr>
			<tr>
				<td>
					Martial status
				</td>
				<td id=\"martial\">" . $martialStatus . "
				</td>
			</tr>
			<tr>
				<td>
					Blood type
				</td>
				<td id=\"bloodtype\">" . $bloodType . "
				</td>
			</tr>
			<tr>
				<td>
					Eye colour
				</td>
				<td id=\"eyecolour\">" . $eyeColour . "
				</td>
			</tr>
			<tr>
				<td>
					Hair colour
				</td>
				<td id=\"haircolour\">" . $hairColour . "
				</td>
			</tr>
			<tr>
				<td>
					Car
				</td>
				<td id=\"car\">" . $car . "
				</td>
			</tr>
			<tr>
				<td>
					Maiden name
				</td>
				<td id=\"maiden\">" . $maidenName . "
				</td>
			</tr>
			<tr>
				<td>
					No. of children
				</td>
				<td id=\"children\">" . $children . "
				</td>
			</tr>
			<tr>
				<td>
					Favourite food
				</td>
				<td id=\"favfood\">" . $favFood . "
				</td>
			</tr>
			<tr>
				<td>
					Favourite colour
				</td>
				<td id=\"favcolour\">" . $favColour . "
				</td>
			</tr>
			<tr>
				<td>
					Mother's maiden name
				</td>
				<td id=\"mothersmaiden\">" . $mothersMaidenName . "
				</td>
			</tr>
			<tr>
				<td id=\"story\" colspan=\"2\">
	";
	/** include story.php here to put it in the right spot in the table */	
	include "story.php";
	/** resume making table */
	echo "
				</td>
			</tr>
			<tr>
				<td id=\"buttoncell\" colspan=\"2\">
					<button id=\"generate\" onclick=\"generateMale()\">GENERATE MALE</button><br />
					<button id=\"generate\" onclick=\"generateFemale()\">GENERATE FEMALE</button>
				</td>
			</tr>
		</table>
	";
	session_destroy();
?>