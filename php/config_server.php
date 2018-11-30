<?php

	// Connect to Database ======================================================

	$servername = "198.57.247.176";
	$username = "jmart825_1";
	$password = "!MRferrari825";
	$dbname = "jmart825_magiclister";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		//$data['message'] = 'Connection failed: ' . $conn->connect_error;
		$data['message'] = 'Ops! The connection to the server failed.';
	}
?>