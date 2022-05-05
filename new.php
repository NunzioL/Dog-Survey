<!DOCTYPE html>
<html>
	<head>
		<title>K9 Breeds</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/quiz.css">
		
		<script type = "text/javascript" src="javascript/quiz.js"></script>
		
		<?php 
			//connect database
			include_once('connect.php');
		?>
	</head>
	
	<body>
		<div class="topnav">
			<a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a class="active" href="#quiz">Dog Matcher</a>
			<a href="database.html">Database</a>
		</div>
		
		<h3 id="questNum"></h3>
		<center>
			<h2 id = "questLoc"></h2>
			<br>
			<img id = "image" src = "#img" alt = "scale images" width = "60%">
			<br>
			<form action = "#">
				<input id = "c1" class = "chbutton" type = "button" value = "1">
				<input id = "c2" class = "chbutton" type = "button" value = "2">
				<input id = "c3" class = "chbutton" type = "button" value = "3">
				<input id = "c4" class = "chbutton" type = "button" value = "4">
				<input id = "c5" class = "chbutton" type = "button" value = "5">
				<br><br>
				<input id = "nextBtn" class = "nxtbttn" type = "button" value = "Next">
			</form>
			
			<p id = "demo"></p>
		</center>
	</body>
</html>