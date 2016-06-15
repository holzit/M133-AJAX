<?php

$vorname = $_REQUEST["vorname"];
$nachname = $_REQUEST["nachname"];
$ort = $_REQUEST["ort"];
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

$id = NULL;
$sql = "SELECT id, name FROM ort";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if(substr_compare(strtolower($row["name"]),
			strtolower(utf8_decode($ort)), 0, strlen(utf8_decode($ort))) === 0) {
			$id = $row["id"];
		}
    }
}

/* INSERT */
$sql = "INSERT INTO person (vorname, nachname, ort)
VALUES ('$vorname', '$nachname', $id)";

if ($conn->query($sql) === TRUE) {
    echo "Vielen Dank für Ihre Daten!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
