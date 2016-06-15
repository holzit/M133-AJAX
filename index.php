<!DOCTYPE html>
<html>
	<head>
		<title>M133 - AJAX demo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/ico/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/ico/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/ico/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/ico/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/ico/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/ico/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/ico/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/ico/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/ico/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/ico/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="img/ico/manifest.json">
		<link rel="shortcut icon" href="img/ico/favicon.ico">
		<meta name="msapplication-TileColor" content="#16abc0">
		<meta name="msapplication-TileImage" content="img/ico/mstile-144x144.png">
		<meta name="msapplication-config" content="img/ico/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

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
					<span id="result" class="linkst"></span>
				</div>

				<div class="group">
				<button id="send" class="buttonf" type="button">Send</button>
				</div>

		</form>

		<h5 class="titlec">Copryright &copy; Severin Fürbringer, Austin Albrecht and Gianluca Scarciolla</h5>



<p class="ntextc">Download this Project now on <a href="https://github.com/Hoi15A/M133-AJAX">GitHub</span><a/></p>

		<button id="killcss" type="button">Kill CSS</button>

</div>

	<script src="scripts/autocomplete.js"></script>
	<script src="scripts/killcss.js"></script>
	</body>
</html>
