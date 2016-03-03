<?php
	/**
	 * This file generates a person's random favourite food.
	 */
	$favFoodArr = array("Steak", "Carrot", "Potato", "Apple", "Orange", "Rice", "Salmon", "Beans", "Hamburger", "Shrimp", "Pancakes", "Turkey", "Chicken", "Grapes", "Blueberries", "Strawberries",);
	$favFood = $favFoodArr[rand(0, count($favFoodArr) - 1)];
	$_SESSION["favFood"] = $favFood;
?>