<?php
date_default_timezone_set("America/New_York");
function readJson() {
	$strJsonFileContents = file_get_contents("locationsData.json");
	$array = json_decode($strJsonFileContents, true);
	if (count($array) < 95) {
		for ($x = count($array); $x <= 95; $x++) {
			$element = array();
			$element['id'] = "No" + str($x);
			$element['state'] = "";
			$element['lastChange'] = date("Y-m-d h:i:sa");
			array_push($array, $element);
		}
	}
	var_dump($array);
}

if (isset($POST['submit'])) {
	readJson();
}

?>