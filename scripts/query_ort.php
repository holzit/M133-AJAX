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
		if(substr_compare(strtolower($row["name"]),
			strtolower(utf8_decode($input)), 0, strlen(utf8_decode($input))) === 0) {

			// Return result and stop looping
			echo utf8_encode('<a href="#" onclick="autoInsert(this.innerHTML);">'.$row["name"]."</a><br>");
		}
    }
}

$conn->close();
