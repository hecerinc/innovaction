<?php
function connectDB($server = "localhost", $user , $pass, $db = "mainsite"){
	$conn = new mysqli($server, $user, $pass, $db);

	if($conn->connect_error)
		die("Connection failed: ". $conn->connect_error);

	return $conn;
}
