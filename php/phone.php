<?php
	/**
	 * This file randomly generates a person's phone number based
	 * on their residence. Currently only supports Canadian and American 
	 * locations.
	 */
	$phone = "";
	$country = "";
	$usState = "";
	$province = "";
	$city = "";
	$randomPhone = "";
	$areaCode = "";
	
	// get necessary session values 
	if (isset($_SESSION["country"]) && isset($_SESSION["city"]) && (isset($_SESSION["province"]) || isset($_SESSION["usState"]))) {
		if ($_SESSION["country"] == "Canada") {
			$province = $_SESSION["province"];
		}
		else {
			$usState = $_SESSION["usState"];
		}
		$country = $_SESSION["country"];
		$city = $_SESSION["city"];
	}
	
	// 7 random numbers for phone number
	$randomNumArr = array(rand(0,9), rand(0,9), rand(0,9), rand(0,9), rand(0,9), rand(0,9), rand(0,9));
	for($i = 0; $i < count($randomNumArr); $i++) {
		$randomPhone .= $randomNumArr[$i];
		// put a dash in the phone number after 3 numbers
		if ($i == "2") {
			$randomPhone .= "-";
		}
	}
	
	// Canadian area codes
	if ($country == "Canada") {
		// yukon, nwt, and nunavut
		if ($city == "Whitehorse" || $city == "Dawson" || $city == "Yellowknife" || $city == "Hay River"
				|| $city == "Iqaluit" || $city == "Arviat" || $city == "Rankin Inlet") {
			$areaCode = "867";
		}
		// bc
		if ($city == "Vancouver" || $city == "Surrey" || $city == "Burnaby" || $city == "Richmond"
				|| $city == "Abbotsford" || $city == "Coquitlam" || $city == "Langley" || $city == "Delta"
				|| $city == "North Vancouver" || $city == "Chilliwack" || $city == "Maple Ridge"
				|| $city == "New Westminster" || $city == "Port Coquitlam") {
			$areaCode = "604";
		}
		if ($city == "Kelowna" || $city == "Saanich" || $city == "Kamloops" || $city == "Nanaimo"
				|| $city == "Victoria" || $city == "Prince George") {
			$areaCode = "250";
		}
		// alberta
		if ($city == "Calgary" || $city == "Edmonton" || $city == "Red Deer" || $city == "Lethbridge"
				|| $city == "St. Albert" || $city == "Medicine Hat" || $city == "Grande Prairie") {
			$areaCode = "587";
		}
		// saskatchewan
		if ($city == "Saskatoon" || $city == "Regina" || $city == "Prince Albert" || $city == "Moose Jaw"
				|| $city == "Yorkton") {
			$areaCode = "306";				
		}
		// manitoba
		if ($city == "Winnipeg" || $city == "Brandon" || $city == "Steinbach" || $city == "Portage la Prairie" 
				|| $city == "Thompson" || $city == "Winkler" || $city == "Selkirk" || $city == "Dauphn"
				|| $city == "Morden") {
			$areaCode = "204";				
		}
		// ontario
		if ($city == "Toronto") {
			$areaCode = "416";				
		}
		if ($city == "Ottawa" || $city == "Kingston" || $city == "Belleville") {
			$areaCode = "613";				
		}
		if ($city == "Brampton" || $city == "Hamilton" || $city == "Markham" ||  $city == "Vaughan"
				||  $city == "Richmond Hill"|| $city == "Oakville" || $city == "Burlington" || $city == "Oshawa"
				|| $city == "St. Catharines" || $city == "Whitby" || $city == "Ajax" || $city == "Pickering"
				|| $city == "Milton" || $city == "Niagra Falls" || $city == "Newmarket" || $city == "Halton Hills") {
			$areaCode = "289";				
		}
		if ($city == "London" || $city == "Kitchener" || $city == "Windsor" || $city == "Cambridge"
				|| $city == "Guelph" || $city == "Chatham-Kent" || $city == "Waterloo" || $city == "Brantford"
				|| $city == "Sarnia" || $city == "Caledon") {
			$areaCode = "519";				
		}
		if ($city == "Greater Sudbury" || $city == "Barrie" || $city == "Sault Ste. Marie" || $city == "North Bay") {
			$areaCode = "705";
		}
		if ($city == "Thunder Bay") {
			$areaCode = "807";
		}
		if ($city == "Clarington" || $city == "Aurora" || $city == "Welland" || $city == "Mississauga") {
			$areaCode = "289";
		}
		// quebec
		if ($city == "Montreal" || $city == "Dollard-des-Ormeaux") {
			$areaCode = "514";
		}
		if ($city == "Quebec City" || $city == "Saguenay" || $city == "L?vis") {
			$areaCode = "418";
		}
		if ($city == "Laval" || $city == "Longueuil" || $city == "Terrebonne" || $city == "Repentigny"
				|| $city == "Brossard" || $city == "Saint-J?r?me" || $city == "Granby"
				|| $city == "Blainville") {
			$areaCode = "450";
		}
		if ($city == "Gatineau" || $city == "Sherbrooke" || $city == "Trois-Rivi?res"
				|| $city == "Drummondville" || $city == "Shawinigan") {
			$areaCode = "819";
		}
		// nb
		if ($city == "Saint John" || $city == "Moncton" || $city == "Fredericton" || $city == "Dieppe"
				|| $city == "Miramichi" || $city == "Edmundston" || $city == "Bathurst") {
			$areaCode = "506";
		}
		// pei and ns
		if ($city == "Charlottetown" || $city == "Summerside" || $city == "Stratford" || $city == "Cornwall"
				|| $city == "Halifax" || $city == "Cape Breton") {
			$areaCode = "902";
		}
		// newfoundland
		if ($city == "St. John's" || $city == "Mount Pearl" || $city == "Corner Brook") {
			$areaCode = "709";
		}
	}
	// American area codes
	else {
		// alabama
		if ($city == "Birmingham") {
			$areaCode = "205";
		}
		if ($city == "Montgomery") {
			$areaCode = "334";
		}
		if ($city == "Mobile") {
			$areaCode = "251";
		}
		// hawaii
		if ($city == "Honolulu") {
			$areaCode = "808";
		}
		// massachusetts
		if ($city == "Boston") {
			$areaCode = "617";
		}
		if ($city == "Worcester") {
			$areaCode = "508";
		}
		if ($city == "Springfield") {
			$areaCode = "413";
		}
		// new mexico
		if ($city == "Albuquerque" || $city == "Rio Rancho") {
			$areaCode = "505";
		}
		if ($city == "Las Cruces") {
			$areaCode = "575";
		}
		// south dakota
		if ($city == "Sioux Falls" || $city == "Rapid City" || $city == "Aberdeen") {
			$areaCode = "605";
		}
		// alaska
		if ($city == "Anchorage" || $city == "Fairbanks" || $city == "Juneau") {
			$areaCode = "907";
		}
		// idaho
		if ($city == "Boise" || $city == "Nampa" || $city == "Meridian") {
			$areaCode = "208";
		}
		// michigan
		if ($city == "Detroit") {
			$areaCode = "313";
		}
		if ($city == "Grand Rapids") {
			$areaCode = "616";
		}
		if ($city == "Warren") {
			$areaCode = "586";
		}
		// ny
		if ($city == "New York") {
			$areaCode = "212";
		}
		if ($city == "Buffalo") {
			$areaCode = "716";
		}
		if ($city == "Rochester") {
			$areaCode = "585";
		}
		// tennessee
		if ($city == "Memphis") {
			$areaCode = "901";
		}
		if ($city == "Nashville") {
			$areaCode = "615";
		}
		if ($city == "Knoxville") {
			$areaCode = "865";
		}
		// arizona
		if ($city == "Phoenix" || $city == "Mesa") {
			$areaCode = "480";
		}
		if ($city == "Tucson") {
			$areaCode = "520";
		}
		// illinois
		if ($city == "Chicago") {
			$areaCode = "312";
		}
		if ($city == "Aurora") {
			$areaCode = "630";
		}
		if ($city == "Rockford") {
			$areaCode = "815";
		}
		// minnesota
		if ($city == "Minneapolis") {
			$areaCode = "612";
		}
		if ($city == "Saint Paul") {
			$areaCode = "651";
		}
		if ($city == "Bloomington") {
			$areaCode = "952";
		}
		// north carolina
		if ($city == "Charlotte") {
			$areaCode = "704";
		}
		if ($city == "Raleigh") {
			$areaCode = "919";
		}
		if ($city == "Greensboro") {
			$areaCode = "336";
		}
		// texas
		if ($city == "Houston") {
			$areaCode = "281";
		}
		if ($city == "San Antonio") {
			$areaCode = "210";
		}
		if ($city == "Dallas") {
			$areaCode = "214";
		}
		// arkansas
		if ($city == "Little Rock") {
			$areaCode = "501";
		}
		if ($city == "Fort Smith" || $city == "Fayetteville") {
			$areaCode = "479";
		}
		// indiana
		if ($city == "Indianapolis") {
			$areaCode = "317";
		}
		if ($city == "Fort Wayne") {
			$areaCode = "260";
		}
		if ($city == "Evansville") {
			$areaCode = "812";
		}
		// mississippi
		if ($city == "Jackson") {
			$areaCode = "601";
		}
		if ($city == "Gulfport") {
			$areaCode = "228";
		}
		if ($city == "Southaven") {
			$areaCode = "662";
		}
		// north dakota
		if ($city == "Fargo" || $city == "Bismarck" || $city == "Grand Forks") {
			$areaCode = "701";
		}
		// utah
		if ($city == "Salt Lake City" || $city == "West Valley City" || $city == "Provo") {
			$areaCode = "385";
		}
		// california
		if ($city == "Los Angeles") {
			$areaCode = "213";
		}
		if ($city == "San Diego") {
			$areaCode = "619";
		}
		if ($city == "San Jose") {
			$areaCode = "408";
		}
		// iowa
		if ($city == "Des Moines") {
			$areaCode = "515";
		}
		if ($city == "Cedar Rapids") {
			$areaCode = "319";
		}
		if ($city == "Davenport") {
			$areaCode = "563";
		}
		// missouri
		if ($city == "Kansas City" || $city == "Independence") {
			$areaCode = "816";
		}
		if ($city == "St. Louis") {
			$areaCode = "314";
		}
		// ohio
		if ($city == "Columbus") {
			$areaCode = "614";
		}
		if ($city == "Cleveland") {
			$areaCode = "216";
		}
		if ($city == "Cincinnati") {
			$areaCode = "513";
		}
		// vermont
		if ($city == "Burlington" || $city == "Rutland" || $city == "Barre") {
			$areaCode = "802";
		}
		// colorado
		if ($city == "Denver") {
			$areaCode = "303";
		}
		if ($city == "Colorado Springs") {
			$areaCode = "719";
		}
		if ($city == "Fort Collins") {
			$areaCode = "970";
		}
		// kansas
		if ($city == "Wichita") {
			$areaCode = "316";
		}
		if ($city == "Overland Park" || $city == "Olathe") {
			$areaCode = "913";
		}
		// montana
		if ($city == "Billings" || $city == "Missoula" || $city == "Great Falls") {
			$areaCode = "406";
		}
		// oklahoma
		if ($city == "Oklahoma City" || $city == "Norman") {
			$areaCode = "405";
		}
		if ($city == "Tulsa") {
			$areaCode = "539";
		}
		// virginia
		if ($city == "Virginia Beach" || $city == "Norfolk" || $city == "Chesapeake") {
			$areaCode = "757";
		}
		// connecticut
		if ($city == "Bridgeport" || $city == "New Haven") {
			$areaCode = "203";
		}
		if ($city == "Hartford") {
			$areaCode = "860";
		}
		// kentucky
		if ($city == "Louisville") {
			$areaCode = "503";
		}
		if ($city == "Lexington") {
			$areaCode = "859";
		}
		if ($city == "Bowling Green") {
			$areaCode = "419";
		}
		//nebraska
		if ($city == "Omaha" || $city == "Lincoln" || $city == "Bellevue") {
			$areaCode = "402";
		}
		// oregon
		if ($city == "Portland" || $city == "Salem") {
			$areaCode = "503";
		}
		if ($city == "Eugene") {
			$areaCode = "458";
		}
		// washington
		if ($city == "Seattle") {
			$areaCode = "206";
		}
		if ($city == "Spokane") {
			$areaCode = "509";
		}
		if ($city == "Tacoma") {
			$areaCode = "253";
		}
		// delaware
		if ($city == "Wilmington" || $city == "Dover" || $city == "Middleton") {
			$areaCode = "302";
		}
		// louisiana
		if ($city == "New Orleans") {
			$areaCode = "504";
		}
		if ($city == "Baton Rouge") {
			$areaCode = "225";
		}
		if ($city == "Shreveport") {
			$areaCode = "318";
		}
		// nevada
		if ($city == "Las Vegas" || $city == "Henderson") {
			$areaCode = "702";
		}
		if ($city == "Reno") {
			$areaCode = "775";
		}
		// pennsylvania
		if ($city == "Philadelphia") {
			$areaCode = "215";
		}
		if ($city == "Pittsburgh") {
			$areaCode = "412";
		}
		if ($city == "Allentown") {
			$areaCode = "610";
		}
		// west virginia
		if ($city == "Charleston" || $city == "Huntington" || $city == "Parkersburg") {
			$areaCode = "304";
		}
		// florida
		if ($city == "Jacksonville") {
			$areaCode = "904";
		}
		if ($city == "Miami") {
			$areaCode = "305";
		}
		if ($city == "Tampa") {
			$areaCode = "813";
		}
		// maine
		if ($city == "Lewiston" || $city == "Bangor" || $city == "South Portland") {
			$areaCode = "207";
		}
		// new hampshire
		if ($city == "Manchester" || $city == "Nashua" || $city == "Concord") {
			$areaCode = "603";
		}
		// rhode island
		if ($city == "Providence" || $city == "Warwick" || $city == "Cranston") {
			$areaCode = "401";
		}
		// wisconsin
		if ($city == "Milwaukee") {
			$areaCode = "414";
		}
		if ($city == "Madison") {
			$areaCode = "608";
		}
		if ($city == "Green Bay") {
			$areaCode = "902";
		}
		// georgia
		if ($city == "Atlanda") {
			$areaCode = "404";
		}
		if ($city == "Augusta") {
			$areaCode = "706";
		}
		if ($city == "Macon") {
			$areaCode = "478";
		}
		// maryland
		if ($city == "Baltimore") {
			$areaCode = "410";
		}
		if ($city == "Frederick" || $city == "Rockville") {
			$areaCode = "301";
		}
		// new jersey
		if ($city == "Newark") {
			$areaCode = "862";
		}
		if ($city == "Jersey City" || $city == "Paterson") {
			$areaCode = "201";
		}
		// south carolina
		if ($city == "Columbia") {
			$areaCode = "803";
		}
		if ($city == "Charleston" || $city == "Mount Pleasant") {
			$areaCode = "843";
		}
		// wyoming
		if ($city == "Cheyenne" || $city == "Casper" || $city == "Laramie") {
			$areaCode = "307";
		}
	}
	
	$phone = "(" . $areaCode . ") " . $randomPhone;
	$_SESSION["phone"] = $phone;
?>