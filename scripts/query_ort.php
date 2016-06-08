<?php
/* This file returns a recommendation */
/*
   TODO: Save input from GET
   TODO: Database connection
   TODO: Query fitting city name
   TODO: Return city name by echo'ing
*/

$input = $_GET["txt"];
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
		echo $row["name"];
    }
} else {
    echo "No cities found.";
}
$conn->close();
