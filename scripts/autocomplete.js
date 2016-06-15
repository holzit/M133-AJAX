/* 
	This repo is part of a small school project about AJAX.
    Copyright (C) 2016  Severin Fürbringer
    Copyright (C) 2016  Austin Albrecht
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

(function() {
	/* DOM ready */

	var ort_input = document.getElementById("ort");
	var result_output = document.getElementById("result");
	var send = document.getElementById("send");

	send.onclick = function() {
		var vorname = document.getElementById("vorname").value;
		var nachname = document.getElementById("nachname").value;
		var ort = document.getElementById("ort").value;
		var ajax_request = new XMLHttpRequest();

		ajax_request.onreadystatechange = function() {
			// Request ready & received
			if(ajax_request.readyState == 4 && ajax_request.status == 200) {
				// Finally, output the recommendation!
				result_output.innerHTML = ajax_request.responseText;
			}
		};
		ajax_request.open("GET", "scripts/insert_name.php?vorname=" + vorname + "&nachname=" + nachname + "&ort=" + ort, true);
		ajax_request.send();
	}

	/*
	 * Executes AJAX query every time
	 */
	ort_input.onkeyup = function() {
		var text = this.value; // The string the user has written so far

		if(text.length == 0) {
			// Input field is empty
			result_output.innerHTML = "&nbsp;";
			// Done for now
			return;
		} else if(text.length >= 2) {
			// User has written at least two chars
			var ajax_request = new XMLHttpRequest();
			ajax_request.onreadystatechange = function() {
				// Request ready & received
				if(ajax_request.readyState == 4 && ajax_request.status == 200) {
					// Finally, output the recommendation!
					result_output.innerHTML = ajax_request.responseText;
				}
			};
			ajax_request.open("GET", "scripts/query_ort.php?txt=" + text, true);
			ajax_request.send();
		}
	};

}) ();

function autoInsert (ort){
	document.getElementById("ort").value=ort;
	document.getElementById("result").innerHTML = "";
};
