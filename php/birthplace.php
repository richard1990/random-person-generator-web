<?php
	/**
	 * This file randomly generates a person's birthplace. Currently
	 * only supports Canadian and American locations.
	 */
	session_start();
	$countriesArr = array("Canada", "USA");
	$country = $countriesArr[rand(0, 1)];
	$city = "";
	
	/** Canadian person */
	if ($country == "Canada") {
		/** province arrays */
		$provincesArr = array("Yukon", "Northwest Territories", "Nunavut", "British Columbia", "Alberta", "Saskatchewan", "Manitoba", "Ontario", "Quebec", "New Brunswick", "PEI", "Nova Scotia", "Newfoundland and Labrador");
		$yukonArr = array("Whitehorse", "Dawson");
		$nwtArr = array("Yellowknife", "Hay River");
		$nunavutArr = array("Iqaluit", "Arviat", "Rankin Inlet");
		$bcArr = array("Vancouver", "Surrey", "Burnaby", "Richmond", "Abbotsford", "Coquitlam", "Kelowna", "Saanich", "Langley", "Delta", "Kamloops", "North Vancouver", "Nanaimo", "Victoria", "Chilliwack", "Maple Ridge", "Prince George", "New Westminster", "Port Coquitlam");
		$albertaArr = array("Calgary", "Edmonton", "Red Deer", "Lethbridge", "St. Albert", "Medicine Hat", "Grande Prairie");
		$saskArr = array("Saskatoon", "Regina", "Prince Albert", "Moose Jaw", "Yorkton");
		$manitobaArr = array("Winnipeg", "Brandon", "Steinbach", "Portage la Prairie", "Thompson", "Winkler", "Selkirk", "Dauphin", "Morden");
		$ontarioArr = array("Toronto", "Ottawa", "Mississauga", "Brampton", "Hamilton", "London", "Markham", "Vaughan", "Kitchener", "Windsor", "Richmond Hill", "Oakville", "Burlington", "Greater Sudbury", "Oshawa", "Barrie", "St. Catharines", "Cambridge", "Kingston", "Whitby", "Guelph", "Ajax", "Thunder Bay", "Chatham-Kent", "Waterloo", "Brantford", "Pickering", "Clarington", "Milton", "Niagra Falls", "Newmarket", "Sault Ste. Marie", "Sarnia", "Caledon", "Halton Hills", "North Bay", "Aurora", "Welland", "Belleville");
		$quebecArr = array("Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil", "Sherbrooke", "Saguenay", "Lévis", "Trois-Rivières", "Terrebonne", "Repentigny", "Brossard", "Drummondville", "Saint-Jérôme", "Granby", "Blainville", "Shawinigan", "Dollard-des-Ormeaux");
		$nbArr = array("Saint John", "Moncton", "Fredericton", "Dieppe", "Miramichi", "Edmundston", "Bathurst");
		$peiArr = array("Charlottetown", "Summerside", "Stratford", "Cornwall");
		$nsArr = array("Halifax", "Cape Breton");
		$newfArr = array("St. John's", "Mount Pearl", "Corner Brook");
		$province = $provincesArr[rand(0, count($provincesArr) - 1)];
		
		/** determine city based on province */
		switch($province) {
			case "Yukon":
				$city = $yukonArr[rand(0, count($yukonArr) - 1)];
				break;
			case "Northwest Territories":
				$city = $nwtArr[rand(0, count($nwtArr) - 1)];
				break;
			case "Nunavut":
				$city = $nunavutArr[rand(0, count($nunavutArr) - 1)];
				break;
			case "British Columbia":
				$city = $bcArr[rand(0, count($bcArr) - 1)];
				break;
			case "Alberta":
				$city = $albertaArr[rand(0, count($albertaArr) - 1)];
				break;
			case "Saskatchewan":
				$city = $saskArr[rand(0, count($saskArr) - 1)];
				break;
			case "Manitoba":
				$city = $manitobaArr[rand(0, count($manitobaArr) - 1)];
				break;
			case "Ontario":
				$city = $ontarioArr[rand(0, count($ontarioArr) - 1)];
				break;
			case "Quebec":
				$city = $quebecArr[rand(0, count($quebecArr) - 1)];
				break;
			case "New Brunswick":
				$city = $nbArr[rand(0, count($nbArr) - 1)];
				break;
			case "PEI":
				$city = $peiArr[rand(0, count($peiArr) - 1)];
				break;
			case "Nova Scotia":
				$city = $nsArr[rand(0, count($nsArr) - 1)];
				break;
			case "Newfoundland and Labrador":
				$city = $newfArr[rand(0, count($newfArr) - 1)];
				break;
		}
		$birthplace = $city . ", " . $province . ", " . $country;
		$_SESSION["birthplace"] = $birthplace;
		echo $birthplace;
	}
	/** American person */
	else {
		/** province arrays */
		$statesArr = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", 
						"Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana",
						"Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts",
						"Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada",
						"New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
						"Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota",
						"Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia",
						"Wisconsin", "Wyoming");
		$alabamaArr = array("Birmingham", "Montgomery", "Mobile");
		$hawaiiArr = array("Honolulu");
		$massachusettsArr = array("Boston", "Worcester", "Springfield");
		$nmArr = array("Albuquerque", "Las Cruces", "Rio Rancho");
		$sdArr = array("Sioux Falls", "Rapid City", "Aberdeen");
		$alaskaArr = array("Anchorage", "Fairbanks", "Juneau");
		$idahoArr = array("Boise", "Nampa", "Meridian");
		$michiganArr = array("Detroit", "Grand Rapids", "Warren");
		$nyArr = array("New York", "Buffalo", "Rochester");
		$tennesseeArr = array("Memhpis", "Nashville", "Knoxville");
		$arizonaArr = array("Phoenix", "Tucson", "Mesa");
		$illinoisArr = array("Chicago", "Aurora", "Rockford");
		$minnesotaArr = array("Minneapolis", "Saint Paul", "Bloomington");
		$ncArr = array("Charlotte", "Raleigh", "Greensboro");
		$texasArr = array("Houston", "San Antonio", "Dallas");
		$arkansasArr = array("Little Rock", "Fort Smith", "Fayetteville");
		$indianaArr = array("Indianapolis", "Fort Wayne", "Evansville");
		$mississippiArr = array("Jackson", "Gulfport", "Southaven");
		$ndArr = array("Fargo", "Bismarck", "Grand Forks");
		$utahArr = array("Salt Lake City", "West Valley City", "Provo");
		$californiaArr = array("Los Angeles", "San Diego", "San Jose");
		$iowaArr = array("Des Moines", "Cedar Rapids", "Davenport");
		$missouriArr = array("Kansas City", "St. Louis", "Independence");
		$ohioArr = array("Columbus", "Cleveland", "Cincinnati");
		$vermontArr = array("Burlington", "Rutland", "Barre");
		$coloradoArr = array("Denver", "Colorado Springs", "Fort Collins");
		$kansasArr = array("Wichita", "Overland Park", "Olathe");
		$montanaArr = array("Billings", "Missoula", "Great Falls");
		$oklahomaArr = array("Oklahoma City", "Tulsa", "Norman");
		$virginiaArr = array("Virginia Beach", "Norfolk", "Chesapeake");
		$connecticutArr = array("Bridgeport", "New Haven", "Hartford");
		$kentuckyArr = array("Louisville", "Lexington", "Bowling Green");
		$nebraskaArr = array("Omaha", "Lincoln", "Bellevue");
		$oregonArr = array("Portland", "Salem", "Eugene");
		$washingtonArr = array("Seattle", "Spokane", "Tacoma");
		$delawareArr = array("Wilmington", "Dover", "Middleton");
		$louisianaArr = array("New Orleans", "Baton Rouge", "Shreveport");
		$nevadaArr = array("Las Vegas", "Henderson", "Reno");
		$pennsylvaniaArr = array("Philadelphia", "Pittsburgh", "Allentown");
		$wvArr = array("Charleston", "Huntington", "Parkersburg");
		$floridaArr = array("Jacksonville", "Miami", "Tampa");
		$maineArr = array("Lewiston", "Bangor", "South Portland");
		$nhArr = array("Manchester", "Nashua", "Concord");
		$riArr = array("Providence", "Warwick", "Cranston");
		$wisconsinArr = array("Milwaukee", "Madison", "Green Bay");
		$georgiaArr = array("Atlanta", "Augusta", "Macon");
		$marylandArr = array("Baltimore", "Frederick", "Rockville");
		$njArr = array("Newark", "Jersey City", "Paterson");
		$scArr = array("Columbia", "Charleston", "Mount Pleasant");
		$wyomingArr = array("Cheyenne", "Casper", "Laramie");
		$usState = $statesArr[rand(0, count($statesArr) - 1)];
		
		/** determine city based on state */
		switch($usState) {
			case "Alabama":
				$city = $alabamaArr[rand(0, count($alabamaArr) - 1)];
				break;
			case "Hawaii":
				$city = $hawaiiArr[rand(0, count($hawaiiArr) - 1)];
				break;
			case "Massachusetts":
				$city = $massachusettsArr[rand(0, count($massachusettsArr) - 1)];
				break;
			case "New Mexico":
				$city = $nmArr[rand(0, count($nmArr) - 1)];
				break;
			case "South Dakota":
				$city = $sdArr[rand(0, count($sdArr) - 1)];
				break;
			case "Alaska":
				$city = $alaskaArr[rand(0, count($alaskaArr) - 1)];
				break;
			case "Idaho":
				$city = $idahoArr[rand(0, count($idahoArr) - 1)];
				break;
			case "Michigan":
				$city = $michiganArr[rand(0, count($michiganArr) - 1)];
				break;
			case "New York":
				$city = $nyArr[rand(0, count($nyArr) - 1)];
				break;
			case "Tennessee":
				$city = $tennesseeArr[rand(0, count($tennesseeArr) - 1)];
				break;
			case "Arizona":
				$city = $arizonaArr[rand(0, count($arizonaArr) - 1)];
				break;
			case "Illinois":
				$city = $illinoisArr[rand(0, count($illinoisArr) - 1)];
				break;
			case "Minnesota":
				$city = $minnesotaArr[rand(0, count($minnesotaArr) - 1)];
				break;
			case "North Carolina":
				$city = $ncArr[rand(0, count($ncArr) - 1)];
				break;
			case "Texas":
				$city = $texasArr[rand(0, count($texasArr) - 1)];
				break;
			case "Arkansas":
				$city = $arkansasArr[rand(0, count($arkansasArr) - 1)];
				break;
			case "Indiana":
				$city = $indianaArr[rand(0, count($indianaArr) - 1)];
				break;
			case "Mississippi":
				$city = $mississippiArr[rand(0, count($mississippiArr) - 1)];
				break;
			case "North Dakota":
				$city = $ndArr[rand(0, count($ndArr) - 1)];
				break;
			case "Utah":
				$city = $utahArr[rand(0, count($utahArr) - 1)];
				break;
			case "California":
				$city = $californiaArr[rand(0, count($californiaArr) - 1)];
				break;
			case "Iowa":
				$city = $iowaArr[rand(0, count($iowaArr) - 1)];
				break;
			case "Missouri":
				$city = $missouriArr[rand(0, count($missouriArr) - 1)];
				break;
			case "Ohio":
				$city = $ohioArr[rand(0, count($ohioArr) - 1)];
				break;
			case "Vermont":
				$city = $vermontArr[rand(0, count($vermontArr) - 1)];
				break;
			case "Colorado":
				$city = $coloradoArr[rand(0, count($coloradoArr) - 1)];
				break;
			case "Kansas":
				$city = $kansasArr[rand(0, count($kansasArr) - 1)];
				break;
			case "Montana":
				$city = $montanaArr[rand(0, count($montanaArr) - 1)];
				break;
			case "Oklahoma":
				$city = $oklahomaArr[rand(0, count($oklahomaArr) - 1)];
				break;
			case "Virginia":
				$city = $virginiaArr[rand(0, count($virginiaArr) - 1)];
				break;
			case "Connecticut":
				$city = $connecticutArr[rand(0, count($connecticutArr) - 1)];
				break;
			case "Kentucky":
				$city = $kentuckyArr[rand(0, count($kentuckyArr) - 1)];
				break;
			case "Nebraska":
				$city = $nebraskaArr[rand(0, count($nebraskaArr) - 1)];
				break;
			case "Oregon":
				$city = $oregonArr[rand(0, count($oregonArr) - 1)];
				break;
			case "Washington":
				$city = $washingtonArr[rand(0, count($washingtonArr) - 1)];
				break;
			case "Delaware":
				$city = $delawareArr[rand(0, count($delawareArr) - 1)];
				break;
			case "Louisiana":
				$city = $louisianaArr[rand(0, count($louisianaArr) - 1)];
				break;
			case "Nevada":
				$city = $nevadaArr[rand(0, count($nevadaArr) - 1)];
				break;
			case "Pennsylvania":
				$city = $pennsylvaniaArr[rand(0, count($pennsylvaniaArr) - 1)];
				break;
			case "West Virginia":
				$city = $wvArr[rand(0, count($wvArr) - 1)];
				break;
			case "Florida":
				$city = $floridaArr[rand(0, count($floridaArr) - 1)];
				break;
			case "Maine":
				$city = $maineArr[rand(0, count($maineArr) - 1)];
				break;
			case "New Hampshire":
				$city = $nhArr[rand(0, count($nhArr) - 1)];
				break;
			case "Rhode Island":
				$city = $riArr[rand(0, count($riArr) - 1)];
				break;
			case "Wisconsin":
				$city = $wisconsinArr[rand(0, count($wisconsinArr) - 1)];
				break;
			case "Georgia":
				$city = $georgiaArr[rand(0, count($georgiaArr) - 1)];
				break;
			case "Maryland":
				$city = $marylandArr[rand(0, count($marylandArr) - 1)];
				break;
			case "New Jersey":
				$city = $njArr[rand(0, count($njArr) - 1)];
				break;
			case "South Carolina":
				$city = $scArr[rand(0, count($scArr) - 1)];
				break;
			case "Wyoming":
				$city = $wyomingArr[rand(0, count($wyomingArr) - 1)];
				break;
		}
		$birthplace = $city . ", " . $usState . ", " . $country;
		$_SESSION["birthplace"] = $birthplace;
		echo $birthplace;
	}
?>