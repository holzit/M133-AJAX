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
