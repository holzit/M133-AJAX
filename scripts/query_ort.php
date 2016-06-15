<?php
/* This file returns a recommendation */

$input = $_REQUEST["txt"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m133_ajax";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM ort";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		// Does the row start with $input?
		if(substr_compare($row["name"], utf8_decode($input), 0, strlen(utf8_decode($input))) === 0) {
			// Return result and stop looping
			echo utf8_encode($row["name"]." ");
		}
    }
}

$conn->close();
