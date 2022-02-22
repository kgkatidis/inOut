<?php
function readJson() {
	$strJsonFileContents = file_get_contents("locationsData.json");
	$array = json_decode($strJsonFileContents, true);
	if (count($array) < 95) {
		for ($x = count($array)+1; $x <= 95; $x++) {
			$element = array();
			$element['id'] = "No$x";
			$element['state'] = "";
			$element['lastChange'] = "";
			array_push($array, $element);
		}
		$fp = fopen('locationsData.json', 'w');
		fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
		fclose($fp);
	}
	echo (json_encode($array));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$data = json_decode(file_get_contents('php://input'), true);
	$fp = fopen('locationsData.json', 'w');
	fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
	fclose($fp);
	echo 'Successful saving';
}

?>