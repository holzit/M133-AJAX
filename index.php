<!DOCTYPE html>
<html>
	<head>
		<title>M133 - AJAX demo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	</head>
	<body>

<div class="content-c">


		<h1 class="titlec">Persönliche Daten</h1>
	</br>
		<form>

					<div class="group">
						<input id="vorname" name="vorname">
							<span class="highlight"></span>
							<span class="bar"></span>
						<label for="vorname">Ihr Vorname:</label>
					</div>

				<div class="group">
					<input id="nachname" name="nachname">
						<span class="highlight"></span>
						<span class="bar"></span>
					<label for="nachname">Ihr Nachname:</label>
				</div>

				<div class="group">
					<input type="text" id="ort" name="ort">
						<span class="highlight"></span>
						<span class="bar"></span>
					<label for="ort">Ihr Wohnort:</label>
					<span id="result">&nbsp;</span>
				</div>

				<div class="group">
				<button class="buttonf" type="button" onclick="alert('Hello World!')">Send</button>
				</div>

		</form>

		<h5 class="titlec">Copryright &copy; Severin Fürbringer, Austin Albrecht and Gianluca Scarciolla</h5>

</div>

	<script src="scripts/autocomplete.js"></script>
	</body>
</html>
