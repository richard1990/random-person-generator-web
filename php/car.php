<?php
	/**
	 * This file generates a random car.
	 */
	$yearsArr = array("2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010");
	$carsArr = array( "Chevy Malibu", "Ford F-150", "Mazda 3 Sport", "Hyundai Sonata", "Toyota Camry",
				"Mazda 6", "Hyundai Elantra", "Kia Rio", "Nissan Altima", "Honda Accord", "Honda Civic",
				"Ford Fusion", "Chevy Silverado", "GMC Sierra", "Dodge Grand Caravan");
	$car = "";
	$age = "";
	if (isset($_SESSION["age"])) {
		$age = $_SESSION["age"];
	}
	// people under 20 do not own a car
	if ($age < 20) {
		$car = "N/A";
	}
	else {
		$car = $yearsArr[rand(0, count($yearsArr) - 1)] . " " . $carsArr[rand(0, count($carsArr) - 1)];
	}
	$_SESSION["car"] = $car;
?>