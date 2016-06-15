<?php
/* 
	This repo is part of a small school project about AJAX.
    Copyright (C) 2016  Severin Fürbringer
    Copyright (C) 2016  Austin Albrech
    Copyright (C) 2016  Gianluca Scarciolla

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

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

if($id == NULL) {
	$sql = "INSERT INTO ort (name) VALUES('$ort')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "Neuer Ort hinzugefügt. ";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$sql = "INSERT INTO person (vorname, nachname, ort)
	VALUES ('$vorname', '$nachname', LAST_INSERT_ID())";
} else {
	$sql = "INSERT INTO person (vorname, nachname, ort)
	VALUES ('$vorname', '$nachname', '$id')";
}

if ($conn->query($sql) === TRUE) {
    echo "Vielen Dank für Ihre Daten!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
